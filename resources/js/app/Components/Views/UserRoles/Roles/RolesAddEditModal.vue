<template>
    <modal :modal-id="userAndRoles.roles.addEditModalId"
                     :title="modalTitle"
                     :preloader="preloader"
                     @submit="submit"
                     @close-modal="closeModal">

        <template slot="body">
            <app-overlay-loader v-if="preloader"/>
            <form ref="form"
                  :data-url='selectedUrl ? `admin/auth/roles/${userAndRoles.rowData.id}` : `admin/auth/roles`'
                  class="mb-0"
                  :class="{'loading-opacity': preloader}">
                <div v-if="userAndRoles.roles.addEditModalTitle == 'role'"
                     class="form-group">
                    <label>{{ $t('role_name') }}</label>
                    <app-input type="text"
                               v-model="inputs.name"
                               :placeholder="$t('enter_a_role_name')"
                               :required="true"/>
                </div>
                <div class="form-group mb-0" v-if="!preloader">
                    <label>{{ $t('permission') }}</label>
                    <div id="accordionExample" class="accordion" v-if="groupLoaded">
                        <div class="card" v-for="(permission, index) in Object.keys(userAndRoles.permissionList)"
                             :key="`permission-item-${index}`">
                            <div class="card-header border-0">
                                <div
                                    class="custom-checkbox-default d-block position-relative text-capitalize collapsible-link py-2 cursor-pointer"
                                    data-toggle="collapse"
                                    :data-target="`#${permission}`"
                                    aria-expanded="false"
                                    :aria-expanded="`${checkForVisibility(index, permission)? true : false}`"
                                    aria-controls="permission">
                                    <div class="customized-checkbox checkbox-default">
                                        <input type="checkbox"
                                               :name="`single-checkbox-${permission}`"
                                               :id="`single-checkbox-${permission}`"
                                               :value="permission"
                                               :checked="isCheckedCheckbox[permission]"
                                               ref="checkbox"
                                               @click="$event.stopPropagation() , groupCheck($event , permission)"/>
                                        <label class="mb-0"
                                               :for="`single-checkbox-${permission}`"
                                               @click="$event.stopPropagation()">
                                            {{ $t(permission) }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div :id="permission"
                                 data-parent="#accordionExample"
                                 :class="`collapse ${checkForVisibility(index, permission)? 'show' : ''}`">
                                <div class="card-body p-primary">
                                    <app-input type="checkbox"
                                               v-if="subGroupLoaded"
                                               :list="userAndRoles.permissionList[permission]"
                                               v-model="checkedPermissions[permission]"
                                               @changed="checkPermissions($event,permission )"
                                               list-value-field="translated_name"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </template>

    </modal>
</template>
<script>

    import {FormMixin} from '../../../../../core/mixins/form/FormMixin';
    import {ModalMixin} from '../../../../Mixins/ModalMixin';
    import {UserAndRoleMixin} from '../Mixins/UserAndRoleMixin';
    import '../../../../Helpers/Helpers';

    export default {
        name: "RolesAddEditModal",
        mixins: [FormMixin, ModalMixin, UserAndRoleMixin],
        props: {
            data: Object,
            manage: {}
        },
        data() {
            return {
                inputs: {
                    name: '',
                    type_id: 1,
                },
                permissions: [],
                checkedPermissions: {},
                types: [],
                subGroupLoaded: true,
                groupLoaded: true,
                isCheckedCheckbox: {},
                modalTitle:this.$t('add_role'),
            }
        },
        created() {
            if (this.selectedUrl) {
                this.preloader = true;
                this.modalTitle = this.manage ? this.$t('manage_permission') : this.$t('edit_role');
            }

            Object.keys(this.userAndRoles.permissionList)
                .forEach(permission => {
                    this.checkedPermissions[permission] = [];
                    this.isCheckedCheckbox[permission] = false;
                });

        },
        methods: {

            submit() {
                const role = {
                    ...this.inputs,
                    permissions: this.permissions.map(permission => {
                        return {
                            permission_id: permission
                        }
                    })
                };
                this.fieldStatus.isSubmit = true;

                this.save(role);
            },

            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                this.reLoadTable();
            },

            afterSuccessFromGetEditData(response) {

                this.inputs.name = response.data.name;
                this.permissions = this.collection(response.data.permissions).pluck('id');

                Object.keys(this.userAndRoles.permissionList).map(permissionElement => {

                    let checked = this.userAndRoles.permissionList[permissionElement].filter(permissionElement => {
                        return this.permissions.includes(permissionElement.id);
                    });

                    this.checkedPermissions[permissionElement] = this.collection(checked).pluck('id');

                    if (this.checkedPermissions[permissionElement].length === this.userAndRoles.permissionList[permissionElement].length) {
                        this.isCheckedCheckbox[permissionElement] = true;
                    }
                });

                setTimeout(() => {
                    this.preloader = false;
                })
            },

            checkPermissions(event, permissionItem) {
                let ele = event.target,
                    value = parseInt(ele.value);

                if (ele.checked) {

                    this.permissions.push(value);

                } else {

                    const index = this.permissions.indexOf(value);
                    this.permissions.splice(index, 1);

                }
                this.setCheckPermission(value, permissionItem);
            },

            setCheckPermission(value, permissionItem) {

                this.groupLoaded = false;
                let selectedItem = [];
                const arr = this.collection(this.userAndRoles.permissionList[permissionItem]).pluck('id');

                selectedItem = arr.filter((item, index) => {

                    if (this.permissions.includes(item)) {

                        this.checkedPermissions[permissionItem] = [...this.checkedPermissions[permissionItem], item];
                        return item;
                    }
                });

                this.isCheckedCheckbox[permissionItem] = arr.length === selectedItem.length;

                this.groupLoaded = true;
            },

            groupCheck(event, itemPermission) {

                this.subGroupLoaded = false;

                const permissions = this.collection(this.userAndRoles.permissionList[itemPermission]).pluck('id');

                if (event.target.checked) {

                    this.$set(this.checkedPermissions, itemPermission, permissions);
                    this.isCheckedCheckbox[itemPermission] = true;

                    permissions.forEach(element => {
                        this.permissions = Array.from(new Set(this.permissions.concat(element)));
                    });
                } else {

                    this.$set(this.checkedPermissions, itemPermission, []);
                    this.isCheckedCheckbox[itemPermission] = false;
                    permissions.forEach(element => {

                        if (this.permissions.includes(element)) {
                            this.permissions.splice(this.permissions.indexOf(element), 1);
                        }
                    });
                }
                this.subGroupLoaded = true;
            },

            checkForVisibility(index, permission) {
                return (this.checkedPermissions[permission] && this.checkedPermissions[permission].length);
            },
        }
    }

</script>

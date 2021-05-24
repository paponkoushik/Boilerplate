<template>
    <modal :modal-id="userAndRoles.users.manageUserModalId"
                     :title="modalTitle"
                     :preloader="preloader"
                     :modal-scroll="modalScroll"
                     @submit="submit"
                     @close-modal="closeModal">
        <template slot="body">
            <app-overlay-loader v-if="preloader"/>
            <template v-else>
                <div v-for="(user, index) in usersList" :key="index"
                     class="d-flex align-items-center justify-content-between"
                     :class="{'pb-3 mb-3 border-bottom': index !== usersList.length - 1}">
                    <div class="media d-flex align-items-center">
                        <div class="avatars-w-50">
                            <app-avatar :title="user.full_name"
                                        :shadow="true"
                                        :img="$optional(user.profile_picture, 'full_url')"
                                        :alt-text="user.full_name"/>

                        </div>
                        <div class="media-body ml-3">
                            {{ user.full_name }}
                            <p class="text-muted font-size-90 mb-0">{{ user.email }}</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" @click="removeUser(user, index)"
                           class="d-flex align-items-center text-muted font-size-90">
                            <app-icon name="trash" class="mr-1" width="19"/>
                            {{$t('remove')}}
                        </a>
                    </div>
                </div>
                <form ref="form"
                      :data-url='`admin/auth/roles/${userAndRoles.rowData.id}/attach-users`'
                      class="mb-0">
                    <div class="mt-primary" ref="form" data-url="attach-user">
                        <app-input type="multi-select"
                                   :list="attachableUsers"
                                   list-value-field="full_name"
                                   :required="true"
                                   v-model="selectedUsers"/>
                    </div>
                </form>
            </template>
        </template>
    </modal>
</template>

<script>
    import {ModalMixin} from '../../../../Mixins/ModalMixin';
    import {FormMixin} from '../../../../../core/mixins/form/FormMixin';
    import {UserAndRoleMixin} from '../Mixins/UserAndRoleMixin';
    import Dashboard from "../../Demo/Dashboard/Default";
    import * as actions from '../../../../Config/ApiUrl';

    export default {
        name: "ManageUsersModal",
        components: {Dashboard},
        mixins: [ModalMixin, FormMixin, UserAndRoleMixin],
        data() {
            return {
                search: '',
                usersList: [],
                selectedUsers: [],
                modalHeight: '',
                modalScroll: true,
                modalTitle: this.$t('manage_users'),
            }
        },
        created() {
            this.getAllUsers();
        },
        mounted() {
            $('#manage-users-modal').on('shown.bs.modal',  (e) => {
                this.modalHeight =  $("#manage-users-modal .modal-dialog").height();
                this.modalScroll = this.modalHeight > 530;
            });
        },
        watch: {
            'userAndRoles.rowData.users.length': {
                handler: function (users) {
                    this.usersList = this.userAndRoles.rowData.users;
                    this.$store.dispatch(
                        'getUsers', {
                            users: this.collection(this.userAndRoles.rowData.users).pluck('id')
                        });
                },
                immediate: true
            }
        },
        computed: {
            attachableUsers() {
                return this.$store.getters.getUsers;
            }
        },
        methods: {
            getAllUsers(){
                this.usersList = this.attachableUsers.filter(user => {
                    return this.selectedUsers.includes(user.id);
                }).concat(this.usersList);

                this.$store.dispatch('getUsers', {
                    users:this.collection(this.userAndRoles.rowData.users).pluck('id').concat(this.selectedUsers)
                });
            },
            removeUser(user, index) {
                this.preloader = true;
                const url = actions.DETACH_ROLES + user.id;
                this.axiosPost({
                    url,
                    data: {
                        roles: this.userAndRoles.rowData.id
                    }
                }).then(response => {
                    this.reLoadTable();
                    this.$toastr.s(response.data.message);
                    this.usersList = this.collection(this.usersList).removeObject(user.id);
                    this.$store.dispatch('addUser', user);
                }).catch(error => {
                    this.$toastr.e(error.response.data.message || error.response.statusText);
                }).finally(response => {
                    this.preloader = false;
                });
            },
            submit() {
                let obj = {
                    roles: this.userAndRoles.rowData.id,
                    users: this.selectedUsers
                };
                this.save(obj);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                this.reLoadTable();
            },
        }
    }
</script>

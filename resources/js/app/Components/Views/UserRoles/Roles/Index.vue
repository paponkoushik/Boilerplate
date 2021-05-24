<template>
    <div class="card card-with-shadow border-0 h-100">
        <div class="card-header d-flex align-items-center p-primary primary-card-color">
            <h5 class="card-title d-inline-block mb-0">{{ $t('roles') }}</h5>
            <app-search @input="getSearchValue"/>
        </div>
        <div class="card-body p-0">
            <app-table :id="data.tableId" :search="search" :options="rolesTableOptions" @action="action"/>
        </div>
    </div>
</template>

<script>
    import {TableMixin} from '../Mixins/TableMixin';
    import * as actions from '../../../../Config/ApiUrl';
    export default {
        name: "Role",
        mixins: [TableMixin],
        data() {
            return {
                rolesTableOptions: {
                    name: 'Roles',
                    url: actions.ROLES,
                    datatableWrapper: false,
                    showHeader: true,
                    tableShadow: false,
                    columns: [
                        {
                            title: this.$t('role_name'),
                            type: 'text',
                            key: 'name',
                        },
                        {
                            title: this.$t('permission'),
                            type: 'button',
                            key: 'name',
                            className: 'btn btn-sm btn-primary rounded-pill px-3 py-1',
                            label: this.$t('manage'),
                            modifier: (value, row) => {
                                return row.is_default ? false : this.$t('manage')
                            }
                        },
                        {
                            title: this.$t('users'),
                            type: 'component',
                            key: 'users',
                            isVisible: true,
                            className: 'w-100',
                            componentName: 'group-of-users',
                        },
                        {
                            title: this.$t('action'),
                            type: 'action',
                            key: 'invoice',
                            isVisible: true
                        },
                    ],
                    showSearch: true,
                    showFilter: false,
                    paginationType: 'loadMore',
                    responsive: true,
                    rowLimit: 10,
                    showAction: true,
                    orderBy: 'desc',
                    actionType: "dropdown",
                    actions: [
                        {
                            title: this.$t('edit'),
                            type: 'modal',
                            component: 'roles-add-edit-modal',
                            modalId: 'roles-add-edit-modal',
                            modifier: (row) => {
                                return row.is_default ? false : true;
                            },
                            uniqueKey: '',
                        },
                        {
                            title: this.$t('delete'),
                            type: 'modal',
                            component: 'manage-delete-Modal',
                            modalId: 'role-delete-Modal',
                            modifier: (row) => {
                                return row.is_default ? false : true;
                            },
                        },
                        {
                            title: this.$t('manage_users'),
                            type: 'modal',
                            component: 'manage-users-modal',
                            modalId: 'manage-users-modal',
                        }
                    ],
                },
            }
        }
    }
</script>

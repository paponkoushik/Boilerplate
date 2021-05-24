<template>
    <div class="card card-with-shadow border-0 pb-primary">
        <div class="card-header d-flex align-items-center p-primary primary-card-color">
            <h5 class="card-title d-inline-block mb-0">{{ $t('users') }}</h5>
            <app-search @input="getSearchValue"/>
        </div>
        <div class="p-primary d-flex align-items-center primary-card-color">
            <ul class="nav tab-filter-menu justify-content-flex-end">
                <li class="nav-item" v-for="(item, index) in userFilterOptions" :key="index">
                    <a href="#"
                       class="nav-link py-0 font-size-default"
                       :class="[value == item.id ? 'active' : index === 0 && value === '' ? 'active': '']"
                       @click="getFilterValue(item.id)">
                        {{ item.translated_name }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body px-primary">
            <app-table :id="data.tableId"
                       class="remove-datatable-x-padding"
                       :options="userTableOptions"
                       :filtered-data="filteredData"
                       :search="search"
                       @action="action"/>
        </div>
    </div>
</template>

<script>
    import {TableMixin} from '../Mixins/TableMixin';
    import * as actions from '../../../../Config/ApiUrl';

    export default {
        name: "User",
        mixins: [TableMixin],
        data() {
            return {
                value: '',
                filteredData: {},
                userTableOptions: {
                    name: 'Users',
                    url: actions.USERS,
                    tablePaddingClass: 'pt-0',
                    datatableWrapper: false,
                    showHeader: false,
                    tableShadow: false,
                    columns: [
                        {
                            title: this.$t('user'),
                            type: 'media-object',
                            key: 'image',
                            imgKey: "image",
                            mediaTitleKey: 'full_name',
                            mediaSubtitleKey: 'email',
                            default: "",
                            isVisible: true,
                            modifier:(value, row)=>{
                                return value ? value.path : '';
                            }
                        },
                        {
                            title: this.$t('status'),
                            type: 'custom-html',
                            key: 'status',
                            isVisible: true,
                            modifier: (value) => {
                                return `<span class="badge badge-sm badge-pill badge-${value.class}">${value.translated_name}</span>`;
                            }
                        },
                        {
                            title: this.$t('action'),
                            type: 'action',
                            key: 'invoice',
                            isVisible: true
                        },
                    ],
                    showSearch: false,
                    showFilter: false,
                    paginationType: 'pagination',
                    responsive: true,
                    rowLimit: 10,
                    showAction: true,
                    orderBy: 'desc',
                    actionType: "dropdown",
                    actions: [
                        {
                            title: this.$t('edit'),
                            type: 'none',
                        },
                        {
                            title: this.$t('delete'),
                            type: 'none',
                        },
                        {
                            title: this.$t('active'),
                            type: 'none',
                            modifier: (row) => {
                                const {status} = row;
                                return status.name != "status_invited" && status.name != "status_active" ? true : false;
                            }
                        },
                        {
                            title: this.$t('de_activate'),
                            type: 'none',
                            modifier: (row) => {
                                const {status} = row;
                                return status.name != "status_invited" && status.name != "status_inactive" ? true :false;
                            }
                        },
                        {
                            title: this.$t('manage_role'),
                            type: 'none',
                        },
                    ],
                },
                userFilterOptions: [
                    {id: '', name: 'all_users', translated_name: 'All Users'},
                ],
            }
        },
        mounted(){
            this.getStatuses();
        },
        methods: {
            getFilterValue(item) {
                this.value = item;
                this.filteredData['status-id'] = item;
                this.$hub.$emit('reload-' + this.data.tableId);
            },
            getStatuses(){
                let url = actions.GET_STATUSES;

                this.axiosGet(url).then(response => {

                    this.userFilterOptions = [...this.userFilterOptions, ...response.data];

                }).catch(({response}) => {

                }).finally(() => {

                });
            }
        }
    }
</script>

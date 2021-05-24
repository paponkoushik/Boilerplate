<template>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="mb-3">{{ $t('tab_filter') }} </h5>
        <div class="card card-with-shadow border-0 bg-transparent">
            <div class="card-header d-flex align-items-center p-primary primary-card-color">
                <h5 class="card-title d-inline-block mb-0">{{ $t('profile_view')}}</h5>
                <app-search @input="getSearchValue"/>
            </div>
            <div class="p-primary d-flex align-items-center primary-card-color border-bottom">
                <ul class="nav tab-filter-menu justify-content-flex-end">
                    <li class="nav-item" v-for="(item, index) in userFilterOptions" :key="index">
                        <a href="#"
                           class="nav-link font-size-default py-0"
                           :class="[filteredData.status == item.id ? 'active' : index === 0 && filteredData.status === '' ? 'active': '']"
                           @click.prevent="getFilterValue(item.id)">
                            {{ item.value }}
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body p-0">
                <app-table :id="tableId"
                           :options="options"
                           :filtered-data="filteredData"
                           :search="search"/>
            </div>
        </div>
    </div>
</template>

<script>
    import * as actions from "../../../../../Config/ApiUrl";
    import AppFunction from "../../../../../../core/helpers/app/AppFunction";
    export default {
        name: "tab-filter",
        data() {
            return {
                tableId: 'filter-without-wrapper',
                filteredData: {
                    status: '',
                },
                search: '',
                options: {
                    name: this.$t('tab_filter'),
                    url: actions.DATATABLE_DATA,
                    datatableWrapper: false,
                    showHeader: true,
                    tableShadow: false,
                    columns: [
                        {
                            title: this.$t('user'),
                            type: 'media-object',
                            key: 'media-object',
                            mediaTitleKey: 'name',
                            mediaSubtitleKey: 'email',
                            default: AppFunction.getAppUrl('images/avatar-demo.jpg'),
                            modifier: (value, row) => {
                                return value; // imag url
                            },
                            isVisible: true
                        },
                        {
                            title: this.$t('status'),
                            type: 'custom-html',
                            key: 'status',
                            isVisible: true,
                            modifier: (value) => {
                                let ClassName = 'danger';

                                if (value === 'active') ClassName = `success`;
                                else if (value === 'invited') ClassName = `warning`;

                                return `<span class="badge badge-sm badge-pill badge-${ClassName}">${this.$t(value)}</span>`;
                            }
                        },
                        {
                            title: this.$t('gender'),
                            type: 'custom-html',
                            key: 'gender',
                            modifier: (value) => {
                                return `<span>${this.$t(value)}</span>`
                            }
                        },
                    ],
                    showFilter: false,
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 10,
                    orderBy: 'desc',
                    showAction: false,
                    actions: [],
                },
                userFilterOptions: [
                    {id: '', value: 'All Users'},
                    {id: 'active', value: 'Active'},
                    {id: 'inactive', value: 'Inactive'},
                    {id: 'invited', value: 'Invited'}
                ],
            }
        },
        methods: {
            getSearchValue(value) {
                let instance = this;
                this.search = value;
                setTimeout(function () {
                    instance.$hub.$emit('reload-' + instance.tableId);
                });
            },
            getFilterValue(item) {
                this.filteredData.status = item;
                this.$hub.$emit('reload-'+this.tableId);
            }
        }
    }
</script>

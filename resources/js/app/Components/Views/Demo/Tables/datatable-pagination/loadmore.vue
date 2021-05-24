<template>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="mb-3">{{ $t('load_more') }}</h5>
        <app-table id="load-more-table" :options="options"/>
    </div>
</template>

<script>

    import CoreLibrary from "../../../../../../core/helpers/CoreLibrary";
    import * as actions from "../../../../../Config/ApiUrl";
    import {TableHelpers} from "../mixins/TableHelpers";

    export default {
        name: "loadMore",
        mixins: [TableHelpers],
        extends: CoreLibrary,
        data() {
            return {
                options: {
                    url: actions.DATATABLE_DATA,
                    name: this.$t('load_more'),
                    showHeader: true,
                    columns: [],
                    filters: [
                        {
                            "title": this.$t('date'),
                            "type": "range-picker",
                            "key": "date",
                            "option": ["today", "thisMonth", "last7Days", "nextYear"]
                        },
                        {
                            "title": this.$t('age'),
                            "type": "range-filter",
                            "key": "age-range",
                            "maxTitle": this.$t('max_age'),
                            "minTitle": this.$t('min_age'),
                            "sign": ""
                        },
                        {
                            "title": this.$t('status'),
                            "type": "checkbox",
                            "key": "status",
                            "option": [
                                {id: 'active', value: 'Active'},
                                {id: 'inactive', value: 'Inactive'},
                                {id: 'invited', value: 'Invited'},
                            ],
                        },
                        {
                            "title": this.$t('gender'),
                            "type": "radio",
                            "key": "filter-with-gender",
                            "option": [
                                {id: 'male', value: 'Male'},
                                {id: 'female', value: 'Female'},
                                {id: 'other', value: 'Other'},
                            ],

                            "header": {
                                "title": this.$t('want_to_filter_your_list'),
                                "description": this.$t('you_can_filter_your_data_table_which_are_created_based_on_gender'),
                            },
                        }
                    ],
                    paginationType: "loadMore",
                    responsive: true,
                    rowLimit: 10,
                    showAction: false,
                    actions: [],
                    orderBy: 'desc',
                }
            }
        },
        created() {
            this.options.columns = [...this.tableColumns];
            this.searchAndSelectFilterOptions();
        },
        methods: {
            searchAndSelectFilterOptions() {
                this.axiosGet(actions.DATATABLE_SEARCH_SELECT).then(response => {
                    this.options.filters.push({
                        "title": this.$t('search_and_select'),
                        "type": "drop-down-filter",
                        "key": "search select",
                        "option": [] = response.data.map(name => {
                            return {
                                id: name.name,
                                value: name.name
                            }
                        })
                    })
                });
            }
        }
    }

</script>

<template>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="mb-3">{{ $t('list_view') }}</h5>
        <app-table id="basic-list-view-table" :options="options"/>
    </div>
</template>

<script>
    import * as actions from "../../../../../Config/ApiUrl";
    import {TableHelpers} from '../mixins/TableHelpers';

    export default {
        name: "BasicDatatable",
        mixins : [TableHelpers],
        data() {
            return {
                options: {
                    url: actions.DATATABLE_DATA,
                    name: this.$t('basic_list_view_table'),
                    showHeader: true,
                    columns: [
                    ],
                    showFilter: false,
                    showSearch: false,
                    datatableWrapper: false,
                    actions:[],
                    paginationType: "pagination",
                    responsive: false,
                    rowLimit: 10,
                    showAction: false,
                    orderBy: 'desc',
                },
            }
        },
        created(){
            this.options.columns = [...this.tableColumns];
        }
    }
</script>

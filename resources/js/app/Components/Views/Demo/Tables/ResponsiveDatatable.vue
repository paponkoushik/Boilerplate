<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('responsive')" :directory="$t('datatables')" :icon="'grid'"/>
        <app-note class="mb-primary" :title="$t('note')" content-type="html" :notes="responsiveDatatableInstruction"/>
        <app-table :id="'responsive-table'" :options="options"/>
    </div>
</template>

<script>
    import * as actions from "../../../../Config/ApiUrl";
    import {TableHelpers} from "./mixins/TableHelpers";
    export default {
        name: "ResponsiveDatatable",
        mixins:[TableHelpers],
        data() {
            return {
                responsiveDatatableInstruction: [this.$t('datatable_responsive_note')],
                options: {
                    name: 'Responsive Table',
                    url: actions.DATATABLE_DATA,
                    showHeader: true,
                    columns: [],
                    datatableWrapper: false,
                    showFilter: false,
                    showSearch: false,
                    showAction: false,
                    actions:[],
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 10,
                    orderBy: 'desc',
                }
            }
        },
        created(){
            this.options.columns = [...this.tableColumns];
        },
    }
</script>

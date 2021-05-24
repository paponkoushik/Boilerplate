<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('filter_type')" :directory="$t('datatables')" :icon="'grid'"/>
        <app-note class="mb-primary" :title="$t('note')" content-type="html" :notes="responsiveDatatableInstruction"/>
        <div class="row">
            <!--  default filter  -->
            <default-filter></default-filter>
            <!--  tab filter  -->
            <tab-filter></tab-filter>
        </div>
    </div>
</template>

<script>
    import defaultFilter from "./default-filter";
    import tabFilter from "./tab-filter";
    export default {
        name: "index",
        components: {
            defaultFilter,
            tabFilter
        },
        data() {
            return {
                responsiveDatatableInstruction: [this.$t('datatable_filter_note')],
            }
        }
    }
</script>

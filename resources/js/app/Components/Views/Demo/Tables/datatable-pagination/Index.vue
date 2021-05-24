<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('paginated')" :directory="$t('datatables')" :icon="'grid'"/>
        <app-note class="mb-primary" :title="$t('note')" content-type="html" :notes="paginationInstruction"/>
        <div class="row">
            <!--  Pagination section   -->
            <pagination></pagination>
            <!--  load more section   -->
            <load-more></load-more>
        </div>
    </div>
</template>

<script>
    import Pagination from "./pagination";
    import LoadMore from "./loadmore";
    export default {
        name: "index",
        components: {LoadMore, Pagination},
        comments: {
            Pagination,
            LoadMore
        },
        data() {
            return {
                paginationInstruction: [this.$t('datatable_paginate_note')],
            }
        }

    }
</script>

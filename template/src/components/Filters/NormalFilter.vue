<template>
    <div class="row">
        <div class="col-6 col-sm-8 col-md-9 col-lg-10 col-xl-10">
            <div class="filters-wrapper d-flex justify-content-start flex-wrap">
                <!--Datatable Column Filter-->
                <ColumnFilter/>

                <!--Dropdown menu filter-->
                <DropdownMenuFilter class="mr-2"/>

                <!--Open Filters Button For Mobile-->
                <button class="btn d-block d-sm-none btn-toggle-filters"
                        type="button"
                        @click.prevent="toggleFilters">
                    <Icon :name="'filter'"/>
                    Filters
                </button>

                <span v-if="isFiltersOpen" class="mobile-filters-wrapper">
                    <div class="filters-loop-wrapper">
                        <!--Date Range Filter-->
                        <DateRangePicker/>

                        <!--Checkbox Filter-->
                        <CheckboxFilter/>

                        <!--Radio Filter-->
                        <RadioFilter/>

                        <!--Range Filter-->
                        <RangeFilter/>

                        <!--Dropdown Search Select Filter-->
                        <DropdownSearchSelect/>
                    </div>

                    <button type="button"
                            class="btn btn-primary btn-with-shadow d-sm-none btn-close-filter-wrapper d-flex justify-content-center align-items-center"
                            @click="toggleFilters">
                        Close
                    </button>
                </span>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
            <!--Search Box-->
            <SearchFilter/>
        </div>
    </div>
</template>

<script>
    import CoreJS from "../../assets/js/core";

    export default {
        name: "NormalFilter",
        extends: CoreJS,
        mounted() {
            this.checkScreenWidth();
            window.onresize = () => {
                this.checkScreenWidth();
            }
        },
        data() {
            return {
                isFiltersOpen: true,
            }
        },
        methods: {
            checkScreenWidth() {
                this.isFiltersOpen = window.innerWidth > 575 ? true : false;
            },
        }
    }
</script>
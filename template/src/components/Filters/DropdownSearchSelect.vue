<template>
    <div class="search-filter-dropdown single-filter">
        <div class="dropdown">
            <a class="btn btn-filter px-3" href="#" role="button" id="dropdownMenuLink"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search and select
            </a>
            <div class="dropdown-menu py-0" aria-labelledby="dropdownMenuLink">
                <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Search and select
                    </span>
                    <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                </div>
                <div class="form-group form-group-with-search">
                    <span class="form-control-feedback">
                        <Icon :name="'search'"/>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="dropdown-divider my-0"/>
                <div class="dropdown-search-result-wrapper">
                    <a class="dropdown-item" href="#">Option one
                        <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                    </a>
                    <a class="dropdown-item" href="#">Option two
                        <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                    </a>
                    <a class="dropdown-item" href="#">Option three
                        <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                    </a>
                    <a class="dropdown-item" href="#">Option four
                        <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                    </a>
                    <a class="dropdown-item" href="#">Option five
                        <span class="check-sign float-right">
                        <i data-feather="check" class="menu-icon"/>
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from "../../assets/js/core";

    export default {
        name: "DropdownSearchSelect",
        extends: CoreJS,
    }
</script>


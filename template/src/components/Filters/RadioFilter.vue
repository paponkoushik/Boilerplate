<template>
    <div class="radio-filter single-filter">
        <div class="dropdown keep-inside-clicks-open">
            <button class="btn btn-filter" type="button" id="dropdownMenuButton-segments"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                List with segment
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-segments">
                <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        List with segment
                    </span>
                    <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                </div>
                <div class="dropdown-item">
                    <h6>Want to filter your list?</h6>
                    <p class="text-justify mb-0 filter-subtitle-text">
                        You can filter your data table which are created based on segment
                    </p>
                </div>
                <div class="dropdown-item py-2">
                    <label class="customized-radio radio-default">
                        <input type="radio" class="radio-inline" name="radios" checked>
                        <span class="outside">
                            <span class="inside"/>
                        </span>
                        Male
                    </label>
                </div>
                <div class="dropdown-item py-2">
                    <label class="customized-radio radio-default">
                        <input type="radio" class="radio-inline" name="radios">
                        <span class="outside">
                            <span class="inside"/>
                        </span>
                        Female
                    </label>
                </div>
                <div class="dropdown-divider d-none d-sm-block mt-primary"/>
                <div class="dropdown-item">
                    <div class="row filter-action-button-wrapper">
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-clear pl-sm-0" @click.prevent="hideDropDownMenu">
                                Clear
                            </button>
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CoreJS from "../../assets/js/core";

    export default {
        name: "RadioFilter",
        extends: CoreJS,
    }
</script>
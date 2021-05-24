<template>
    <div class="column-filter single-filter">
        <div class="dropdown keep-inside-clicks-open">
            <button class="btn btn-filter" type="button" id="dropdownMenuButton-manage"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <Icon :name="'layout'"/>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-manage">
                <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Manage Columns
                    </span>
                    <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                </div>
                <div class="dropdown-item pb-0">
                    <h6>Want to manage datatable?</h6>
                    <p class="text-justify mb-0 filter-subtitle-text">
                        Please drag and drop your column to reorder your table and enable see option as you want.
                    </p>
                </div>
                <div class="dropdown-item manage-column-options custom-scrollbar">
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> Name
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-name">
                                <label class="custom-control-label" for="switch-name"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> Status
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-status">
                                <label class="custom-control-label" for="switch-status"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> Subscriber
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-subs">
                                <label class="custom-control-label" for="switch-subs"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> Send rate
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-rate">
                                <label class="custom-control-label" for="switch-rate"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> No of segments
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-seg">
                                <label class="custom-control-label" for="switch-seg"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="content-type">
                                <Icon :name="'menu'"/> Type
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switch-type">
                                <label class="custom-control-label" for="switch-type"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider d-none d-sm-block"/>
                <div class="dropdown-item">
                    <div class="row filter-action-button-wrapper">
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-clear pl-sm-0" @click.prevent="hideDropDownMenu">Clear</button>
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
        name: "TableColumnFilter",
        extends: CoreJS,
    }
</script>
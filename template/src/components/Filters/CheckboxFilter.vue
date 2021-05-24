<template>
    <div class="checkbox-filter single-filter">
        <div class="dropdown keep-inside-clicks-open">
            <button class="btn btn-filter" type="button" id="dropdownMenuButton-status"
                    data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                Status
                <span class="clear-icon" @click.prevent="clear">
                    <Icon :name="'x'"/>
                </span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-status">
                <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Select Status
                    </span>
                    <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                </div>
                <div class="dropdown-item">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox-active">
                                        <label class="custom-control-label pl-2" for="input-checkbox-active">Active</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox">
                                        <label class="custom-control-label pl-2" for="input-checkbox">Subscribed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox-inactive">
                                        <label class="custom-control-label pl-2"
                                               for="input-checkbox-inactive">Inactive</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox-unsubs">
                                        <label class="custom-control-label pl-2" for="input-checkbox-unsubs">Unsubscribed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox-invited">
                                        <label class="custom-control-label pl-2"
                                               for="input-checkbox-invited">Invited</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-checkbox-default">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="input-checkbox-bounced">
                                        <label class="custom-control-label pl-2"
                                               for="input-checkbox-bounced">Bounced</label>
                                    </div>
                                </div>
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
        name: "CheckboxFilter",
        extends: CoreJS,
        methods: {

        }
    }
</script>
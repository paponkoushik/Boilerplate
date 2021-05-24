<template>
    <div class="range-filter-dropdown single-filter">
        <div class="dropdown keep-inside-clicks-open">
            <button class="btn btn-filter"
                    type="button"
                    id="dropdownMenuButton-rate"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                Sending rate
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-rate">
                <div class="btn-dropdown-close d-sm-none">
                    <span class="title">
                        Select Range
                    </span>
                    <span class="back float-right" @click.prevent="hideDropDownMenu">
                        <Icon :name="'x'"/>
                    </span>
                </div>
                <div class="dropdown-item pt-5">
                    <div id="slider"/>
                    <div class="rate-status mt-primary d-flex justify-content-center">
                        <div class="min-rate">
                            <p class="text-center">Minimum rate</p>
                            <h5 class="text-center">25%</h5>
                        </div>
                        <hr>
                        <div class="max-rate">
                            <p class="text-center">Maximum rate</p>
                            <h5 class="text-center">75%</h5>
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
        name: "RangeFilter",
        extends: CoreJS,
        mounted() {
            this.$nextTick(function () {
                const slider = document.getElementById('slider');
                noUiSlider.create(slider, {
                    start: [25, 75],
                    step: 1,
                    range: {
                        min: [0],
                        max: [100]
                    }
                });
                slider.noUiSlider.on('hover', function (value) {
                    console.log(value);
                });
            });
        }
    }
</script>

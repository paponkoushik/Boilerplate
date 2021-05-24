<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('buttons')" :directory="$t('ui_elements')" :icon="'trello'"/>
        <div class="card card-with-shadow border-0">
            <div class="card-header d-flex justify-content-between bg-transparent p-primary align-items-center">
                <h5 class="card-title mb-0">{{ $t('solid_buttons_default') }}</h5>
                <!--copy button-->
                <copy-button id="solid-button-default" :value="solidDefaultValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <div class="ui-elements-container">
                        <app-button :label="$t('primary')"
                                    class-name="btn-primary mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('secondary')"
                                    class-name="btn-secondary mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('success')"
                                    class-name="btn-success mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('danger')"
                                    class-name="btn-danger mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('warning')"
                                    class-name="btn-warning mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('info')"
                                    class-name="btn-info mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('dark')"
                                    class-name="btn-dark mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('light')"
                                    class-name="btn-light mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('link')"
                                    class-name="btn-link mr-2 mb-2 mb-sm-0"
                                    :is-disabled="false"
                                    @submit="btnSubmit"/>
                    </div>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-primary mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-secondary mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-success mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-danger mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-warning mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-info mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-dark mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-light mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('link')"
                                class-name="btn-link mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 card card-with-shadow border-0">
            <div class="card-header d-flex justify-content-between bg-transparent p-primary align-items-center">
                <h5 class="card-title mb-0">{{ $t('solid_buttons_rounded') }}</h5>
                <!--copy button-->
                <copy-button id="solid-button-rounded" :value="solidRoundedValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-primary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit(this)"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-secondary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-success rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-danger rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-warning rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-info rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-dark rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-light rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('link')"
                                class-name="btn-link rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    </div>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-primary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-secondary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-success rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-danger rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-warning rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-info rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-dark rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-light rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('link')"
                                class-name="btn-link rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 card card-with-shadow border-0">
            <div class="card-header d-flex justify-content-between bg-transparent p-primary align-items-center">
                <h5 class="card-title mb-0">{{ $t('outline_buttons_rectangular') }}</h5>
                <!--copy button-->
                <copy-button id="outline-rectangular" :value="outlineRectangularValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-outline-primary mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-outline-secondary mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-outline-success mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-outline-danger mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-outline-warning mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-outline-info mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-outline-dark mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-outline-light mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    </div>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-outline-primary mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-outline-secondary mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-outline-success mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-outline-danger mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-outline-warning mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-outline-info mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-outline-dark mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-outline-light mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 card card-with-shadow border-0">
            <div class="card-header d-flex justify-content-between bg-transparent p-primary align-items-center">
                <h5 class="card-title mb-0">{{ $t('outline_buttons_rounded') }}</h5>
                <!--copy button-->
                <copy-button id="outline-rounded" :value="outlineRoundedValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-outline-primary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-outline-secondary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-outline-success rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-outline-danger rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-outline-warning rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-outline-info rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-outline-dark rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-outline-light rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="false"
                                @submit="btnSubmit"/>
                    </div>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <div class="ui-elements-container">
                    <app-button :label="$t('primary')"
                                class-name="btn-outline-primary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')"
                                class-name="btn-outline-secondary rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')"
                                class-name="btn-outline-success rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')"
                                class-name="btn-outline-danger rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')"
                                class-name="btn-outline-warning rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')"
                                class-name="btn-outline-info rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')"
                                class-name="btn-outline-dark rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')"
                                class-name="btn-outline-light rounded-pill mr-2 mb-2 mb-sm-0"
                                :is-disabled="true"
                                @submit="btnSubmit"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 card card-with-shadow border-0">
            <div class="card-header d-flex justify-content-between bg-transparent p-primary align-items-center">
                <h5 class="card-title mb-0">{{ $t('block_buttons') }}</h5>
                <!--copy button-->
                <copy-button id="block-button" :value="blockButtonValue"/>
            </div>
            <div class="card-body">
                <app-button :label="$t('block_button')"
                            class-name="btn-block btn-primary"
                            :is-disabled="false"
                            @submit="btnSubmit"/>
                <app-button :label="$t('block_button_rounded')"
                            class-name="btn-block btn-primary rounded-pill"
                            :is-disabled="false"
                            @submit="btnSubmit"/>
                <app-button :label="$t('block_button_outline_rectangular')"
                            class-name="btn-block btn-outline-primary"
                            :is-disabled="false"
                            @submit="btnSubmit"/>
                <app-button :label="$t('block_button_outline_rounded')"
                            class-name="btn-block btn-outline-primary rounded-pill"
                            :is-disabled="false"
                            @submit="btnSubmit"/>
            </div>
        </div>
    </div>
</template>
<script>
import CopyButton from "../CopyButton";
import {ButtonMixins} from "./ButtonMixins";

export default {
    name: "Buttons",
    mixins: [ButtonMixins],
    components: {CopyButton},
    data() {
        return {}
    },
    methods: {
        btnSubmit() {
            console.log('Submit');
        }
    }
}
</script>


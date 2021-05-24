export const ButtonMixins = {
    data(){
        return{
            solidDefaultValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <div id="enable-solid-button">
                        <app-button :label="$t('primary')" class-name="btn-primary mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('secondary')" class-name="btn-secondary mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('success')" class-name="btn-success mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('danger')" class-name="btn-danger mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('warning')" class-name="btn-warning mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('info')" class-name="btn-info mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('dark')" class-name="btn-dark mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('link')" class-name="btn-link mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                        <app-button :label="$t('light')" class-name="btn-light mr-2" :is-disabled="false"
                                    @submit="btnSubmit"/>
                    </div>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-primary mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-secondary mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-success mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-danger mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-warning mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-info mr-2" :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-dark mr-2" :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('link')" class-name="btn-link mr-2" :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-light mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                </div>
            </div>`,
            solidRoundedValue:`<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-primary rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit(this)"/>
                    <app-button :label="$t('secondary')" class-name="btn-secondary rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-success rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-danger rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-warning rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-info rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-dark rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('link')" class-name="btn-link rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-light rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-primary rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-secondary rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-success rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-danger rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-warning rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-info rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-dark rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('link')" class-name="btn-link rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-light rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                </div>
            </div>`,
            outlineRectangularValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-outline-primary mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-outline-secondary mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-outline-success mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-outline-danger mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-outline-warning mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-outline-info mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-outline-dark mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-outline-light mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-outline-primary mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-outline-secondary mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-outline-success mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-outline-danger mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-outline-warning mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-outline-info mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-outline-dark mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-outline-light mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                </div>
            </div>`,
            outlineRoundedValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6>{{ $t('enabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-outline-primary rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-outline-secondary rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-outline-success rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-outline-danger rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-outline-warning rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-outline-info rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-outline-dark rounded-pill mr-2" :is-disabled="false"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-outline-light rounded-pill mr-2"
                                :is-disabled="false" @submit="btnSubmit"/>
                </div>
                <div class="">
                    <h6>{{ $t('disabled') }}</h6>
                    <app-button :label="$t('primary')" class-name="btn-outline-primary rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('secondary')" class-name="btn-outline-secondary rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('success')" class-name="btn-outline-success rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('danger')" class-name="btn-outline-danger rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('warning')" class-name="btn-outline-warning rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                    <app-button :label="$t('info')" class-name="btn-outline-info rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('dark')" class-name="btn-outline-dark rounded-pill mr-2" :is-disabled="true"
                                @submit="btnSubmit"/>
                    <app-button :label="$t('light')" class-name="btn-outline-light rounded-pill mr-2"
                                :is-disabled="true" @submit="btnSubmit"/>
                </div>
            </div>`,
            blockButtonValue:`<div class="card-body">
                <app-button :label="$t('block_button')" class-name="btn-block btn-primary" :is-disabled="false"
                            @submit="btnSubmit"/>
                <app-button :label="$t('block_button_rounded')" class-name="btn-block btn-primary rounded-pill"
                            :is-disabled="false" @submit="btnSubmit"/>
                <app-button :label="$t('block_button_outline_rectangular')" class-name="btn-block btn-outline-primary"
                            :is-disabled="false" @submit="btnSubmit"/>
                <app-button :label="$t('block_button_outline_rounded')"
                            class-name="btn-block btn-outline-primary rounded-pill" :is-disabled="false"
                            @submit="btnSubmit"/>
            </div>`

        }
    }
};

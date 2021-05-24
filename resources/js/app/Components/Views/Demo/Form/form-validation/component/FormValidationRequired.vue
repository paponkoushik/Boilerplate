<template>
    <div class="card card-with-shadow border-0">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('validation_type') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/validate-fields" class="mb-sm-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('required') }}</label>
                    <div class="col-md-8">
                        <app-input type="text"
                                   v-model="inputs.text"
                                   :required="true"
                                   :placeholder="$t('type_something')"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('email') }}</label>
                    <div class="col-md-8">
                        <app-input type="email"
                                   v-model="inputs.email"
                                   :required="true"
                                   :placeholder="$t('type_valid_email')"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('number_input') }}</label>
                    <div class="col-md-8">
                        <app-input type="number"
                                   v-model="inputs.number"
                                   :placeholder="$t('number_type_input')"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 mb-md-0">{{ $t('input_matching') }}</label>
                    <div class="col-md-8">
                        <app-input class="mb-2"
                                   type="password"
                                   :required="true"
                                   :specialValidation="true"
                                   v-model="inputs.password_input"
                                   :placeholder="$t('type_password')"/>
                        <app-note class="mb-2"
                                  note-type="note-warning"
                                  :show-title="false"
                                  :notes="[$t('password_hint_note')]"/>
                        <app-input type="password"
                                   v-model="inputs.confirm_password"
                                   same-as="inputs_password_input"
                                   :placeholder="$t('confirm_password')"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('datepicker') }}</label>
                    <div class="col-md-8">
                        <app-input type="date"
                                   v-model="inputs.date"
                                   :placeholder="$t('select_valid_date')"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('timepicker') }}</label>
                    <div class="col-md-8">
                        <app-input type="time"
                                   v-model="inputs.time"
                                   :placeholder="$t('select_valid_time')"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('textarea') }}</label>
                    <div class="col-md-8">
                        <app-input type="textarea"
                                   v-model="inputs.text_area"/>
                    </div>
                </div>
                <div class="mt-5 action-buttons">
                    <button type="submit" class="btn btn-primary mr-2" @click.prevent="submitData">
                        {{ $t('submit') }}
                    </button>
                    <button type="submit" class="btn btn-secondary" @click.prevent="clear">
                        {{ $t('clear') }}
                    </button>
                </div>
            </form>
        </div>

    </div>
</template>

<script>
    import {FormMixin} from '../../../../../../../core/mixins/form/FormMixin.js';
    import AppLibrary from "../../../../../../Helpers/AppLibrary";

    export default {
        name: "FormValidationRequired",
        extends: AppLibrary,
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                inputs: {},
            }
        },
        methods: {
            beforeSubmit(){
                this.preloader = true;
            },
            submitData() {
                if (this.inputs.date) this.inputs.date = this.getDateFormatForBackend(this.inputs.date);

                this.save(this.inputs);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.inputs = {};
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {};
                this.fieldStatus = {
                    isSubmit: false
                }
            }
        }

    }
</script>

<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('basic_elements') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/input" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label for="text_input" class="col-sm-2 mb-sm-0">
                        {{ $t('text') }}
                    </label>
                    <app-input id="text_input"
                               class="col-sm-8"
                               type="text"
                               v-model="inputs.text_input"
                               :placeholder="$t('text_type_input')"/>

                </div>
                <div class="form-group row align-items-center">
                    <label for="email_input" class="col-sm-2 mb-sm-0">
                        {{ $t('email') }}
                    </label>
                    <app-input id="email_input"
                               class="col-sm-8"
                               v-model="inputs.email_input"
                               type="email"
                               :placeholder="$t('email_type_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="password_input" class="col-sm-2 mb-sm-0">
                        {{ $t('password') }}
                    </label>
                    <app-input id="password_input" class="col-sm-8"
                               type="password"
                               :specialValidation="true"
                               v-model="inputs.password_input"
                               :placeholder="$t('password_type_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="confirm_password" class="col-sm-2 mb-sm-0">
                        {{ $t('confirm_password') }}
                    </label>
                    <app-input id="confirm_password" class="col-sm-8"
                               type="password"
                               same-as="inputs_password_input"
                               v-model="inputs.confirm_password"
                               :placeholder="$t('confirm_password')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="decimal_input" class="col-sm-2 mb-sm-0">
                        {{ $t('decimal_input') }}
                    </label>
                    <app-input id="decimal_input"
                               class="col-sm-8"
                               type="decimal"
                               v-model="inputs.decimal_input"
                               :placeholder="$t('decimal_type_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="number_input" class="col-sm-2 mb-sm-0">
                        {{ $t('number_input') }}
                    </label>
                    <app-input id="number_input"
                               class="col-sm-8"
                               type="number"
                               v-model="inputs.number_input"
                               :placeholder="$t('number_type_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="readonly_input" class="col-sm-2 mb-sm-0">
                        {{ $t('readonly') }}
                    </label>
                    <app-input id="readonly_input"
                               class="col-sm-8"
                               type="text"
                               v-model="inputs.readonly_input"
                               :read-only="true"
                               :placeholder="$t('readonly_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="disabled_input" class="col-sm-2 mb-sm-0">
                        {{ $t('disabled') }}
                    </label>
                    <app-input id="disabled_input"
                               class="col-sm-8"
                               type="text"
                               :disabled="true"
                               v-model="inputs.disabled_input"
                               :placeholder="$t('disabled_input')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="textarea_field" class="col-sm-2 mb-sm-0">
                        {{ $t('textarea') }}
                    </label>
                    <app-input id="textarea_field"
                               class="col-sm-8"
                               type="textarea"
                               :placeholder="$t('textarea_field')"
                               v-model="inputs.textarea"/>
                </div>
                <div class="mt-5 action-buttons">
                    <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
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
    import GlobalHelperMixin from '../../../../../../Mixins/global/GlobalHelperMixin';
    export default {
        name: "InputFields",
        mixins: [FormMixin, GlobalHelperMixin],
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
            submit() {
                this.scrollToTop(true);
                this.save(this.inputs);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.scrollToTop(false);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
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
            },
        }
    }
</script>

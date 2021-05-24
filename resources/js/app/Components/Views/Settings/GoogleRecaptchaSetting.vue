<template>
    <app-overlay-loader v-if="preloader"/>
    <form v-else ref="form" data-url="/re-captcha-setting"
          class="mb-0"
          :class="{'loading-opacity': preloader}">
        <div class="form-group row align-items-center">
            <label class="col-lg-3 col-xl-3 mb-lg-0">
                {{ $t('enable_recaptcha') }}
            </label>
            <div class="col-lg-8 col-xl-8">
                <app-input type="radio"
                           :list="list"
                           v-model="formData.recaptcha_enable"
                           :placeholder="$t('type_secret_key')"
                           :required="true"/>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="recaptcha_site_key" class="col-lg-3 col-xl-3 mb-lg-0">
                {{ $t('site_key') }}
            </label>
            <div class="col-lg-8 col-xl-8">
                <app-input id="recaptcha_site_key"
                           type="text"
                           v-model="formData.site_key"
                           :placeholder="$t('type_site_key')"
                           :required="true"/>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="recaptcha_secret_key" class="col-lg-3 col-xl-3 mb-lg-0">
                {{ $t('secret_key') }}
            </label>
            <div class="col-lg-8 col-xl-8">
                <app-input id="recaptcha_secret_key"
                           type="text"
                           v-model="formData.secret_key"
                           :placeholder="$t('type_secret_key')"
                           :required="true"/>
            </div>
        </div>
        <div class="mt-5 action-buttons">
            <button class="btn btn-primary mr-2"  @click.prevent="submit">{{ $t('save') }}</button>
        </div>
    </form>
</template>

<script>
    import {FormMixin} from "../../../../core/mixins/form/FormMixin";
    import * as actions from "../../../Config/ApiUrl";

    export default {

        name: "GoogleRecaptchaSetting",
        mixins: [FormMixin],
        data() {
            return {
                formData:{
                    recaptcha_enable : '0',
                },
                preloader: false,
                showError: false,
                list: [
                    {
                        id: '1',
                        value: 'Yes'
                    },
                    {
                        id: '0',
                        value: 'No'
                    },
                ],
            }
        },
        created() {
            this.getReCaptchaData();
        },
        methods: {
            getReCaptchaData(){
                this.preloader = true;
                let url = actions.GET_RECAPTCHA_SETTINGS;

                this.axiosGet(
                    url
                ).then(response => {
                    if(!_.isEmpty(response.data)) {
                        this.formData = response.data;
                    }
                }).catch(({response}) => {

                }).finally(() => {
                    this.preloader = false;
                });
            },
            beforeSubmit() {
                this.preloader = true;
            },
            submit() {
                this.save(this.formData);
            },
            afterFinalResponse() {
                this.preloader = false;
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterError(res) {
                this.showError = true;
                this.$toastr.e(res.data.message);
            },
        }
    }
</script>

<template>
    <app-overlay-loader v-if="preloader"/>
    <form v-else ref="form" data-url="/sms-settings"
          class="mb-0"
          :class="{'loading-opacity': preloader}">
        <div class="form-group row align-items-center">
            <label for="smsSettingsSmsSentFrom" class="col-lg-3 col-xl-3 mb-lg-0">
                {{ $t('sms_send_from_name_or_phone_number') }}
            </label>
            <div class="col-lg-8 col-xl-8">
                <app-input
                           type="text"
                           v-model="smsSettings.sms_sent_from"
                           :placeholder="$t('type_a_name_or_number_you_want_to_sent_sms_from')"
                           :required="true"/>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="smsSettingsSmsDriver" class="col-lg-3 col-xl-3 mb-lg-0">
                {{ $t('sms_driver') }}
            </label>
            <div class="col-lg-8 col-xl-8">
                <app-input id="smsSettingsSmsDriver"
                           type="select"
                           v-model="smsSettings.sms_driver"
                           :required="true"
                           :list="driverList"/>
            </div>
        </div>

        <!--For Nexmo driver-->
        <fieldset v-if="smsSettings.sms_driver === 'nexmo'">
            <div class="form-group row align-items-center">
                <label for="smsSettingsKey" class="col-lg-3 col-xl-3 mb-lg-0">
                    {{ $t('key') }}
                </label>
                <div class="col-lg-8 col-xl-8">
                    <app-input id="smsSettingsKey"
                               type="text"
                               v-model="smsSettings.key"
                               :placeholder="$t('type_nexmo_key')"
                               :required="true"/>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label for="smsSettingsSecretKey" class="col-lg-3 col-xl-3 mb-lg-0">
                    {{ $t('secret_key') }}
                </label>
                <div class="col-lg-8 col-xl-8">
                    <app-input id="smsSettingsSecretKey"
                               type="text"
                               v-model="smsSettings.secret_key"
                               :placeholder="$t('type_nexmo_secret_key')"
                               :required="true"/>
                </div>
            </div>
            <div class="form-group row align-items-center">
                <label class="col-lg-3 col-xl-3 mb-lg-0">
                    {{ $t('test_number') }}
                </label>
                <div class="col-lg-8 col-xl-8">
                    <app-input type="tel-input"
                               v-model="smsSettings.test_number"
                               :placeholder="$t('type_test_number')"/>
                </div>
            </div>
        </fieldset>

        <div class="mt-5 action-buttons">
            <button class="btn btn-primary mr-2" @click.prevent="submit">
                {{ $t('save') }}
            </button>
        </div>
    </form>
</template>

<script>
    import {FormMixin} from "../../../../core/mixins/form/FormMixin";
    import * as actions from "../../../Config/ApiUrl";

    export default {

        name: "index.vue",
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                smsSettings: {},
                driverList: [
                    {id: 'nexmo', value: "Nexmo"},
                ],
                showError: false,
            }
        },
        created() {
            this.getData();
        },
        methods: {

            beforeSubmit() {
                this.preloader = true;
            },
            submit() {
                this.save(this.smsSettings);
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
            getData() {
                this.preloader = true;
                let url = actions.GET_SMS_SETTINGS_INFO;
                this.axiosGet(url).then(response => {
                    if (response.data) this.smsSettings = response.data;
                }).catch(({response}) => {

                }).finally(() => {
                    this.preloader = false;
                });
            }
        }
    }
</script>

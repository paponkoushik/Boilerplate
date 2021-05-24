<template>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-8">
                <div class="back-image"
                     :style="`background-image: url(${configData.company_banner})`">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 pl-md-0">
                <div class="login-form d-flex align-items-center">
                    <form class="sign-in-sign-up-form w-100" ref="form" data-url="/user/reset-password" action="store">
                        <div class="text-center mb-4">
                            <img :src="configData.company_logo?configData.company_logo:'/images/core.png'" alt="" class="img-fluid logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <h6 class="text-center mb-0">{{ $t('reset_password') }}</h6>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="formData_password">{{ $t('new_password') }}</label>
                                <app-input type="password"
                                           v-model="formData.password"
                                           :specialValidation="true"
                                           :placeholder="$t('enter_your_password')"
                                           :required="true"
                                />
                                <PasswordWarning/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="formData_password_confirmation">{{ $t('confirm_password') }}</label>
                                <app-input type="password"
                                           same-as="formData_password"
                                           v-model="formData.password_confirmation"
                                           :placeholder="$t('confirm_password')"
                                           :required="true"
                                />
                            </div>
                        </div>
                        <div class="form-row" v-if="recaptchaEnable == 1">
                            <div class="form-group col-12 px-0">
                                <re-captcha :site-key="siteKey"></re-captcha>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <app-load-more :preloader="preloader"
                                               :label="$t('submit')"
                                               :class="{'disabled': !user}"
                                               type="submit"
                                               class-name="btn btn-primary btn-block text-center"
                                               @submit="submit"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <p class="text-center mt-5">
                                    {{ $t('copyright_text') + configData.company_name }}
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ThemeMixin from "../../../../core/mixins/global/ThemeMixin";
    import PasswordWarning from './PasswordWarning';
    import {AuthMixin} from "./Mixins/AuthMixin";

    export default {
        name: "ResetPassword",
        mixins: [AuthMixin, ThemeMixin],
        components:{
            PasswordWarning
        },
        props: {
            user: {},
            token : String,
            siteKey: String,
            recaptchaEnable : {},
        },
        data() {
            return {
                formData: {
                    'email' : this.user.email,
                    'token' : this.token
                },
                userInfo: {}
            }
        },
        created() {
            if (this.user) {
                this.userInfo = JSON.parse(this.user);
            }
        },
        methods: {
            submit() {
                this.formData.email = this.userInfo.email;
                this.save(this.formData);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                location.replace('/admin/users/login');
            },
        }

    }
</script>

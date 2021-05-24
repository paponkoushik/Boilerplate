<template>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-8">
                <div class="back-image"
                     :style="'background-image: url('+configData.company_banner+')'">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 pl-md-0">
                <div class="login-form d-flex align-items-center">
                    <form class="sign-in-sign-up-form w-100"
                          ref="form" data-url="/admin/users/login" action="store">

                        <div class="text-center mb-4">
                            <img :src="configData.company_logo" alt=""
                                 class="img-fluid logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <h6 class="text-center mb-0">{{ $t('hi_there') }}</h6>
                                <label class="text-center d-block">{{ $t('log_in_to_your_dashboard') }}</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <label for="login_email">{{ $t('email') }}</label>
                                <app-input type="email"
                                           v-model="login.email"
                                           :placeholder="$t('enter_your_email')"
                                           :required="true"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <label for="login_password">{{ $t('password') }}</label>
                                <app-input type="password"
                                           v-model="login.password"
                                           :placeholder="$t('enter_your_password')"
                                           :required="true"/>
                            </div>
                        </div>
                        <div class="form-row" v-if="recaptchaEnable == 1">
                            <div class="form-group col-12 px-0">
                                <re-captcha :site-key="siteKey"></re-captcha>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <app-load-more :preloader="preloader"
                                               :label="$t('login')"
                                               type="submit"
                                               class-name="btn btn-primary btn-block text-center"
                                               @submit="submit"/>
                            </div>
                        </div>
                        <div
                            class="form-row form-row flex-column flex-md-row justify-content-center justify-content-md-between justify-content-lg-between">
                            <a href="/forget-password"
                               class="bluish-text d-flex align-items-center justify-content-center justify-content-lg-end">
                                <app-icon name="lock" class="pr-2"/> {{ $t('forgot_password') }}
                            </a>
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
    import {AuthMixin} from "./Mixins/AuthMixin";
    export default {
        name: "Login",
        mixins: [AuthMixin, ThemeMixin],
        components: {},
        props: {
            siteKey: String,
            recaptchaEnable: {},
        },
        data() {
            return {
                login: {email: 'admin@demo.com', password: '123456'},
            };
        },
        methods: {
            submit() {
                this.save(this.login);
            },
            afterSuccess(res) {
                window.location = res.data;
            }
        }
    }
</script>

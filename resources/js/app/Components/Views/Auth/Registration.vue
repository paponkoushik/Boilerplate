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
                    <form class="sign-in-sign-up-form w-100" ref="form" data-url="/user/confirm" action="store">
                        <div class="text-center mb-4">
                            <img :src="configData.company_logo?configData.company_logo:'/images/core.png'" alt=""
                                 class="img-fluid logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <h6 class="text-center mb-0">{{ $t('sign_up') }}</h6>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="user_first_name">{{ $t('first_name') }}</label>
                                <app-input type="text"
                                           v-model="user.first_name"
                                           :placeholder="$t('enter_first_name')"
                                           :required="true"
                                />
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="user_last_name">{{ $t('last_name') }}</label>
                                <app-input type="text"
                                           v-model="user.last_name"
                                           :placeholder="$t('enter_last_name')"
                                           :required="true"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="user_password">{{ $t('password') }}</label>
                                <app-input type="password"
                                           v-model="user.password"
                                           :specialValidation="true"
                                           :placeholder="$t('enter_your_password')"
                                           :required="true"
                                />
                                <PasswordWarning/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="user_password_confirmation">{{ $t('confirm_password') }}</label>
                                <app-input type="password"
                                           same-as="user_password"
                                           v-model="user.password_confirmation"
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
                                               :label="$t('sign_up')"
                                               :class="{'disabled': !userInfo}"
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
        name: "Registration",
        mixins: [AuthMixin, ThemeMixin],
        components: {
            PasswordWarning
        },
        props: {
            userInfo: {},
            siteKey: String,
            recaptchaEnable: {},
        },
        data() {
            return {
                user: {},
                userData: {},
            }
        },
        created() {
            if (this.userInfo) {
                this.userData = JSON.parse(this.userInfo);
            }
        },
        methods: {
            submit() {
                let data = this.user;
                data.email = this.userData.email;
                data.invitation_token = this.userData.invitation_token;
                this.save(data);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                location.replace('/admin/users/login');
            },
        }

    }
</script>

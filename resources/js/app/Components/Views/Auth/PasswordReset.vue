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
                    <form class="sign-in-sign-up-form w-100" ref="form" data-url="/user/password-reset" action="store">
                        <div class="text-center mb-4">
                            <img :src="configData.company_logo?configData.company_logo:'/images/core.png'" alt="" class="img-fluid logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <h6 class="text-center mb-0">{{ $t('forgot_password') }}</h6>
                                <label class="text-center d-block">{{ $t('enter_email_to_reset_password') }}</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="reset_email">{{ $t('email') }}</label>
                                <app-input type="email"
                                           v-model="reset.email"
                                           :placeholder="$t('enter_your_email')"
                                           :required="true"
                                />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12">
                                <app-load-more :preloader="preloader"
                                               :label="$t('submit')"
                                               :class="{'disabled': userId}"
                                               type="submit"
                                               class-name="btn btn-primary btn-block text-center"
                                               @submit="submit"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <span class="ml-1 mr-2">{{ $t('remember_password')}}</span>
                                <a href="/admin/users/login" class="bluish-text d-flex align-items-center justify-content-center justify-content-lg-start">
                                    {{ $t('login') }}
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
        name: "PasswordReset",
        props: {
            userId: {}
        },
        mixins: [AuthMixin, ThemeMixin],
        data() {
          return {
              reset: {},
          }
        },
        methods: {
            submit() {
                this.save(this.reset);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
        }
    }
</script>

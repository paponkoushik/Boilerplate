<template>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-8">
                <div class="back-image"
                     style="background-image: url(https://images.unsplash.com/photo-1555707813-e060038ffc70?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80)">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 pl-md-0">
                <div class="login-form d-flex align-items-center">
                    <form class="sign-in-sign-up-form w-100">
                        <div class="text-center mb-4">
                            <img src="../../assets/images/core.png" alt="" class="img-fluid logo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <h6 class="text-center mb-0">Hi There!</h6>
                                <label class="text-center d-block">Log in to your dashboard.</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <label for="email">Email</label>
                                <input id="email"
                                       type="email"
                                       placeholder="demo@email.com"
                                       class="form-control"
                                       aria-required="true"
                                       aria-invalid="false">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <label for="password">Password</label>
                                <input id="password"
                                       type="password"
                                       placeholder="Enter Password"
                                       class="form-control"
                                       aria-required="true"
                                       aria-invalid="false">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 px-0">
                                <DefaultLoadingButton class="btn-block text-center"
                                                      :button_text="'Login'"
                                                      :button_loader="buttonLoader"
                                                      @submit="login"/>
                            </div>
                        </div>
                        <div class="form-row flex-column flex-md-row justify-content-center justify-content-md-between justify-content-lg-between">
                            <a href="#" class="bluish-text d-flex align-items-center justify-content-center justify-content-lg-start">
                                <i data-feather="home" class="pr-2"/>Back to Home
                            </a>
                            <a href="#" class="bluish-text d-flex align-items-center justify-content-center justify-content-lg-end">
                                <i data-feather="lock" class="pr-2"/>Forgot password?
                            </a>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <p class="text-center mt-5">
                                    Copyright @ 2020 by authority
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
    import CoreJS from '../../assets/js/core'

    export default {
        extends: CoreJS,
        name: "Login",
        data() {
            return {
                buttonLoader: false,
            }
        },
        methods: {
            login() {
                this.buttonLoader = true;
                window.location.href = '/dashboard';
            }
        }
    }
</script>
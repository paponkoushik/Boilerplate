<template>
    <div v-if="componentLoader" class="position-relative h-100">
        <app-overlay-loader/>
    </div>
    <div v-else>
        <!--<app-overlay-loader v-if="preloader"/>-->
        <form class="mb-0" ref="form" :data-url="'admin/auth/users/'+user.loggedInUser.id+'/password/change'"
              :class="{'loading-opacity': preloader}">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 d-flex align-items-center">
                        <label for="user_old_password" class="text-left d-block mb-lg-2 mb-xl-0">
                            {{ $t('old_password') }}
                        </label>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <app-input id="user_old_password"
                                   type="password"
                                   :placeholder="$t('type_your_current_password')"
                                   v-model="authUser.old_password"
                                   :error-message="$errorMessage(errors, 'old_password')"
                                   :required="true"/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 col-xl-3">
                        <label for="user_password" class="text-left d-block mb-lg-2 mb-xl-0">
                            {{ $t('new_password') }}
                        </label>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <app-input id="user_password"
                                   type="password"
                                   :placeholder="$t('type_your_new_password')"
                                   v-model="authUser.password"
                                   :specialValidation="true"
                                   :required="true"/>
                        <PasswordWarning/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3 col-xl-3 d-flex align-items-center">
                        <label for="user_password_confirmation" class="text-left d-block mb-lg-2 mb-xl-0">
                            {{ $t('conform_password') }}
                        </label>
                    </div>
                    <div class="col-lg-8 col-xl-8">
                        <app-input id="user_password_confirmation"
                                   type="password"
                                   :placeholder="$t('re_type_your_new_password')"
                                   v-model="authUser.password_confirmation"
                                   same-as="authUser_password"
                                   :required="true"/>
                    </div>
                </div>
            </div>
            <div class="form-group mb-0 mt-5">
                <div class="row">
                    <div class="col-12 action-buttons">
                        <button type="submit" class="btn btn-primary mr-3" @click.prevent="submit">
                            {{ $t('save') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import {FormMixin} from "../../../../core/mixins/form/FormMixin";
    import GlobalHelperMixin from "../../../Mixins/global/GlobalHelperMixin";
    import {UserMixin} from "./Mixins/UserMixin";
    import PasswordWarning from "./PasswordWarning";
    import * as actions from "../../../Config/ApiUrl";

    export default {
        name: "PasswordChange",
        mixins: [FormMixin, UserMixin, GlobalHelperMixin],
        components:{
            PasswordWarning
        },

        data() {
            return {
                preloader: false,
                authUser: {},
                errors: {}
            }
        },
        methods: {
            beforeSubmit() {
                this.scrollToTop(true);
                this.preloader = true;
            },
            submit() {
                this.save(this.authUser);
            },
            afterFinalResponse() {
                this.preloader = false;
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                window.location = actions.LOGOUT;
            },
            afterError(res) {
                this.errors = res.data.errors;
                //this.$toastr.e(res.data.message);
            }
        }
    }
</script>

<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('my_profile')" :icon="'user'"/>
        <div class="user-profile mb-primary">
            <div class="card position-relative card-with-shadow py-primary border-0">
                <app-overlay-loader v-if="componentLoader" class="h-100"/>
                <div v-else class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5">
                        <div class="media border-right px-5 pr-xl-5 pl-xl-0 align-items-center user-header-media">
                            <form class="mb-0" ref="form" data-url="admin/auth/users/profile-picture"
                                  :class="{'loading-opacity': preloader}">
                                <div class="profile-pic-wrapper position-relative">
                                    <app-overlay-loader v-if="preloader"/>
                                    <app-input v-else
                                               id="user_image"
                                               class="circle mx-xl-auto"
                                               :wrapper-class="'circle mx-xl-auto'"
                                               name="user_image"
                                               type="custom-file-upload"
                                               v-model="user.profile_picture"
                                               :generate-file-url="false"
                                               @change="setProfilePicture"
                                               :label="$t('change')"/>
                                </div>
                            </form>
                            <div class="media-body user-info-header">
                                <h5>
                                    {{ user.loggedInUser.full_name }}
                                </h5>
                                <p class="text-muted mb-2">{{ user.loggedInUser.email }}</p>
                                <span class="badge badge-pill badge-success user-status">{{ $t('active') }}</span>
                                <div class="social-links pt-3">
                                    <a class="mr-3" v-for="socialLink in user.socialLinks"
                                       v-if="socialLink.link" :href="socialLink.link" target="_blank">
                                        <app-icon class="mb-1" :name="socialLink.icon" width="16" height="16"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-7">
                        <div class="user-details px-5 px-sm-5 px-md-5 px-lg-0 px-xl-0 mt-5 mt-sm-5 mt-md-0 mt-lg-0 mt-xl-0">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                    <div class="border-right custom">
                                        <div class="media mb-4 mb-xl-5">
                                            <div class="align-self-center mr-3">
                                                <app-icon :name="'phone'"/>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-muted mb-0">{{ $t('contact') }}:</p>
                                                <p class="mb-0">{{
                                                        user.loggedInUser.contact ? user.loggedInUser.contact : $t('not_available')
                                                    }}</p>
                                            </div>
                                        </div>
                                        <div class="media mb-4 mb-xl-0">
                                            <div class="align-self-center mr-3">
                                                <app-icon :name="'map-pin'"/>
                                            </div>
                                            <div class="media-body">
                                                <p class="text-muted mb-0">{{ $t('address') }}:</p>
                                                <p class="mb-0">{{
                                                        user.loggedInUser.address ? user.loggedInUser.address : $t('not_available')
                                                    }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                                    <div class="media mb-4 mb-xl-5">
                                        <div class="align-self-center mr-3">
                                            <app-icon :name="'calendar'"/>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-muted mb-0">{{ $t('created') }}:</p>
                                            <p class="mb-0">{{ user.loggedInUser.created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="media mb-0 mb-xl-0">
                                        <div class="align-self-center mr-3">
                                            <app-icon :name="'gift'"/>
                                        </div>
                                        <div class="media-body">
                                            <p class="text-muted mb-0">{{ $t('date_of_birth') }}:</p>
                                            <p class="mb-0">{{
                                                    user.loggedInUser.profile ? user.loggedInUser.profile.date_of_birth : $t('not_available')
                                                }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <app-tab :tabs="tabs" :icon="tabIcon"/>
    </div>
</template>

<script>

import {FormMixin} from "../../../../core/mixins/form/FormMixin";
import {UserMixin} from "./Mixins/UserMixin";
import * as actions from "../../../Config/ApiUrl";

export default {
    name: "Profile",
    mixins: [FormMixin, UserMixin],
    data() {
        return {
            preloader: false,
            tabIcon: 'user',
            tabs: [
                {
                    'name': this.$t('personal_info'),
                    'title': this.$t('personal_info'),
                    'component': 'personal-information',
                    'permission': ''
                },
                {
                    'name': this.$t('password_change'),
                    'title': this.$t('password_change'),
                    'component': 'password-change',
                    'permission': ''
                },
                {
                    'name': this.$t('social_links'),
                    'title': this.$t('social_links'),
                    'component': 'social-links',
                    'permission': ''
                }
            ]
        }
    },
    methods: {
        beforeSubmit() {
            this.preloader = true;
        },
        setProfilePicture($event) {
            const fileValue = $event.target.files[0];
            let formData = new FormData();
            formData.append('profile_picture', fileValue);
            this.save(formData);
        },
        afterFinalResponse() {
            this.preloader = false;
        },
        afterSuccess(res) {
            this.$toastr.s(res.data.message);
            window.location = actions.MY_PROFILE;
        },
    }
}
</script>
<style scoped>
    .user-profile .card{
        min-height: 190px;
    }
</style>

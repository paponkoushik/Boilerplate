<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('avatars')" :directory="$t('ui_elements')" :icon="'trello'"/>

        <!--Single avatar-->
        <div class="card card-with-shadow border-0">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('default') }}</h5>
                <!--copy button-->
                <copy-button id="default-avatar" :value="defaultAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="img"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="img"
                                :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Single avatar - with shadow-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('default_shadow') }}</h5>
                <!--copy button-->
                <copy-button id="default-shadow-avatar" :value="defaultShadowAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="img"
                                :shadow="true" :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Single avatar - with shadow and border-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('default_shadow_and_border') }}</h5>
                <!--copy button-->
                <copy-button id="default-shadow-border-avatar" :value="defaultShadowBorderAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="img"
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Single avatar - with status active-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('active') }}</h5>
                <!--copy button-->
                <copy-button id="active-avatar" :value="activeAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="img"
                                status="success" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="img"
                                status="success" :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Single avatar - with status inactive-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('inactive') }}</h5>
                <!--copy button-->
                <copy-button id="inactive-avatar" :value="inactiveAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="img"
                                status="secondary" :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Single  - No image -->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('initials') }}</h5>
                <!--copy button-->
                <copy-button id="initial-avatar" :value="initialAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center flex-wrap">

                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-90" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-80" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-70" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-60" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-50" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-40" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-30" :img="''"
                                :alt-text="$t('not_found')"/>
                    <app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-20" :img="''"
                                :alt-text="$t('not_found')"/>

                </div>
            </div>
        </div>

        <!--Avatar group-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('groups') }}</h5>
                <!--copy button-->
                <copy-button id="group-avatar" :value="groupAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupTwo"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupOne"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupTwo"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupOne"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Avatar group - With shadow-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('groups_shadow') }}</h5>
                <!--copy button-->
                <copy-button id="group-shadow-avatar" :value="groupShadowAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupTwo"
                                               :shadow="true"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupOne"
                                               :shadow="true"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupTwo" :shadow="true"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupOne" :shadow="true"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--Avatar group - With shadow and border-->
        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('groups_shadow_and_border') }}</h5>
                <!--copy button-->
                <copy-button id="group-shadow-border-avatar" :value="groupShadowBorderAvatarValue"/>
            </div>
            <div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupTwo"
                                               :border="true" :shadow="true"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="avatarsGroupOne"
                                               :border="true" :shadow="true"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupTwo" :border="true" :shadow="true"/>
                        </div>
                        <div class="col-lg-6">
                            <app-avatars-group :avatars="avatarsGroupOne" :border="true" :shadow="true"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import CopyButton from "../CopyButton";
    import {AvatarsMixins} from "./AvatarsMixins";

    export default {
        name: "Avatars",
        mixins: [AvatarsMixins],
        components: {CopyButton},
        data() {
            return {
                img: 'images/avatar-demo.jpg',
                avatarsGroupClass: 'avatars-group-w-60',
                avatarsGroupOne: [
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                ],
                avatarsGroupTwo: [
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                    {
                        img: 'images/avatar-demo.jpg',
                        title: this.$t('avatar_title'),
                        subTitle: this.$t('avatar_subtitle'),
                        alt: this.$t('not_found')
                    },
                ]
            }
        }
    }
</script>

export const AvatarsMixins = {
    data() {
        return {
            defaultAvatarValue: `
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
                                :alt-text="$t('not_found')"/>`,

            defaultShadowAvatarValue: `

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
                                :shadow="true" :alt-text="$t('not_found')"/>`,

            defaultShadowBorderAvatarValue: `<app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
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
                                :shadow="true" :border="true" :alt-text="$t('not_found')"/>`,

            activeAvatarValue: `<app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
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
                                status="success" :alt-text="$t('not_found')"/>`,

            inactiveAvatarValue: `<app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="img"
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
                                status="secondary" :alt-text="$t('not_found')"/>`,

            initialAvatarValue: `<app-avatar :title="$t('avatars')" class="mr-2" avatar-class="avatars-w-100" :img="''"
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
                                :alt-text="$t('not_found')"/>`,

            groupAvatarValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="'avatars-group-w-60'" :avatars=" [
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
                ]"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="'avatars-group-w-60'" :avatars="[
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
                ]"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatars=" [
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
                ]"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatars="[
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
                ]"/>
                        </div>
                    </div>
                </div>
            </div>`,

            groupShadowAvatarValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="'avatars-group-w-60'" :avatars=" [
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
                ]"
                                               :shadow="true"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="'avatars-group-w-60'" :avatars="[
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
                ]"
                                               :shadow="true"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatars=" [
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
                ]" :shadow="true"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatars="[
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
                ]" :shadow="true"/>
                        </div>
                    </div>
                </div>
            </div>`,
            groupShadowBorderAvatarValue: `<div class="card-body">
                <div class="mb-primary">
                    <h6 class="pb-2">{{ $t('large') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="[
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
                ]"
                                               :border="true" :shadow="true"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatar-group-class="avatarsGroupClass" :avatars="[
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
                ]"
                                               :border="true" :shadow="true"/>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="pb-2">{{ $t('small') }}</h6>
                    <div class="row">
                        <div class="col-xl-6">
                            <app-avatars-group :avatars="[
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
                ]" :border="true" :shadow="true"/>
                        </div>
                        <div class="col-xl-6">
                            <app-avatars-group :avatars="[
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
                ]" :border="true" :shadow="true"/>
                        </div>
                    </div>
                </div>
            </div>`
        }
    }
};

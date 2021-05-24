<template>
    <div class="card card-with-shadow border-0 h-100 employee-preview-card">
        <div class="card-body position-relative d-flex flex-column justify-content-between">
            <div v-if="showAction" class="dropdown options-dropdown position-absolute">
                <button type="button"
                        class="btn-option btn d-flex align-items-center justify-content-center"
                        data-toggle="dropdown">
                    <app-icon name="more-horizontal"/>
                </button>
                <div class="dropdown-menu dropdown-menu-right py-2 mt-1">
                    <a class="dropdown-item px-4 py-2"
                       href="#"
                       v-for="(action,index) in actions"
                       :key="index"
                       @click.prevent="callAction(action)">
                        {{ action.title }}
                    </a>
                </div>
            </div>
            <div class="d-flex flex-column align-items-center">
                <app-avatar :title="profile.name"
                            avatar-class="avatars-w-60 mb-2 mx-auto d-inline-block"
                            :img="getImageUrl(profile)"/>

                <h5 class="mb-1 mt-3" style="font-size: 1.15rem">{{ profile.name }}</h5>
                <p class="mb-2 text-muted font-size-90">{{ profile.email }}</p>
                <div v-if="profile.status" class="my-3">
                    <span :class="'badge badge-sm badge-pill badge-'+statusClass(profile.status)">{{ profile.status }}</span>
                </div>
                <p v-if="profile.phone" class="mb-2">{{ profile.phone }}</p>
                <p v-if="profile.gender" class="mb-2">{{ $t(profile.gender) }}</p>
                <p v-if="profile.age" class="mb-2">{{ $t('age') + ': ' + profile.age }}</p>
            </div>
        </div>
    </div>
</template>

<script>
import AppFunction from "../../../../../../core/helpers/app/AppFunction";

export default {
    name: "ProfileCard",
    props: {
        profile: {
            type: Object,
            required: true
        },
        actions: {
            type: Array,
            required: true
        },
        showAction: {
            type: Boolean,
            default: true
        },
        id: {
            required: true
        }
    },
    methods: {
        callAction(action) {
            this.$emit('action-' + this.id, this.profile, action, true)
        },
        getImageUrl(profile) {
            if (profile.profile_picture) {
                return AppFunction.getAppUrl(profile.profile_picture);
            }
            return AppFunction.getAppUrl('images/avatar-demo.jpg');
        },
        statusClass(status) {
            let ClassName = 'danger';
            if (status === 'active') ClassName = `success`;
            else if (status === 'invited') ClassName = `warning`;
            return ClassName;
        }
    },
}
</script>

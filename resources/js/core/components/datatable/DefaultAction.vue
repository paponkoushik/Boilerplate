<template>
    <div v-if="VisibleActions.length > 0"
         class="btn-group btn-group-action"
         role="group"
         aria-label="Default action">
        <button v-for="(action, index) in VisibleActions"
                :key="index"
                type="button"
                class="btn"
                :class="action.className"
                data-toggle="tooltip"
                data-placement="top"
                :title="action.title"
                @click.prevent="callMethod('',action)">
            <app-icon v-if="action.icon" :name="action.icon"/>
            <span v-else>
                {{ action.title }}
            </span>
        </button>
    </div>
</template>

<script>
import {ActionMixin} from "./mixin/ActionMixin.js";

export default {
    name: "DefaultAction",
    mixins: [ActionMixin],
    mounted() {
        setTimeout(() => {
            $('[data-toggle="tooltip"]').tooltip()
        }, 3000);
    },
}
</script>

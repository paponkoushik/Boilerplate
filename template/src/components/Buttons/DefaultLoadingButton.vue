<template>
    <button type="button" class="btn btn-primary" @click.prevent="submit">
        <SpinnerBounceLoader v-if="button_loader"/>
        <span v-else>{{ button_text }}</span>
    </button>
</template>

<script>
    export default {
        name: "DefaultLoadMoreButton",
        props: ['button_text', 'button_loader'],
        data () {
            return {

            }
        },
        mounted() {

        },
        methods: {
            submit() {
                this.$emit('submit');
            }
        }
    }
</script>
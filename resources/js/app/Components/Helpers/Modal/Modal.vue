<template>
    <app-modal :modal-id="modalId"
               modal-size="default"
               modal-alignment="top"
               @close-modal="closeModal"
               :modal-scroll="modalScroll"
               :modal-body-class="modalBodyClass">
        <template slot="header">
            <h5 class="modal-title">{{ title }}</h5>
            <button type="button"
                    class="close outline-none"
                    data-dismiss="modal"
                    aria-label="Close"
                    @click.prevent="closeModal">
                <span>
                    <app-icon :name="'x'"></app-icon>
                </span>
            </button>
        </template>

        <template slot="body">
            <slot name="body"></slot>
        </template>

        <template slot="footer">
            <div :class="{'loading-opacity': preloader}">
                <button type="button"
                        class="btn btn-secondary mr-2"
                        data-dismiss="modal"
                        @click.prevent="closeModal">
                    {{ $t('cancel') }}
                </button>
                <button type="button"
                        class="btn btn-primary"
                        @click.prevent="submit">
                    {{ $t('save') }}
                </button>
            </div>
        </template>
    </app-modal>
</template>
<script>
    export default {
        name: "Modal",

        props: {
            title: String,
            modalId: String,
            preloader: {
                type: Boolean,
                default: false
            },
            modalScroll: {
                type: Boolean,
                default: true,
            },
            modalBodyClass: {}
        },
        methods: {
            closeModal() {
                this.$emit('close-modal');
            },
            submit() {
                this.$emit('submit');
            }
        }
    }
</script>

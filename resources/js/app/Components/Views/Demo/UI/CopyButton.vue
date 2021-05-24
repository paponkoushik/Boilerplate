<template>
    <div>
        <textarea type="text" class="d-none" :id="id" readonly="readonly">
            {{ value }}
        </textarea>
        <button class="btn btn-link p-1 btn-sm"
                @click.prevent="btnClicked"
                @mouseleave="copied=false"
                data-toggle="tooltip"
                data-placement="top"
                :title="$t('click_to_copy')">
            <span v-if="!copied" :key="'copy'">
                <app-icon :name="'copy'" width="20" height="20"/>
            </span>
            <span v-else :key="'check'">
                <app-icon :name="'check'" width="20" height="20"/>
            </span>
        </button>
    </div>
</template>

<script>
    import CopyToClipboard from "../../../../Helpers/CopyToClipboard";

    export default {
        name: "CopyButton",
        props: {
            id: {
                type: String,
                require: true
            },
            value: {
                type: String,
                require: true
            }
        },
        data() {
            return {
                copied: false
            }
        },
        methods: {
            btnClicked() {
                CopyToClipboard.copyDom(this.id);
                this.copied = true;
                this.$toastr.s(this.$t('successfully_copied_message'));
            }
        }
    }
</script>


<template>
    <div class="content-wrapper p-4">
        <app-breadcrumb :page-title="$t('nothing_to_show')" :directory="$t('ui_elements')" :icon="'trello'"/>
        <app-note class="mb-4" :title="'Note'" :notes="notFoundInstruction"/>
        <div class="row">
            <div class="col-12">
                <div class="card card-with-search border-0 card-with-shadow">
                    <div class="card-body">
                        <div class="cursor-pointer"
                             @click.prevent="copyNothingToShow"
                             data-toggle="tooltip"
                             data-placement="top"
                             :title="$t('click_to_copy')">
                            <app-empty-data-block :message="$t('nothing_to_show_message')"/>
                        </div>
                    </div>
                </div>
            </div>

            <!--For copy dom-->
            <textarea type="text"
                      class="d-none"
                      id="copy-nothing-to-show"
                      readonly="readonly">
                {{ nothingToShowValue }}
            </textarea>
        </div>
    </div>
</template>

<script>
    import CopyToClipboard from "../../../../../Helpers/CopyToClipboard";

    export default {
        name: "NothingToShow",
        data() {
            return {
                notFoundInstruction: [this.$t('nothing_to_show_instruction')],
                nothingToShowValue: `<app-empty-data-block :message="$t('nothing_to_show_message')"/>`
            }
        },
        methods:{
            copyNothingToShow(){
                CopyToClipboard.copyDom('copy-nothing-to-show');
                this.$toastr.s(this.$t('successfully_copied_message'));
            }
        }
    }
</script>

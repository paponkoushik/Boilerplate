<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('text_editor')" :directory="$t('forms_and_fields')" :icon="'sidebar'"/>
        <div class="card card-with-shadow border-0">
            <div class="card-header p-primary bg-transparent">
                <h5 class="card-title m-0">{{ $t('text_editor') }}</h5>
            </div>
            <app-overlay-loader v-if="preloader"/>
            <div class="card-body">
                <form ref="form" data-url="/form/editor-input" class="mb-0" :class="{'loading-opacity': preloader}">
                    <div class="form-group row">
                        <label for="inputs_message" class="col-sm-2 h-fit-content">
                            {{ $t('subject') }}
                        </label>
                        <div class="col-sm-8">
                            <app-input type="text"
                                       :required="true"
                                       :min-length="2"
                                       :max-length="20"
                                       :label="$t('message_placeholder')" v-model="inputs.subject"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputs_editor" class="col-sm-2 h-fit-content">
                            {{ $t('content') }}
                        </label>
                        <div class="col-sm-8">
                            <app-input type="text-editor"
                                       :required="true"
                                       id="text-editor-id"
                                       :label="$t('message_placeholder')" v-model="inputs.editor"/>

                            <div class="form-group text-center">
                                <button
                                        type="button"
                                        class="btn btn-sm btn-primary px-3 py-1 mr-2 mt-4"
                                        data-toggle="tooltip"
                                        data-placement="top"
                                        v-for="tag in all_tags"
                                        :title="tag.description"
                                        @click="addTag(tag.tag)"
                                >{{ tag.tag }}</button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 action-buttons">
                        <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
                            {{ $t('submit') }}
                        </button>
                        <button type="submit" class="btn btn-secondary" @click.prevent="clear">
                            {{ $t('clear') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
    import {FormMixin} from '../../../../../core/mixins/form/FormMixin.js';

    export default {
        name: "InputText",
        mixins: [FormMixin],
        data() {
            return {
                preloader:false,
                inputs: {
                    subject: '',
                    editor: ''
                },
                tags: {
                    '{first_name}': this.$t('The Profile first name'),
                    '{last_name}': this.$t('The Profile last name'),
                    '{app_name}': this.$t('Name of the app'),
                },
            }
        },
        computed: {
            all_tags() {
                const tags = Object.keys(this.tags).filter(tag => {
                    return ['{first_name}','{last_name}', '{app_name}',].includes(tag)
                })
                return tags.map(tag => { return { tag, description: this.tags[tag] } })
            }
        },
        methods: {
            beforeSubmit(){
                this.preloader = true;
            },
            submit() {
                this.save(this.inputs);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.inputs = {
                    subject: '',
                    editor: ''
                };
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {
                    subject: '',
                    editor: ''
                };
                this.fieldStatus = {
                    isSubmit: false
                }
            },
            addTag(tag_name = '{name}') {
                $("#text-editor-id").summernote('editor.saveRange');
                $("#text-editor-id").summernote('editor.restoreRange');
                $("#text-editor-id").summernote('editor.focus');
                $("#text-editor-id").summernote('editor.insertText', tag_name);
            }
        }
    }
</script>



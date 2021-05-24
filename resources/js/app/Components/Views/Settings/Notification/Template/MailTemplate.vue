<template>
    <form ref="form" v-if="loaded">
        <div class="position-relative" :class="{'loading-opacity': preloader}">
            <app-overlay-loader v-if="preloader"/>
            <div class="form-group">
                <label class="d-block">{{$t('mail_subject')}}</label>
                <span class="text-muted font-size-90">{{$t('this_field_will_be_used_as_the_email_subject_and_identify_the_template')}}</span>

                <app-input v-model="template.subject"
                           :required="true"/>
            </div>
            <div class="form-group">
                <label>{{ $t('contents') }}</label>
                <app-input
                        type="text-editor"
                        v-model="template.content"
                        v-if="loaded"
                        :required="true"
                        :text-editor-hints="textEditorHints(Object.keys(tags))"
                        row="5"
                        id="text-editor-for-template"/>
            </div>

            <div class="form-group text-center">
                <button
                        type="button"
                        class="btn btn-sm btn-primary px-3 py-1 margin-left-2 mt-2"
                        data-toggle="tooltip"
                        data-placement="top"
                        v-for="tag in all_tags"
                        :title="tag.description"
                        @click="addTag(tag.tag)"
                >{{ tag.tag }}</button>
            </div>
        </div>
    </form>
    <div v-else>
        <app-pre-loader />
    </div>
</template>

<script>
    import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";
    import {TemplateMixins} from './Mixins/TemplateMixins';
    import {textEditorHints} from "../../../../../Helpers/Helpers";

    export default {
        name: "MailTemplate",
        mixins: [FormMixin, TemplateMixins],
        data(){
            return {
                preloader:false,
                tags: {
                    '{name}': this.$t('The resource name of the event'),
                    '{action_by}': this.$t('The Profile who performed the action'),
                    '{app_name}': this.$t('Name of the app'),
                    '{app_logo}': this.$t('Logo of the app'),
                    '{receiver_name}': this.$t('The Profile who will receive the Notification'),
                    '{resource_url}': this.$t('Page link of resource'),
                    '{invitation_url}': this.$t('Invitation url for the Profile'),
                    '{reset_password_url}': this.$t('Reset password url of Profile'),
                },
                textEditorHints
            }
        },
        mounted() {
            this.preloader = true;
            setTimeout(()=>{
                this.preloader = false;
            })
        },
        watch : {
            'notificationSettings.rowData': {
                handler : 'setType',
                immediate : true
            },
            'template' : {
                handler : 'setTemplateObj',
                immediate : true,
            }
        },
        computed: {
            all_tags() {
                const tags = Object.keys(this.tags).filter(tag => {
                    if ('user_invitation' === this.notificationEventName) {
                        return ['{app_logo}','{action_by}', '{app_name}', '{receiver_name}', '{invitation_url}'].includes(tag)
                    }else if('password_reset' === this.notificationEventName) {
                        return ['{name}','{app_logo}', '{app_name}', '{receiver_name}', '{reset_password_url}'].includes(tag)
                    }else {
                        return !['{reset_password_url}', '{invitation_url}'].includes(tag)
                    }
                });
                return tags.map(tag => { return { tag, description: this.tags[tag] } })
            }
        },
        methods : {
            setType(){
                this.setTemplate('mail')
            },
            addTag(tag_name = '{name}') {
                $("#text-editor-for-template").summernote('editor.saveRange');
                $("#text-editor-for-template").summernote('editor.restoreRange');
                $("#text-editor-for-template").summernote('editor.focus');
                if (tag_name == '{app_logo}') $("#text-editor-for-template").summernote('pasteHTML',
                    '<img src="{app_logo}" style="height: 75px"/>');
                else $("#text-editor-for-template").summernote('editor.insertText', tag_name);
            }
        },
    }
</script>
<style scoped>
    .margin-left-2 {
        margin-left: 4px;
    }
    .margin-left-2:first-child {
        margin-left: 0;
    }
</style>
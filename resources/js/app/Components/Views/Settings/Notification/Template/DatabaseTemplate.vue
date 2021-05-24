<template>
    <form ref="form" v-if="loaded">
        <div class="form-group" v-if="template">
            <label>{{ $t('contents') }}</label>
            <app-input v-model="template.content"
                       id="database-template-title"
                        :required="true"/>
        </div>
        <div class="form-group text-center">
            <button
                    type="button"
                    class="btn btn-sm btn-primary px-3 py-1 margin-left-2 mt-2"
                    data-toggle="tooltip"
                    data-placement="top"
                    v-for="t in Object.keys(all_tags)"
                    @click="insertAtCaret('database-template-title', t)"
                    :title="tags[t]"
            >{{ t }}</button>
        </div>
    </form>
    <div v-else>
        <app-pre-loader />
    </div>
</template>

<script>
    import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";
    import {TemplateMixins} from './Mixins/TemplateMixins';

    export default {
        data(){
            return {
                loaded: false,
                tags: {
                    '{name}': this.$t('The resource name of the event'),
                    '{app_name}': this.$t('Name of the app'),
                    '{action_by}': this.$t('The Profile who performed the action'),
                },
            }
        },
        name: "DatabaseTemplate",
        mixins: [FormMixin, TemplateMixins],

        computed: {
            all_tags() {
                let tags = {...this.tags};
                return tags;
            }
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
        methods : {
            setType(){
                this.setTemplate('database')
            },
            insertAtCaret(areaId, text) {
                let txtarea = document.getElementById(areaId);
                if (!txtarea) {
                    return;
                }

                let scrollPos = txtarea.scrollTop;
                let strPos = 0;
                let br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
                    "ff" : (document.selection ? "ie" : false));
                if (br == "ie") {
                    txtarea.focus();
                    let range = document.selection.createRange();
                    range.moveStart('character', -txtarea.value.length);
                    strPos = range.text.length;
                } else if (br == "ff") {
                    strPos = txtarea.selectionStart;
                }

                let front = (txtarea.value).substring(0, strPos);
                let back = (txtarea.value).substring(strPos, txtarea.value.length);
                txtarea.value = front + text + back;
                strPos = strPos + text.length;
                if (br == "ie") {
                    txtarea.focus();
                    let ieRange = document.selection.createRange();
                    ieRange.moveStart('character', -txtarea.value.length);
                    ieRange.moveStart('character', strPos);
                    ieRange.moveEnd('character', 0);
                    ieRange.select();
                } else if (br == "ff") {
                    txtarea.selectionStart = strPos;
                    txtarea.selectionEnd = strPos;
                    txtarea.focus();
                }

                txtarea.scrollTop = scrollPos;
            }
        }
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

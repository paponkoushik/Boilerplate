import {NotificationSettingsMixin} from '../../Mixins/NotificationSettingsMixin';

export const TemplateMixins = {
    mixins: [NotificationSettingsMixin],
    data(){
        return {
            loaded : false,
            template : {},
        }
    },
    methods: {
        setTemplate(type){
            let data = this.notificationSettings.rowData.templates;

            this.template = data.find(item => {
                item.content = item.custom_content ? item.custom_content : item.default_content;
                return item.type === type
            });
            this.loaded = true;
        },
        setTemplateObj(){
            this.$store.dispatch('setNotificationTemplate', this.template);
        }
    },
}
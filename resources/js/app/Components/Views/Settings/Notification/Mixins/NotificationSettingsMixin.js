import { mapState, mapGetters } from 'vuex';
export const NotificationSettingsMixin = {
    computed: {
        ...mapState({
            notificationSettings : state => state.notificationSettings
        }),
        ...mapGetters([
            'notificationSettingsUpdateModalId',
            'notificationTemplateModalId',
            'notificationSettingsTableId'
        ]),
        modalTitle(){
            return `${this.$t('template')}: ${this.notificationSettings.rowData.translated_name}`;
        },
        notificationEventName() {return this.notificationSettings.rowData.name}
    },
}

<template>
    <div>
        <div class="d-flex align-items-center justify-content-end p-0">
            <app-search @input="getSearchValue"/>
        </div>

        <app-table :id="tableId" :search="search" :options="option" @action="getActionFromSettings"/>

        <notification-settings-update-modal v-if="isActive" :selected-url="selectedUrl" @close-modal="closeModal"/>

        <notification-tamplate-update-modal v-if="isActiveTemplateModal"
                                            :selected-url="selectedUrl"
                                            :eventId="eventId"
                                            @close-modal="closeTemplateModal"/>
    </div>
</template>

<script>
    import {TableWithoutWrapperMixin} from '../../../../../Mixins/TableWithoutWrapperMixin';
    import {NotificationSettingsMixin} from '../Mixins/NotificationSettingsMixin';
    import {NotificationTableMixin} from '../Mixins/NoticicationTableMixin';

    import NotificationSettingsUpdateModal from './UpdateModal';
    import NotificationTamplateUpdateModal from '../Template/UpdateTemplate';

    import * as actions from '../../../../../Config/ApiUrl';

    export default {
        name: "NotificationSettings",
        mixins: [TableWithoutWrapperMixin, NotificationSettingsMixin, NotificationTableMixin],
        components: {NotificationSettingsUpdateModal, NotificationTamplateUpdateModal},
        data() {
            return {
                eventId: '',
                tableId: 'notification-settings-table',
                isActive: false,
                selectedUrl: '',
                alias: 'app',
                isActiveTemplateModal: false,
            }
        },
        methods: {
            getActionFromSettings(rowData, actionObj, active) {

                this.$store.dispatch('setRowDataForNotificationSettings', rowData);

                if (actionObj.actionType === 'edit') {
                    this.isActive = true;
                    this.selectedUrl = `${actions.NOTIFICATION_EVENTS}?type=${this.alias}&per_page=100`;
                } else if (actionObj.actionType === 'manage') {
                    this.eventId = rowData.id;
                    this.isActiveTemplateModal = true;
                    this.selectedUrl = `${actions.NOTIFICATION_EVENTS}/${rowData.id}`;
                }
            },
            closeModal() {
                $('#' + this.notificationSettingsUpdateModalId).modal('hide');
                this.isActive = false;
                this.reSet();
            },
            closeTemplateModal() {
                this.isActiveTemplateModal = false;
                $('#' + this.notificationTemplateModalId).modal('hide');
                this.reSet();
            },
            reSet() {
                this.selectedUrl = '';
                this.$store.dispatch('setRowDataForNotificationSettings', {});
            }
        }
    }
</script>

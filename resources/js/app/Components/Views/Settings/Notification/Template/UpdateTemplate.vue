<template>
    <modal :modal-id="notificationTemplateModalId"
                     :title="modalTitle"
                     :preloader="preloader"
                     :modal-body-class="'p-0'"
                     @submit="submit"
                     @close-modal="closeModal">
        <template slot="body">
            <app-overlay-loader v-if="preloader"/>
            <app-tab v-else type="horizontal" :tabs="tabs"/>
        </template>
    </modal>
</template>

<script>
import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";
import {ModalMixin} from "../../../../../Mixins/ModalMixin";
import {TemplateMixins} from './Mixins/TemplateMixins';
import * as actions from '../../../../../Config/ApiUrl';
import {mapState} from "vuex";

export default {
    name: "NotificationTamplateUpdateModal",
    mixins: [ModalMixin, FormMixin, TemplateMixins],
    props: ['eventId'],
    data() {
        return {
            preloader:true,
            modalId: 'notification-tamplate-mpdate-modal',
            tabs: [
                {
                    name: this.$t('database'),
                    title: this.$t('database'),
                    component: "database-template",
                    props: "",
                    permission: false,
                    icon: 'bell',
                },
                {
                    name: this.$t('mail'),
                    title: this.$t('mail'),
                    component: "mail-template",
                    permission: true,
                    icon: 'mail',
                    props: ""
                },
            ]
        }
    },
    computed: {
        ...mapState({
            notification_event: state => state.notificationSettings.notification_event,
        }),
    },

    methods: {

        submit() {
            let template = {
                ...this.notificationSettings.template,
                custom_content: this.notificationSettings.template.content
            };
            this.submitFromFixin('patch', `${actions.NOTIFICATION_TEMPLATES}/${template.id}`, template);
        },
        afterSuccess(res) {
            this.$toastr.s(res.data.message);
            this.$hub.$emit('reload-' + this.notificationSettingsTableId);
        },
        afterSuccessFromGetEditData(res) {
            this.$store.dispatch('setRowDataForNotificationSettings', res.data);
            this.preloader = false;
        }
    },
    watch: {
        eventId: {
            handler: function (eventId) {
                this.$store.dispatch('getNotificationEvent', eventId)
            },
            immediate: true
        },
        notification_event: {
            handler: function (notification_event) {
                this.tabs.find(event => {
                    return event.component === 'database-template';
                }).permission = !['user_invitation', 'password_reset'].includes(notification_event.name)
            },
            deep: true
        }
    },
}

</script>

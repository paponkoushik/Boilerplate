<template>
    <modal :modal-id="notificationSettings.notificationSettingsUpdateModalId"
                     :title="modalTitle"
                     :preloader="preloader"
                     :modal-scroll="false"
                     @submit="submit"
                     @close-modal="closeModal">
        <template slot="body">
            <app-overlay-loader v-if="initLoader"/>
            <div v-else>
                <app-overlay-loader v-if="preloader"/>
                <form method="post" ref="form"
                      :data-url="`admin/app/notification-settings/${notificationSettings.rowData.id}`"
                      :class="{'loading-opacity': preloader}">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <h6>{{ $t('notification_channel') }}</h6>
                                <app-input
                                        type="multi-select"
                                        v-model="settings.notify_by"
                                        :list="makeChannelArr"
                                        list-value-field="name"
                                        :required="true"
                                        :isAnimatedDropdown="true"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <h6>{{ $t('notification_audiences') }}</h6>
                        </div>
                        <div class="col-12">
                            <label>{{ $t('roles') }}</label><br>
                            <app-input
                                    type="multi-select"
                                    v-model="settings.roles"
                                    :list="notificationSettings.roles"
                                    list-value-field="name"
                                    :error-message="errorMessage"
                                    @input="clearErrorMessage"
                                    :isAnimatedDropdown="true"/>
                        </div>
                        <div class="col-12">
                            <label>{{ $t('users') }}</label><br>
                            <app-input
                                    type="multi-select"
                                    v-model="settings.users"
                                    :list="notificationSettings.users"
                                    list-value-field="full_name"
                                    :error-message="errorMessage"
                                    @input="clearErrorMessage"
                                    :isAnimatedDropdown="true"/>
                        </div>
                    </div>
                </form>
            </div>
        </template>
    </modal>
</template>

<script>
import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";
import {ModalMixin} from "../../../../../Mixins/ModalMixin";
import {NotificationSettingsMixin} from '../Mixins/NotificationSettingsMixin';

export default {
    name: "NotificationSettingsUpdateModal",
    mixins: [FormMixin, ModalMixin, NotificationSettingsMixin],
    props: {
        data: Object,
        alias: {
            type: String,
            default: 'app'
        },
    },
    data() {
        return {
            initLoader: true,
            settings: {
                users: [],
                roles: [],
                notify_by: [],
                notification_event_id: null,
                audiences: []
            },
            errorMessage: ''
        }
    },
    computed: {
        makeChannelArr() {
            let output = [];
            this.notificationSettings.channels.filter((item, index) => {
                let obj = {
                    id: item.name,
                    name: this.$t(item.name)
                };
                output = [...output, obj];
            });
            return output;
        }
    },
    created() {
        this.$store.dispatch('getAllUsers');
        this.$store.dispatch('getAllRoles');
        this.$store.dispatch('getNotificationsChannels');
        this.setSelectedData();
    },
    watch: {
        makeChannelArr: function () {
            this.initLoader = false
        }
    },
    methods: {
        setSelectedData() {

            let audiencesArr = this.notificationSettings.rowData.settings['audiences'];
            this.settings.notify_by = this.notificationSettings.rowData.settings['notify_by']
            this.settings.notification_event_id = this.notificationSettings.rowData.id;

            audiencesArr.map(item => {
                if (item.audience_type == 'roles')
                    this.settings.roles = item.audiences
                else if (item.audience_type == 'users')
                    this.settings.users = item.audiences
            });
        },
        submit() {
            this.settings.audiences = [
                this.settings.roles.length ? {
                    audience_type: 'roles',
                    audiences: this.settings.roles
                } : '',
                this.settings.users.length ? {
                    audience_type: 'users',
                    audiences: this.settings.users
                } : '',
            ];
            this.clearErrorMessage();
            this.settings.audiences = this.settings.audiences.filter(a => a);
            this.fieldStatus.isSubmit = true;
            if (this.settings.users.length > 0 || this.settings.roles.length > 0) this.save(this.settings);
            else {
                this.errorMessage = this.$t('this_audiences_field_is_required');
            }
        },
        afterSuccess(res) {
            this.$toastr.s(res.data.message);
            this.$hub.$emit('reload-' + this.notificationSettingsTableId);
        },
        clearErrorMessage() {
            this.errorMessage = '';
        }
    }
}
</script>

import {axiosGet} from '../../../app/Helpers/AxiosHelper';

export default {

    state: {
        notificationSettingsUpdateModalId: 'notification-settings-modal',
        notificationSettingsTableId: 'notification-settings-table',
        notificationTemplateModalId: 'notification-tamplate-mpdate-modal',
        rowData: {},
        users : [],
        roles : [],
        channels : [],
        notification_events: [],
        notification_event: {},
        template: {},
    },

    getters: {
        notificationSettingsUpdateModalId : state => state.notificationSettingsUpdateModalId,
        notificationSettingsTableId : state => state.notificationSettingsTableId,
        notificationTemplateModalId : state => state.notificationTemplateModalId,
    },

    mutations: {

        SET_ROW_DATA(state, data){
            state.rowData = data;
        },

        GET_ALL_USERS(state, data){
            state.users = data;
        },
        GET_ALL_ROLES(state, data){
            state.roles = data;
        },
        GET_NOTIFICATION_CHANNELS(state, data){
            state.channels = data;
        },
        NOTIFICATION_EVENTS(state, data){
            state.notification_events = data;
        },

        SET_NOTIFICATION_TEMPLATE(state, template){
            state.template = template;
        },

        SET_NOTIFICATION_EVENT(state, data) {
            state.notification_event = data;
        }
    },

    actions: {
        getAllUsers({commit}){
            const url = '/all-users';
            axiosGet(url).then( res => {
                commit('GET_ALL_USERS',res.data);
            });
        },
        getAllRoles({commit}){
            const url = '/all-roles';
            axiosGet(url).then( ({data}) => {
                commit('GET_ALL_ROLES',data);
            });
        },
        getNotificationsChannels({commit}){
            const url = '/admin/app/notification-channels';
            axiosGet(url).then(({data}) => {
                commit('GET_NOTIFICATION_CHANNELS',data);
            });
        },
        setRowDataForNotificationSettings({commit}, data){
            commit('SET_ROW_DATA', data);
        },

        getNotificationEvents({commit, state, dispatch}, alias) {
            axiosGet(`/admin/app/notification-events?type=${alias}&per_page=100`).then(({data}) => {
                commit('NOTIFICATION_EVENTS', data);
            });
        },

        setNotificationTemplate({commit, state, dispatch}, template){
            commit('SET_NOTIFICATION_TEMPLATE', template);
        },

        getNotificationEvent({commit, dispatch}, payload) {
            axiosGet(`/admin/app/notification-events/${payload}`).then(res => {
                commit('SET_NOTIFICATION_EVENT', res.data)
                dispatch('getNotificationsChannels')
            });
        },
    }
}

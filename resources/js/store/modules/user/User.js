import Vue from 'vue';
import {axiosGet, urlGenerator} from '../../../app/Helpers/AxiosHelper';
import DateFunction from "../../../core/helpers/date/DateFunction";
import * as actions from '../../../app/Config/ApiUrl';
import * as dateTimeFunc from '../../../app/Helpers/DateTimeHelper';
import axios from 'axios';

export default {
    state: {
        loggedInUser: {},
        profile_picture: '',
        notificationList: [],
        socialLinks: [],
        users: [],
    },

    getters: {
        notificationList: state => state.notificationList,
        getUsers: state => state.users,
    },

    mutations: {
        SET_USERS(state, data) {
            state.users = data
        },
        GET_USER(state, obj) {
            const {rootState, user} = obj;
            state.loggedInUser = user;

            if (user.profile) {
                state.loggedInUser.date_of_birth = user.profile.date_of_birth ? new Date(user.profile.date_of_birth) : null;
                state.loggedInUser.gender = user.profile?.gender;
                state.loggedInUser.contact = user.profile?.contact;
                state.loggedInUser.address = user.profile?.address;
            }

            state.loggedInUser.created_at = DateFunction.getDateFormat(user.created_at, rootState.settings.dateFormat);
            state.loggedInUser.role = user.roles && user.roles.length ? user.roles[0].name : '';
            state.profile_picture = user.profile_picture?.path ? user.profile_picture.path : '/images/avatar-demo.jpg';
            state.loggedInUser.img = user.profile_picture?.path ? user.profile_picture.path : '/images/avatar-demo.jpg';
            state.socialLinks = user?.social_links.filter((item, index) => {
                item.link = item.pivot.link;
                item.edit = false;
                return item;
            });
        },
        GET_NOTIFICATIONS(state, obj) {
            const {rootState, notifications} = obj,
                timeFormat = rootState.settings.timeFormat,
                dateFormat = rootState.settings.dateFormat;


            state.notificationList = notifications.map(item => {
                const {data, id, notifier, created_at, read_at} = item,
                    profile_picture = notifier?.profile_picture;

                return {
                    img: !_.isEmpty(profile_picture) ? profile_picture.path : '',
                    id: id,
                    name: data.name,
                    title: data.message,
                    description: '',
                    time: dateTimeFunc.getTimeFromDateTime(created_at, timeFormat),
                    date: dateTimeFunc.getDateFromNow(created_at, dateFormat),
                    status: read_at == null ? Vue.prototype.$t('new') : Vue.prototype.$t('old'),
                    url: ''
                }
            });
            state.notificationList['total_unread'] = notifications.filter(notification => {

                return notification.status == null;
            }).length;
        },
    },

    actions: {
        getUser({commit, rootState}) {
            axiosGet(actions.LOGIN_USER).then(res => {
                const obj = {
                    user: res.data,
                    rootState
                };
                commit('GET_USER', obj);
            });
        },
        addUser({commit, state}, user) {
            commit('SET_USERS', state.users.concat([user]));
        },
        getNotifications({commit, rootState}, nextPage = actions.NOTIFICATIONS) {
            const url = nextPage === actions.NOTIFICATIONS ? `${urlGenerator(nextPage)}?per_page=4&unread=1` : `${nextPage}&per_page=4&unread=1`;
            axios.get(url).then(({data}) => {
                let obj = {
                    notifications: data.data,
                    rootState
                };
                commit('GET_NOTIFICATIONS', obj);
            })
        },
        getUsers({commit, state}, payload = {}) {
            const url = payload.users ? `${actions.GET_USERS}?existing=${payload.users}` : actions.GET_USERS;
            axiosGet(url).then(({data}) => {
                commit('SET_USERS', data)
            });
        },
    }
}

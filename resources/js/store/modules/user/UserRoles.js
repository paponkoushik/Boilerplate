import {axiosGet} from '../../../app/Helpers/AxiosHelper';

export default {

    state: {

        permissionList:{},
        roles: {
            tableId: 'roles-table',
            addEditModalId: 'roles-add-edit-modal',
            isAddEditModalActive: false,
            addEditModalTitle: 'role'
        },
        users: {
            tableId: 'users-table',
            userModalId: 'user-modal',
            isUserModalActive: false,
            inviteModalId: 'user-invitation-modal',
            isInviteModalActive: false,
            isManageUsersModalActive: false,
            manageUserModalId: 'manage-users-modal'
        },
        rowData : {}

    },

    // getters: {
    // },

    actions: {
        getPermissions({commit}){
            const url = '/admin/auth/permissions';
            axiosGet(url).then( res => {
                commit('GET_PERMISSIONS',res.data);
            });
        },

        operateRoles({commit}, obj){
            commit('OPERATE_ROTES',obj);
        },
        operationForManageUser({commit}, isActive){

            commit('OPERATION_FOR_MANAGE_USER',isActive);
        },
        operationForUserInvitation({commit}, isActive){
            commit('OPERATION_FOR_USER_INVITATION',isActive);
        },
        openUserModal({commit}, isActive){
            commit('OPEN_USER_MODAL',isActive);
        },

        setRowData({commit}, data){
            commit('SET_ROWDATA', data);
        }

    },

    mutations: {
        GET_PERMISSIONS(state, permissions) {
            state.permissionList = permissions;
        },
        OPERATE_ROTES(state, obj){
            state.roles.isAddEditModalActive = obj.isActive;
            state.roles.addEditModalTitle = obj.title;
        },
        OPERATION_FOR_MANAGE_USER(state, isActive){
            state.users.isManageUsersModalActive = isActive;
        },
        OPERATION_FOR_USER_INVITATION(state, isActive){
            state.users.isInviteModalActive = isActive;
        },
        OPEN_USER_MODAL(state, isActive){
            state.users.isUserModalActive = isActive;
        },
        SET_ROWDATA(state, data){
            state.rowData = data;
        }
    }
}

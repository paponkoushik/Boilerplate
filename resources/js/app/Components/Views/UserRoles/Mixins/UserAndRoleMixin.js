import { mapState } from 'vuex';
export const UserAndRoleMixin = {
    computed: {
        ...mapState({
            userAndRoles : state => state.userAndRoles
        })

    },
    methods: {
        reLoadTable(){
            this.$hub.$emit('reload-' + this.userAndRoles.roles.tableId);
            this.$hub.$emit('reload-' + this.userAndRoles.users.tableId);
            this.$store.dispatch('getNotifications');
        }
    },
}

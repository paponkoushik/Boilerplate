import {mapGetters, mapState} from 'vuex';
export const UserMixin = {
    data(){
        return{
            componentLoader: true,
        }
    },
    computed: {
        ...mapState({
            user : state => state.user
        }),
        ...mapGetters([
            'notificationList'
        ]),
        userInfo() {
            return this.user.loggedInUser;
        },
    },

    watch: {
        userInfo: function (value) {
            this.componentLoader = false;
        }
    },
    mounted() {
        if(!_.isEmpty(this.userInfo))
            this.componentLoader = false;
    },
}

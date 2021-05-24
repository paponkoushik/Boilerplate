import { mapState, mapGetters } from 'vuex';
export const SettingsStoreMixin = {
    computed: {
        ...mapState({
            settings : state => state.settings
        }),
        ...mapGetters([
            'appSettings'
        ])
    },
}

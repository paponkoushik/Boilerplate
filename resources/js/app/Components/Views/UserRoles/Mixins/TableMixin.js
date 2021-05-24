import AppLibrary from "../../../../Helpers/AppLibrary";
export const TableMixin = {
    extends: AppLibrary,
    props: {
        data: {
            default: null
        }
    },
    data(){
        return{
            search: '',
        }
    },
    methods: {
        getSearchValue(value) {
            this.search = value;
            setTimeout( () => {
                this.$hub.$emit('reload-' + this.data.tableId);
            });
        },
        action(rowData, actionObj,active) {
            this.$emit('action', rowData, actionObj, active);
         },
    }
};

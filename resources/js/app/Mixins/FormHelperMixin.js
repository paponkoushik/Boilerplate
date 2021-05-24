import {FormMixin} from '../../core/mixins/form/FormMixin';
export const FormHelperMixin = {
    mixins: [FormMixin],
    data() {
        return {
            preloader:false,
        }
    },
    methods: {
        beforeSubmit(){
            this.preloader = true;
        },
        afterSuccess(res) {
            this.$toastr.s(res.data.message);
        },
        afterError(res) {
            this.$toastr.e(res.data.message);
        },
    },

}
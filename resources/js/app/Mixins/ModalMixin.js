export const ModalMixin = {
    props: {
        data: {
            default: null
        }
    },
    data() {
        return {
            preloader: false,
        }
    },
    methods: {
        closeModal() {
            this.$emit('close-modal');
        },
        beforeSubmit() {
            this.preloader = true;
        },
        afterError(res) {
            this.$toastr.e(res.data.message);
        },
        afterFinalResponse() {
            this.preloader = false;
            this.closeModal();
        }
    }
};

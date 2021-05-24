<template>
    <modal :modal-id="modalId"
                     :title="(this.selectedUrl ? $t('edit') : $t('add'))+' '+ $t('task')"
                     :preloader="preloader"
                     @submit="submit"
                     @close-modal="closeModal">
        <template slot="body">
            <app-overlay-loader v-if="preloader"/>
            <form class="mb-0" ref="form"
                  :class="{'loading-opacity': preloader}"
                  :data-url='selectedUrl ? selectedUrl : `tasks`'>
                <div class="form-group row align-items-center">
                    <label for="title" class="col-sm-3">
                        {{ $t('title') }}
                    </label>
                    <app-input id="title"
                               class="col-sm-9"
                               type="text"
                               v-model="formData.title"
                               :placeholder="$t('enter_title')"
                               :required="true"/>
                </div>
            </form>
        </template>
    </modal>
</template>

<script>
import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";

export default {
    name: "TaskAddEditModal",
    mixins: [FormMixin],
    props: {
        stageId: {},
        modalId: {
            type: String,
            default: 'kanban-view-add-edit-Modal'
        }
    },
    data() {
        return {
            preloader: false,
            formData: {}
        }
    },
    created(){
        if(this.selectedUrl)
            this.preloader = true;
    },
    methods: {
        afterSuccessFromGetEditData(res) {
            this.formData = res.data;
            this.preloader = false;
        },
        beforeSubmit() {
            this.preloader = true;
        },
        submit() {
            if (!this.selectedUrl)
                this.formData.stage_id = this.stageId;
            this.save(this.formData);
        },
        afterSuccess(res) {
            this.preloader = false;
            this.hideModal();
            this.$toastr.s(res.data.message);
            this.$emit('afterSubmitDone');
        },
        afterError(){
            this.preloader = false;
            this.closeModal();
        },
        hideModal() {
            $('#' + this.modalId).modal('hide');
        },
        closeModal() {
            this.hideModal();
            this.$emit('close-modal')
        }
    }
}
</script>

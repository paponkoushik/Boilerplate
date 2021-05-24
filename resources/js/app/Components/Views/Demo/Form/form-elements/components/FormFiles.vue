<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('files_upload') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-10">
                    <app-note :title="$t('note')" :notes="$t('note_for_file_upload')"/>
                </div>
            </div>
            <form ref="form" data-url="/form/files" class="mb-0 mt-primary" :class="{'loading-opacity': preloader}">
                <div class="form-group mb-primary row align-items-center">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('default_upload') }}
                    </label>
                    <div class="col-sm-8 default-file">
                        <app-input type="file"
                                   :label="$t('upload_your_file')"
                                   v-model="inputs.default_file"/>
                        <small class="text-muted font-italic">
                            {{ $t('recommended_default_file_validation') }}
                        </small>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('upload_with_preview') }}
                    </label>
                    <div class="col-sm-8">
                        <app-input type="custom-file-upload"
                                   :label="$t('upload_your_file')"
                                   v-model="inputs.custom_file"/>
                        <small class="text-muted font-italic">
                            {{ $t('recommended_custom_file_validation') }}
                        </small>
                    </div>
                </div>
                <div class="mt-5 action-buttons">
                    <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
                        {{ $t('upload') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import {FormMixin} from '../../../../../../../core/mixins/form/FormMixin.js';

    export default {
        name: "FormFiles",
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                inputs: {},
            }
        },

        methods: {
            beforeSubmit(){
                this.preloader = true;
            },
            submit() {
                let formData = new FormData();
                if (this.inputs.custom_file) {
                    formData.append("custom_file", this.inputs.custom_file);
                }
                if (this.inputs.default_file) {
                    formData.append("default_file", this.inputs.default_file);
                }
                this.save(formData);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.inputs = {};
            },
            afterError({data, status}) {
                if(status === 422)
                    this.$toastr.e(Object.values(data.errors)[0][0])
                else this.$toastr.e(data.message);
            }
        }
    }
</script>

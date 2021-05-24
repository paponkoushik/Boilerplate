<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('multiple_files_upload') }}</h5>
        </div>

        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/multiple-files" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row mb-0">
                    <label class="col-sm-2">
                        {{ $t('dropzone') }}
                    </label>
                    <div class="col-sm-8">
                        <app-input type="dropzone"
                                   v-model="dropzone_files"/>
                        <small class="text-muted font-italic">
                            {{ $t('recommended_dropzone_file_validation') }}
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
                dropzone_files: [],
            }
        },

        methods: {
            beforeSubmit(){
                this.preloader = true;
            },
            submit() {
                let formData = new FormData();
                if (this.dropzone_files.length) {
                    this.dropzone_files.forEach(dropzone_file => formData.append(`dropzone_file[]`, dropzone_file));
                }
                this.save(formData);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
                this.dropzone_files = null
            },
            afterFinalResponse() {
                this.preloader = false;
            },
            afterError({data, status}) {
                if(status === 422)
                    this.$toastr.e(this.$t('file_size_limit_exceeded'));
                else this.$toastr.e(data.message);
            }
        }
    }
</script>

<template>
    <div class="card card-with-shadow border-0">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('range_validation') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/range-validation" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('min_length') }}</label>
                    <div class="col-md-8">
                        <app-input type="text"
                                   v-model="inputs.min_range"
                                   :placeholder="$t('min_chars')"
                                   :min-length=6
                                   :required="true"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('max_length') }}</label>
                    <div class="col-md-8">
                        <app-input type="text"
                                   v-model="inputs.max_range"
                                   :placeholder="$t('max_chars')"
                                   :max-length=6
                                   :required="true"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('range_length') }}</label>
                    <div class="col-md-8">
                        <app-input type="text"
                                   v-model="inputs.length"
                                   :placeholder="$t('range_length_placeholder')"
                                   :min-length="5"
                                   :max-length="10"
                                   :required="true"/>
                    </div>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-md-2 mb-md-0">{{ $t('alphanumeric') }}</label>
                    <div class="col-md-8">
                        <app-input type="text"
                                   v-model="inputs.alphanumaric"
                                   :placeholder="$t('must_be_alphanumaric')"
                                   :alphanumeric="true"
                                   :required="true"/>
                    </div>
                </div>
                <div class="mt-5 action-buttons">
                    <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
                        {{ $t('submit') }}
                    </button>
                    <button type="submit" class="btn btn-secondary" @click.prevent="clear">
                        {{ $t('clear') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    import {FormMixin} from '../../../../../../../core/mixins/form/FormMixin.js';

    export default {
        name: "FormRangeValidation",
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
                this.save(this.inputs);
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.inputs = {};
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {};
                this.fieldStatus = {
                    isSubmit: false
                }
            }
        }
    }
</script>

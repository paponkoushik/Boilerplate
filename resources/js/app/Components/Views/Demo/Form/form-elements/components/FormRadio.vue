<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('checkbox_and_radios') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/radio" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label class="col-sm-2">
                        {{ $t('radio') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="radio"
                               :list="list"
                               v-model="inputs.radio"/>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-sm-2 pt-2">
                        {{ $t('radio_buttons') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="radio-buttons"
                               :list="list"
                               v-model="inputs.radio_buttons_group"/>
                </div>
                <div class="form-group row mb-0">
                    <label class="col-sm-2">
                        {{ $t('checkboxes') }}
                    </label>
                    <div class="col-sm-8">
                        <app-input type="checkbox"
                                   :list="list"
                                   v-model="inputs.checkbox"/>
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
        name: "FormRadioFields",
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                inputs: {
                    radio: 'Beginner',
                    radio_buttons_group: 'Beginner',
                    checkbox: ''
                },
                list: [
                    {
                        id: 'Beginner',
                        value: 'Beginner'
                    },
                    {
                        id: 'Intermediate',
                        value: 'Intermediate'
                    },
                    {
                        id: 'Professional',
                        value: 'Professional'
                    },
                    {
                        id: 'Master',
                        value: 'Master'
                    }
                ],
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
                this.inputs = {
                    radio: 'Beginner',
                    radio_buttons_group: 'Beginner',
                    checkbox: ''
                };
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {
                    radio: 'Beginner',
                    radio_buttons_group: 'Beginner',
                    checkbox: ''
                };
            }
        }
    }
</script>

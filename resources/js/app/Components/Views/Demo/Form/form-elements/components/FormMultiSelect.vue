<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('select_and_multi_select') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" id="form3" data-url="/form/multi-select" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('default_select') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="select"
                               v-model="inputs.select"
                               :list="listForSelect"
                               :placeholder="$t('readonly_input')"/>
                </div>
                <div class="form-group form row">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('multi_select') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="multi-select"
                               :list="list"
                               :isAnimatedDropdown="true"
                               v-model="multiSelect"/>
                </div>
                <div class="form-group row align-items-center">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('search_and_select') }}
                    </label>
                    <app-input class="col-sm-8"
                               :placeholder="$t('search_and_select')"
                               type="search-select"
                               :list="list"
                               v-model="inputs.smart_select"/>
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
        name: "FormMultiSelect",
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                inputs: {
                    select: '',
                    smart_select: null,
                },
                multiSelect: [],
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
                listForSelect: [
                    {
                        id: '',
                        value: 'Choose One'
                    },
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
                this.inputs.multi_select = this.multiSelect;
                this.save(this.inputs);
            },
            afterFinalResponse() {
                this.preloader = false;
                this.inputs = {
                    select: '',
                    smart_select: null,
                };
                this.multiSelect = [];
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {
                    select: '',
                    smart_select: null,
                };
                this.multiSelect = [];
            }
        }
    }
</script>

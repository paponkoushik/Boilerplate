<template>
    <div class="col-12 mb-primary">
        <div class="card card-with-shadow border-0 h-100">
            <div class="card-header p-primary bg-transparent">
                <h5 class="card-title m-0">{{ $t('horizontal_form') }}</h5>
            </div>
            <app-overlay-loader v-if="preloader"/>
            <div class="card-body">
                <form ref="form" data-url="/crud" class="mb-0" :class="{'loading-opacity': preloader}">
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('name') }}
                        </label>
                        <app-input class="col-md-8"
                                   type="text"
                                   v-model="inputs.name"
                                   :required="true"
                                   :placeholder="$t('type_name')"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('email') }}
                        </label>
                        <app-input class="col-md-8"
                                   type="email"
                                   v-model="inputs.email"
                                   :required="true"
                                   :placeholder="$t('type_your_email')"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('contact_number') }}
                        </label>
                        <app-input class="col-md-8"
                                   type="tel-input"
                                   v-model="inputs.phone"
                                   :placeholder="$t('type_contact_number')"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('age') }}
                        </label>
                        <app-input class="col-md-8"
                                   type="number"
                                   v-model="inputs.age"
                                   :max-number="100"
                                   :placeholder="$t('type_age')"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('status') }}
                        </label>
                        <app-input class="col-md-8"
                                   type="select"
                                   v-model="inputs.status"
                                   :required="true"
                                   :list="statusLists"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-md-2 mb-md-0">
                            {{ $t('gender') }}
                        </label>
                            <app-input class="col-md-8 mt-2 pt-1"
                                       type="radio"
                                       :list="genderLists"
                                       v-model="inputs.gender"
                                       :required="true"/>
                    </div>
                    <div class="mt-5 action-buttons">
                        <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
                            {{ $t('submit')}}
                        </button>
                        <button type="submit" class="btn btn-secondary" @click.prevent="clear">
                            {{ $t('clear') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {FormMixin} from '../../../../../../../core/mixins/form/FormMixin.js';

    export default {
        name: "HorizontalForm",
        mixins: [FormMixin],
        data() {
            return {
                preloader: false,
                inputs: {
                    gender: 'male',
                },
                statusLists: [
                    {id: '', value: "Choose One",},
                    {id: 'active', value: "Active",},
                    {id: 'inactive', value: "Inactive",},
                    {id: 'invited', value: "Invite",},
                ],
                genderLists: [
                    {id: 'male', value: "Male"},
                    {id: 'female', value: "Female"},
                    {id: 'other', value: "Other"},
                ]
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
                    gender: 'male',
                };
            },
            afterError(res) {
                this.$toastr.e(res.data.message);
            },
            clear() {
                this.inputs = {
                    gender: 'male',
                };
                this.fieldStatus = {
                    isSubmit: false
                }
            },
        }
    }
</script>

<template>
    <div class="col-12 mb-primary">
        <div class="card card-with-shadow border-0 h-100">
            <div class="card-header p-primary bg-transparent">
                <h5 class="card-title m-0">{{ $t('Form_row') }}</h5>
            </div>
            <app-overlay-loader v-if="preloader"/>
            <div class="card-body">
                <app-note class="mb-primary" :title="'Note'" content-type="html" :notes="formRowInstruction"/>
                <form ref="form" data-url="/crud" class="mb-0" :class="{'loading-opacity': preloader}">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ $t('name') }}</label>
                                <app-input type="text"
                                           v-model="inputs.name"
                                           :required="true"
                                           :placeholder="$t('type_name')"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ $t('email') }}</label>
                                <app-input type="email"
                                           v-model="inputs.email"
                                           :required="true"
                                           :placeholder="$t('type_your_email')"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ $t('contact_number') }}</label>
                                <app-input type="tel-input"
                                           v-model="inputs.phone"
                                           :placeholder="$t('type_test_number')"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{ $t('age') }}</label>
                                <app-input type="number"
                                           v-model="inputs.age"
                                           :max-number="100"
                                           :placeholder="$t('type_age')"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group mb-2 mb-md-0">
                                <label>{{ $t('status') }}</label>
                                <app-input type="select"
                                           v-model="inputs.status"
                                           :required="true"
                                           :list="statusLists"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>{{ $t('gender') }}</label>
                                <app-input class="mt-2 pt-1"
                                           type="radio"
                                           :list="genderLists"
                                           v-model="inputs.gender"
                                           :required="true"/>
                            </div>
                        </div>
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
        name: "FormRow",
        mixins: [FormMixin],
        data() {
            return {
                formRowInstruction: [this.$t('form_row_note')],
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

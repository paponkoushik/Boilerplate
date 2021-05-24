<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('checkboxes_and_radios')" :directory="$t('ui_elements')" :icon="'trello'"/>
        <div class="card card-with-shadow border-0">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('radios') }}</h5>
                <!--copy button-->
                <copy-button id="ui-radios" :value="uiRadiosValue"/>
            </div>
            <div class="card-body">
                <form ref="form" data-url="">
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('gender') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listGender"
                                   v-model="radioInputs.gender"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('job_area') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listJobPost"
                                   v-model="radioInputs.selectedPost"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('expertise_level') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listLevel"
                                   v-model="radioInputs.ExpertLevel"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('radio_button') }}</h5>
                <!--copy button-->
                <copy-button id="ui-radio-button" :value="uiRadioButtonValue"/>
            </div>
            <div class="card-body">
                <form ref="form" data-url="">
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('gender') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listGender"
                                   v-model="radioBtnInputs.gender"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('job_area') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listJobPost"
                                   v-model="radioBtnInputs.selectedPost"/>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-sm-3 mb-sm-0">
                            {{ $t('expertise_level') }}
                        </label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listLevel"
                                   v-model="radioBtnInputs.ExpertLevel"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="card card-with-shadow border-0 mt-4">
            <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">{{ $t('check_boxes') }}</h5>
                <!--copy button-->
                <copy-button id="ui-checkboxes" :value="uiCheckboxesValue"/>
            </div>
            <div class="card-body">
                <form ref="form" data-url="">
                    <div class="form-group row">
                        <label class="col-sm-3">
                            {{ $t('frontend_skills') }}
                        </label>
                        <div class="col-sm-9">
                            <app-input type="checkbox"
                                       :required="true"
                                       :list="listFrontendSkill"
                                       v-model="checkboxInputs.frontend"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">
                            {{ $t('backend_skills') }}
                        </label>
                        <div class="col-sm-9">
                            <app-input type="checkbox"
                                       :required="true"
                                       :list="listBackendSkills"
                                       v-model="checkboxInputs.backend"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">
                            {{ $t('job_area') }}
                        </label>
                        <div class="col-sm-9">
                            <app-input type="checkbox"
                                       :required="true"
                                       :list="listLevel"
                                       v-model="checkboxInputs.ExpertLevel"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {FormMixin} from '../../../../../../core/mixins/form/FormMixin.js';
    import CopyButton from "../CopyButton";
    import {CheckboxRadioMixins} from "./CheckboxRadioMixins";

    export default {
        name: "CheckboxesRadios",
        components:{CopyButton},
        mixins: [FormMixin,CheckboxRadioMixins],
        data() {
            return {
                radioInputs: {
                    gender: 'Male',
                    selectedPost: 'Frontend',
                    ExpertLevel: 'Professional'
                },
                radioBtnInputs: {
                    gender: 'Male',
                    selectedPost: 'Frontend',
                    ExpertLevel: 'Professional'
                },
                checkboxInputs:{
                    ExpertLevel: [],
                    frontend:[],
                    backend:[]
                },
                listGender: [
                    {
                        id: 'Male',
                        value: 'Male'
                    },
                    {
                        id: 'Female',
                        value: 'Female'
                    }
                ],
                listJobPost: [
                    {
                        id: 'UI-Design',
                        value: 'UI-Design'
                    },
                    {
                        id: 'Frontend',
                        value: 'Frontend'
                    },
                    {
                        id: 'Backend',
                        value: 'Backend'
                    }
                ],
                listFrontendSkill:[
                    {
                        id: 'HTML',
                        value: 'HTML'
                    },
                    {
                        id: 'CSS',
                        value: 'CSS'
                    },
                    {
                        id: 'Bootstrap',
                        value: 'Bootstrap'
                    },
                    {
                        id: 'JavaScript',
                        value: 'JavaScript'
                    },
                    {
                        id: 'Vue js',
                        value: 'Vue js'
                    }
                ],
                listBackendSkills: [
                    {
                        id: 'PHP',
                        value: 'PHP'
                    },
                    {
                        id: 'Node js',
                        value: 'Node js'
                    },
                    {
                        id: 'Laravel',
                        value: 'Laravel'
                    },
                ],
                listLevel: [
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
            submit() {
                this.save(this.inputs);
            },
            afterSubmit() {
                console.log('go to Dashboard')
            },
            afterSuccess(res) {
                this.$toastr.s(res.data.message);
            },
            afterError(res) {
                console.log(res);
            },
        }
    }
</script>

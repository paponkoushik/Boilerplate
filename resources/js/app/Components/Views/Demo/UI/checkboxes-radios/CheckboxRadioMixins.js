export const CheckboxRadioMixins = {
    data() {
        return {
            uiRadiosValue: `<form ref="form" data-url="">
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('gender') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listGender"
                                   v-model="radioInputs.gender"/>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('job_area') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listJobPost"
                                   v-model="radioInputs.selectedPost"/>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('expertise_level') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio"
                                   :list="listLevel"
                                   v-model="radioInputs.ExpertLevel"/>
                    </div>
                </form>`,

            uiRadioButtonValue: `<form ref="form" data-url="">
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('gender') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listGender"
                                   v-model="radioBtnInputs.gender"/>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('job_area') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listJobPost"
                                   v-model="radioBtnInputs.selectedPost"/>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3">{{ $t('expertise_level') }}</label>
                        <app-input class="col-sm-9"
                                   type="radio-buttons"
                                   :list="listLevel"
                                   v-model="radioBtnInputs.ExpertLevel"/>
                    </div>
                </form>`,

            uiCheckboxesValue: `<form ref="form" data-url="">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">
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
                        <label class="col-sm-3 col-form-label">
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
                        <label class="col-sm-3 col-form-label">
                            {{ $t('job_area') }}
                        </label>
                        <div class="col-sm-9">
                            <app-input type="checkbox"
                                       :required="true"
                                       :list="listLevel"
                                       v-model="checkboxInputs.ExpertLevel"/>
                        </div>
                    </div>
                </form>`
        }
    }
};

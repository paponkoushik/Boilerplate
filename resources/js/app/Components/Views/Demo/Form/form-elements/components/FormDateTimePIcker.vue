<template>
    <div class="card card-with-shadow border-0 mb-primary">
        <div class="card-header p-primary bg-transparent">
            <h5 class="card-title m-0">{{ $t('date_and_time_picker') }}</h5>
        </div>
        <app-overlay-loader v-if="preloader"/>
        <div class="card-body">
            <form ref="form" data-url="/form/date-picker" class="mb-0" :class="{'loading-opacity': preloader}">
                <div class="form-group row align-items-center">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('datepicker') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="date"
                               v-model="inputs.date_picker"
                               :placeholder="$t('select_valid_date')"/>
                </div>
                <div class="form-group row mb-0 align-items-center">
                    <label class="col-sm-2 mb-sm-0">
                        {{ $t('timepicker') }}
                    </label>
                    <app-input class="col-sm-8"
                               type="time"
                               v-model="inputs.time_picker"
                               :placeholder="$t('select_valid_time')"/>
                </div>
                <div class="mt-5 action-buttons">
                    <button type="submit" class="btn btn-primary mr-2" @click.prevent="submit">
                        {{ $t('submit') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import {FormMixin} from '../../../../../../../core/mixins/form/FormMixin.js';
import AppLibrary from "../../../../../../Helpers/AppLibrary";

export default {
  name: "FormDateTimePicker",
  extends: AppLibrary,
  mixins: [FormMixin],
  data() {
    return {
      preloader: false,
      inputs: {
        date_picker: new Date()
      },
    }
  },
  methods: {
    beforeSubmit() {
      this.preloader = true;
    },
    submit() {
      if (this.inputs.date_picker) this.inputs.date_picker = this.getDateFormatForBackend(this.inputs.date_picker);
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
    },
  }
}
</script>

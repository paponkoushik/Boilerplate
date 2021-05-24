<template>
    <div class="custom-modal shadow d-none">
        <form ref="form" class="mb-0 min-height-100"
              :class="{'loading-opacity':preloader}"
              :data-url="selectedUrl?selectedUrl:'calendars'">
            <app-overlay-loader v-if="preloader"/>
            <div class="form-group">
                <app-input :placeholder="$t('enter_title')"
                           :required="true"
                           v-model="formData.title"/>
            </div>

            <div class="form-group">
                <app-input :placeholder="$t('enter_description')"
                           type="textarea"
                           v-model="formData.description"/>
            </div>

            <div v-if="selectedUrl" class="form-group">
                <app-input type="single-checkbox"
                           :list-value-field="$t('remove')"
                           v-model="deletedCheckbox"/>
            </div>

            <div class="d-flex justify-content-end event-modal-footer">
                <button type="button"
                        class="btn btn-secondary mr-2"
                        data-dismiss="modal"
                        @click.prevent="closeAddEditModal">
                    {{ $t('cancel') }}
                </button>
                <button v-if="deletedCheckbox"
                        type="button"
                        class="btn btn-danger"
                        @click.prevent="doDeleteEvent">
                    {{ $t('remove') }}
                </button>
                <button v-else
                        type="button"
                        class="btn btn-primary"
                        @click.prevent="submitEvents">
                    {{ selectedUrl ? $t('update') : $t('save') }}
                </button>
            </div>
        </form>
    </div>
</template>

<script>
import {FormMixin} from "../../../../../../core/mixins/form/FormMixin";
import AppLibrary from "../../../../../Helpers/AppLibrary";

export default {
    name: "EventAddEditModal",
    mixins: [FormMixin],
    extends: AppLibrary,
    props: ['eventData'],
    data() {
        return {
            preloader: false,
            deletedCheckbox: false,
            formData: {
                title: '',
                description: ''
            },
        }
    },
    watch: {
        eventData: function (value) {
            this.setCustomModalPos(value);
        }
    },
    methods: {
        doDeleteEvent() {
            if (this.deletedCheckbox) {
                this.preloader = true;
                this.axiosDelete(this.selectedUrl)
                    .then((response) => {
                        this.deletedCheckbox = false;
                        this.closeAddEditModal();
                        this.$toastr.s(response.data.message);
                        this.$emit('reloadCalendar');
                    }).catch(err => this.$toastr.e(err.data.message))
                    .finally(() => this.preloader = false);
            }
        },
        closeAddEditModal() {
            document.getElementsByClassName("custom-modal")[0].classList.add("d-none");
        },
        beforeSubmit() {
            this.preloader = true;
        },
        submitEvents() {
            if (!this.selectedUrl) {
                this.formData.start = this.getDateTimeFormatForBackend(this.eventData.start);
                this.formData.end = this.getDateTimeFormatForBackend(this.eventData.end);
            }
            this.save(this.formData);
        },
        afterSuccess(res) {
            this.$toastr.s(res.data.message);
        },
        afterFinalResponse() {
            this.preloader = false;
            this.closeAddEditModal();
            this.$emit('reloadCalendar');
        },
        afterError(res) {
            this.$toastr.e(res.data.message);
        },
        setCustomModalPos(arg) {
            this.deletedCheckbox = false;
            this.fieldStatus = {
                isSubmit: false
            };
            if (this.selectedUrl) {
                this.formData.title = arg.event._def.title;
                this.formData.description = arg.event._def.extendedProps.description;
            } else {
                this.formData.title = '';
                this.formData.description = '';
            }
            let customModalDom = document.getElementsByClassName("custom-modal")[0];
            let posLimit = arg.jsEvent.view.innerWidth / 2;
            customModalDom.classList.remove("d-none");
            //custom modal width
            let w = 510, h = 200;
            if (arg.jsEvent.clientX > posLimit) {
                customModalDom.style.left =
                    (arg.jsEvent.clientX - w) + "px";
            } else {
                customModalDom.style.left = arg.jsEvent.clientX + "px";
            }
            if (arg.jsEvent.clientY > (window.innerHeight - 300)) {
                customModalDom.style.top = (arg.jsEvent.pageY - h) + "px";
            } else {
                customModalDom.style.top = arg.jsEvent.pageY + "px";
            }
        },
    },
}
</script>

<template>
    <modal :modal-id="modalId"
                     :title="modalTitle"
                     :preloader="preloader"
                     @submit="submit"
                     @close-modal="closeModal">
        <template slot="body">
            <app-overlay-loader v-if="preloader"/>
            <form class="mb-0"
                  :class="{'loading-opacity': preloader}"
                  ref="form" :data-url='selectedUrl ? `crud/${inputs.id}` : `crud`'>
                <div class="form-group row align-items-center">
                    <label for="inputs_name" class="col-sm-3 mb-0">
                        {{ $t('name') }}
                    </label>
                    <app-input id="inputs_name"
                               class="col-sm-9"
                               type="text"
                               v-model="inputs.name"
                               :placeholder="$t('text_type_input')"
                               :required="true"/>

                </div>
                <div class="form-group row align-items-center">
                    <label for="inputs_email" class="col-sm-3 mb-0">
                        {{ $t('email') }}
                    </label>
                    <app-input id="inputs_email"
                               class="col-sm-9"
                               type="email"
                               v-model="inputs.email"
                               :placeholder="$t('email_type_input')"
                               :required="true"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="inputs_phone" class="col-sm-3 mb-0">
                        {{ $t('contact_number') }}
                    </label>
                    <app-input id="inputs_phone"
                               class="col-sm-9"
                               type="tel-input"
                               v-model="phone"
                               :placeholder="$t('type_contact_number')"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="inputs_status" class="col-sm-3 mb-0">
                        {{ $t('status') }}
                    </label>
                    <app-input id="inputs_status"
                               class="col-sm-9"
                               type="select"
                               :required="true"
                               v-model="inputs.status"
                               :list="statusLists"/>
                </div>
                <div class="form-group row align-items-center">
                    <label for="inputs_age" class="col-sm-3 mb-0">
                        {{ $t('age') }}
                    </label>
                    <app-input id="inputs_age"
                               class="col-sm-9"
                               type="number"
                               :max-number="100"
                               v-model="inputs.age"
                               :placeholder="$t('type_age')"/>
                </div>
                <div class="form-group row align-items-center mb-0">
                    <label class="col-sm-3 mb-0">
                        {{ $t('gender') }}
                    </label>
                    <app-input class="col-sm-9"
                               type="radio"
                               v-model="inputs.gender"
                               :list="genderLists"/>
                </div>
            </form>
        </template>
    </modal>
</template>

<script>
    import {FormMixin} from '../../../../../../core/mixins/form/FormMixin.js';
    import {ModalMixin} from "../../../../../Mixins/ModalMixin";

    export default {
        name: "AddModal",
        mixins: [FormMixin, ModalMixin],
        props: {
            tableId: String
        },
        data() {
            return {
                preloader: false,
                inputs: {
                    gender: 'male',
                },
                phone: '',
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
                ],
                modalId: 'demo-add-edit-Modal',
                modalTitle: this.$t('add'),
            }
        },
        created() {
            if (this.selectedUrl) {
                this.modalTitle = this.$t('edit');
                this.preloader = true;
            }
        },
        methods: {
            submit() {
                this.inputs.phone = this.phone;
                this.save(this.inputs);
            },
            afterSuccess(response) {
                this.$toastr.s(response.data.message);
                this.$hub.$emit('reload-' + this.tableId);
            },

            afterSuccessFromGetEditData(response) {
                if (response.data.phone) this.phone = response.data.phone;
                this.inputs = response.data;
                this.preloader = false;
            },
        },
    }
</script>

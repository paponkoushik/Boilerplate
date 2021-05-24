<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('form_elements')" :directory="$t('forms_and_fields')" :icon="'sidebar'"/>

        <form-input-fields></form-input-fields>

        <form-radio-fields></form-radio-fields>

        <form-multi-select-fields></form-multi-select-fields>

        <form-date-time-fields></form-date-time-fields>

        <form-files-fields></form-files-fields>

        <multiple-form-files-fields></multiple-form-files-fields>
    </div>
</template>
<script>
    import {FormMixin} from '../../../../../../core/mixins/form/FormMixin.js';

    export default {
        name: "FormInputs",
        mixins: [FormMixin],
        data() {
            return {

            }
        },
    }
</script>


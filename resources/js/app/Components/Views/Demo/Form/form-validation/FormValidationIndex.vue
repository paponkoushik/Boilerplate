<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('form_validations')" :directory="$t('forms_and_fields')" :icon="'sidebar'"/>

        <form-validation-required class="mb-primary"/>
        <form-validation-range/>
    </div>
</template>
<script>
    import {FormMixin} from '../../../../../../core/mixins/form/FormMixin.js';
    export default {
        name: "FormLayouts",
        mixins: [FormMixin],
        data() {
            return {

            }
        },
    }
</script>

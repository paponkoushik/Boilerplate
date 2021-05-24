<template>
    <div class="content-wrapper">
        <app-breadcrumb :page-title="$t('form_layouts')" :directory="$t('forms_and_fields')" :icon="'sidebar'"/>

        <div class="row">
            <form-grid/>
            <form-row/>
            <form-horizontal/>
        </div>
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

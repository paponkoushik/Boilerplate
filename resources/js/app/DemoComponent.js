import Vue from 'vue'

Vue.component('dashboard-default', require('./Components/Views/Demo/Dashboard/Default').default);
Vue.component('dashboard-academy', require('./Components/Views/Demo/Dashboard/Academy').default);
Vue.component('dashboard-ecommerce', require('./Components/Views/Demo/Dashboard/ECommerce').default);
Vue.component('dashboard-hospital', require('./Components/Views/Demo/Dashboard/Hospital').default);
Vue.component('dashboard-hrm', require('./Components/Views/Demo/Dashboard/HRM').default);


// Forms
Vue.component('form-layouts', require('./Components/Views/Demo/Form/form-layouts/FormLayouts').default);
Vue.component('form-grid', require('./Components/Views/Demo/Form/form-layouts/components/FormGrid').default);
Vue.component('form-row', require('./Components/Views/Demo/Form/form-layouts/components/FormRow').default);
Vue.component('form-horizontal', require('./Components/Views/Demo/Form/form-layouts/components/HorizontalForm').default);
Vue.component('form-validation', require('./Components/Views/Demo/Form/form-validation/FormValidationIndex').default);
Vue.component('form-validation-required', require('./Components/Views/Demo/Form/form-validation/component/FormValidationRequired').default);
Vue.component('form-validation-range', require('./Components/Views/Demo/Form/form-validation/component/FormRangeValidation').default);
Vue.component('input-text', require('./Components/Views/Demo/Form/InputText').default);


// All input forms
Vue.component('all-form-inputs', require('./Components/Views/Demo/Form/form-elements/FormElements').default);
Vue.component('form-input-fields', require('./Components/Views/Demo/Form/form-elements/components/FormInput').default);
Vue.component('form-date-time-fields', require('./Components/Views/Demo/Form/form-elements/components/FormDateTimePIcker').default);
Vue.component('form-multi-select-fields', require('./Components/Views/Demo/Form/form-elements/components/FormMultiSelect').default);
Vue.component('form-radio-fields', require('./Components/Views/Demo/Form/form-elements/components/FormRadio').default);
Vue.component('form-files-fields', require('./Components/Views/Demo/Form/form-elements/components/FormFiles').default);
Vue.component('multiple-form-files-fields', require('./Components/Views/Demo/Form/form-elements/components/FormMultipleFiles').default);

// Tables
Vue.component('basic-datatable', require('./Components/Views/Demo/Tables/basic-datatable/Index').default);
Vue.component('advance-datatable', require('./Components/Views/Demo/Tables/AdvanceDatatable').default);
Vue.component('responsive-datatable', require('./Components/Views/Demo/Tables/ResponsiveDatatable').default);
Vue.component('datatable-with-filter', require('./Components/Views/Demo/Tables/filter-type-datatable/Index').default);
Vue.component('datatable-pagination', require('./Components/Views/Demo/Tables/datatable-pagination/Index').default);
Vue.component('grid-view-table', require('./Components/Views/Demo/Tables/grid-view/Index').default);
Vue.component('grid-view', require('./Components/Views/Demo/Tables/grid-view/GridView').default);
Vue.component('profile-card', require('./Components/Views/Demo/Tables/grid-view/ProfileCard').default);


// UI Features
Vue.component('icons', require('./Components/Views/Demo/UI/icons/Index').default);
Vue.component('app-modals', require('./Components/Views/Demo/UI/modals/Modals').default);
Vue.component('buttons', require('./Components/Views/Demo/UI/buttons/Buttons').default);
Vue.component('avatars', require('./Components/Views/Demo/UI/avatars/Avatars').default);
Vue.component('badges', require('./Components/Views/Demo/UI/badges/Badges').default);
Vue.component('error-notes', require('./Components/Views/Demo/UI/error-notes/ErrorNotes').default);
Vue.component('checkboxes-radios', require('./Components/Views/Demo/UI/checkboxes-radios/CheckboxesRadios').default);
Vue.component('cards', require('./Components/Views/Demo/UI/cards/Cards').default);
Vue.component('tabs', require('./Components/Views/Demo/UI/tabs/Tabs').default);
Vue.component('tab-setting', require('./Components/Views/Demo/UI/tabs/components/TabSetting').default);
Vue.component('nothing-to-show', require('./Components/Views/Demo/UI/nothing-to-show/NothingToShow').default);


// Sample Pages
Vue.component('blank-page', require('./Components/Views/Demo/Pages/Blank').default);
Vue.component('calendar-view', require('./Components/Views/Demo/Pages/calendar-view/CalendarView').default);
Vue.component('event-add-edit-modal', require('./Components/Views/Demo/Pages/calendar-view/EventAddEditModal').default);
Vue.component('report', require('./Components/Views/Demo/Pages/Report').default);
Vue.component('kanban-view', require('./Components/Views/Demo/Pages/kanban-view/KanbanView').default);
Vue.component('task-add-edit-modal', require('./Components/Views/Demo/Pages/kanban-view/TaskAddEditModal').default);


// Demo Crud
Vue.component('app-demo-crud', require('./Components/Views/Demo/Tables/demo-crud/Index').default);
Vue.component('app-add-modal', require('./Components/Views/Demo/Tables/demo-crud/AddModal').default);
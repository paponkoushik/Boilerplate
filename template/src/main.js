import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import jQuery from "jquery";

global.jQuery = jQuery;
global.$ = jQuery;

import Dropzone2 from '../node_modules/dropzone/dist/dropzone.css'
window.dropzone = Dropzone2;

// Summernote Configeration...
import '../node_modules/summernote/dist/summernote-bs4.min'
import '../node_modules/summernote/dist/summernote-bs4.min.css'


import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';

require('bootstrap');
import "bootstrap/dist/css/bootstrap.min.css";

require('../../resources/sass/core/core.css');

let moment = require('moment');
moment().format();
import VueDateRangePicker from 'vue-rangedate-picker'
Vue.use(VueDateRangePicker);


import noUiSlider from 'nouislider/distribute/nouislider.min';
global.noUiSlider = noUiSlider;

import VCalendar from 'v-calendar';
Vue.use(VCalendar, {
    componentPrefix: 'vc',
});

Vue.config.productionTip = false;

/*Components*/
import Icon from './components/Icon/Icon';
import Navbar from './components/Layouts/Navbar';
import Sidebar from './components/Layouts/Sidebar';
import Breadcrumb from './components/Breadcrumb';
import ChipsInput from './components/Forms/ChipsInput';
import Dropzone from './components/Forms/Dropzone';
import CustomImageUpload from './components/Forms/CustomImageUpload';
import FormWizard from './components/Forms/FormWizard';
import TimePickerInput from './components/Forms/TimePickerInput';
import DatePickerInput from './components/Forms/DatePickerInput';
import Editor from './components/Forms/Editor';
import OptionsDropdownButton from "./components/Buttons/OptionsDropdownButton";
import DefaultLoadingButton from "./components/Buttons/DefaultLoadingButton";
import SpinnerBounceLoader from "./components/Loaders/SpinnerBounceLoader";
import OverlayLoader from "./components/Loaders/FullContainerOverlayLoader";
import ColumnFilter from "./components/Filters/TableColumnFilter";
import DateRangePicker from "./components/Filters/DateRangePicker";
import CheckboxFilter from "./components/Filters/CheckboxFilter";
import RadioFilter from "./components/Filters/RadioFilter";
import RangeFilter from "./components/Filters/RangeFilter";
import DropdownSearchSelect from "./components/Filters/DropdownSearchSelect";
import SearchFilter from "./components/Filters/SearchFilter";
import VerticalTab from "./components/Tabs/VerticalTab";
import HorizontalTab from "./components/Tabs/HorizontalTab";
import NoDataFound from "./components/Datatable/NoDataFound";
import DropdownMenuFilter from "./components/Filters/DropdownMenuFilter";

Vue.component('Icon', Icon);
Vue.component('Navbar', Navbar);
Vue.component('Sidebar', Sidebar);
Vue.component('Breadcrumb', Breadcrumb);
Vue.component('ChipsInput', ChipsInput);
Vue.component('Dropzone', Dropzone);
Vue.component('CustomImageUpload', CustomImageUpload);
Vue.component('FormWizard', FormWizard);
Vue.component('TimePickerInput', TimePickerInput);
Vue.component('DatePickerInput', DatePickerInput);
Vue.component('Editor', Editor);
Vue.component('OptionsDropdownButton', OptionsDropdownButton);
Vue.component('DefaultLoadingButton', DefaultLoadingButton);
Vue.component('SpinnerBounceLoader', SpinnerBounceLoader);
Vue.component('OverlayLoader', OverlayLoader);
Vue.component('ColumnFilter', ColumnFilter);
Vue.component('DateRangePicker', DateRangePicker);
Vue.component('CheckboxFilter', CheckboxFilter);
Vue.component('RadioFilter', RadioFilter);
Vue.component('RangeFilter', RangeFilter);
Vue.component('DropdownSearchSelect', DropdownSearchSelect);
Vue.component('SearchFilter', SearchFilter);
Vue.component('VerticalTab', VerticalTab);
Vue.component('HorizontalTab', HorizontalTab);
Vue.component('NoDataFound', NoDataFound);
Vue.component('DropdownMenuFilter', DropdownMenuFilter);


new Vue({
    router,
    render: h => h(App)
}).$mount("#app");

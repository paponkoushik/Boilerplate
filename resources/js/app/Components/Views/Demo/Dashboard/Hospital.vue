<template>
    <div class="position-relative">
        <div v-if="countCreatedResponse<3" class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center dashboard-preloader justify-content-center">
                <span class="bounce1 mr-1"/>
                <span class="bounce2 mr-1"/>
                <span class="bounce3 mr-1"/>
                <span class="bounce4"/>
            </div>
        </div>

        <div class="content-wrapper">
            <app-breadcrumb :page-title="$t('hospital')" :directory="$t('dashboard')" :icon="'pie-chart'"/>

            <app-overlay-loader v-if="!isActivedDefaultInfo && !mainPreloader"/>
            <div class="row" v-if="isActivedDefaultInfo" >
                <div class="col-12 col-sm-6 col-xl-3" v-for="(item, index) in hospital.defaultData" :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-with-icon'"
                                :label="item.label"
                                :number="numberFormat(item.number)"
                                :icon="item.icon"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-9 mb-primary">
                    <app-overlay-loader v-if="!isActiveHospitalActivity && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveHospitalActivity">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('hospital_activity') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in hospital.hospitalActivities.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[value == item.id ? 'active' : index === 0 && value === '' ? 'active': '']"
                                       @click.prevent="getFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="line-chart"
                                       :height="270"
                                       :labels="hospital.hospitalActivities.labels"
                                       :data-sets="hospital.hospitalActivities.chartData"/>
                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: rgb(240, 84, 84);">
                                    <span class="square" style="background-color: rgb(240, 84, 84);"/>
                                    {{ $t('consultation') }}
                                    <span class="value">{{ hospital.hospitalActivities.consultation }}</span>
                                </div>
                                <div class="data-group-item" style="color: rgb(14, 73, 181);">
                                    <span class="square" style="background-color: rgb(14, 73, 181);"/>
                                    {{ $t('patients') }}
                                    <span class="value">{{ hospital.hospitalActivities.patients }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-primary">
                    <app-overlay-loader v-if="!isActivePatientStatistics && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActivePatientStatistics">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('patient_by_gender') }}</h5>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="pie-chart"
                                       :height="230"
                                       :labels="hospital.patientStatistics.labels"
                                       :data-sets="hospital.patientStatistics.dataSet"/>
                            <div class="chart-data-list">
                                <div class="row">
                                    <div class="col-12"
                                         v-for="(item, index) in hospital.patientStatistics.chartElement">
                                        <div class="data-group-item" :style="item.color">
                                            <span class="square" :style="item.background_color"/>
                                            {{item.key}}
                                            <span class="value">{{item.value}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" v-if="!mainPreloader">
                <div class="col-12 col-sm-12 col-md-6 mb-4 mb-md-0">
                    <div class="card card-with-shadow border-0">
                        <div class="card-header d-flex align-items-center justify-content-between p-primary primary-card-color">
                            <h5 class="card-title d-inline-block mb-0">{{ $t('doctors_list') }}</h5>
                        </div>
                        <div class="card-body p-0">
                            <app-table :id="'test-table-profile'" :options="availableDoctors"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6">
                    <div class="card card-with-shadow border-0">
                        <div class="card-header d-flex align-items-center justify-content-between p-primary primary-card-color">
                            <h5 class="card-title d-inline-block mb-0">{{ $t('upcoming_appointments') }}</h5>
                        </div>
                        <div class="card-body p-0">
                            <app-table :id="'test-table-profile'" :options="appointmentList"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import {FormMixin} from '../../../../../core/mixins/form/FormMixin';
    import {DashboardPreloader} from "./Mixins/DashboardPreloader";
    import * as actions from '../../../../Config/ApiUrl';
    import {numberFormatter} from "../../../../Helpers/Helpers";

    export default {
        name: "Hospital",
        mixins: [FormMixin,DashboardPreloader],

        data() {
            return {
                /* Loader section and active/inactive section */
                mainPreloader: true,

                isActiveHospitalActivity: false,
                isActivePatientStatistics: false,
                isActivedDefaultInfo: false,
                /* end */

                value: 'this_week',
                hospital: {},

                /*Available doctor list*/
                availableDoctors: {
                    name: 'Available Doctor List',
                    url: actions.DOCTORS_LIST,
                    datatableWrapper: false,
                    showHeader: false,
                    tableShadow: false,
                    managePagination: false,
                    columns: [
                        {
                            title: this.$t('user'),
                            type: 'media-object',
                            key: 'image',
                            mediaTitleKey: 'name',
                            mediaSubtitleKey: 'email',
                            modifier: (value, row) => {
                                return value; // imag url
                            },
                            isVisible: true
                        },
                        {
                            title: 'Speciality',
                            type: 'text',
                            key: 'speciality',
                            isVisible: true
                        },
                        {
                            title: this.$t('status'),
                            type: 'custom-class',
                            key: 'status',
                            isVisible: true,
                            modifier: (value) => {
                                if (value === 'Available') return "badge badge-sm badge-pill badge-info text-capitalized";
                                else if (value === 'Unavailable') return "badge badge-sm badge-pill badge-warning text-capitalized";
                                return "badge badge-sm badge-pill badge-danger text-capitalized";
                            }
                        }
                    ],
                    showFilter: false,
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 4,
                    orderBy: 'desc',
                    showAction: false,
                    actions: [],
                },

                /*Appointment list*/
                appointmentList: {
                    name: 'Appointment list',
                    url: actions.UPCOMING_APPOINTMENTS,
                    datatableWrapper: false,
                    showHeader: false,
                    tableShadow: false,
                    managePagination: false,
                    columns: [
                        {
                            title: this.$t('user'),
                            type: 'media-object',
                            key: 'image',
                            mediaTitleKey: 'name',
                            mediaSubtitleKey: 'gender',
                            modifier: (value, row) => {
                                return value;
                            },
                            isVisible: true
                        },
                        {
                            title: 'Age',
                            type: 'text',
                            key: 'age',
                            isVisible: true
                        },
                        {
                            title: 'Disease',
                            type: 'text',
                            key: 'disease',
                            isVisible: true
                        }
                    ],
                    showFilter: false,
                    paginationType: "pagination",
                    responsive: true,
                    rowLimit: 4,
                    orderBy: 'desc',
                    showAction: false,
                    actions: [],
                },


            }
        },
        created() {
            this.hospitalActivities();
            this.patientStatistics();
            this.defaultData();
        },
        methods: {
            getFilterValue(item) {
                this.value = item;
                this.isActiveHospitalActivity = false;
                this.hospitalActivities();
            },
            defaultData() {
                let url = actions.DEFAULT_HOSPITAL_INFO;

                this.axiosGet(url).then(response => {

                    this.hospital.defaultData = response.data;
                    this.isActivedDefaultInfo = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });

            },
            hospitalActivities() {

                let url = actions.HOSPITAL_ACTIVITIES, reqData = {};

                reqData.params = {
                    key: this.value
                };

                this.axiosGet(url, reqData).then(response => {

                    this.hospital.hospitalActivities = response.data;
                    this.isActiveHospitalActivity = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            patientStatistics() {
                let url = actions.PATIENT_STATISTICS;

                this.axiosGet(url).then(response => {

                    this.hospital.patientStatistics = response.data;
                    this.isActivePatientStatistics = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });

            },

            numberFormat(value) {
                return numberFormatter(value);
            }
        }
    }
</script>

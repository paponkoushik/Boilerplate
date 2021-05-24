<template>
    <div class="position-relative">
        <div v-if="countCreatedResponse<4" class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center dashboard-preloader justify-content-center">
                <span class="bounce1 mr-1"></span>
                <span class="bounce2 mr-1"></span>
                <span class="bounce3 mr-1"></span>
                <span class="bounce4"></span>
            </div>
        </div>
        <div class="content-wrapper">
            <app-breadcrumb :page-title="$t('academy')" :directory="$t('dashboard')" :icon="'pie-chart'"/>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-9 mb-primary">
                    <app-overlay-loader v-if="!isActiveStudentOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveStudentOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('student_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in academydashboard.studentOverview.filters"
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
                            <app-chart type="horizontal-line-chart"
                                       :height="380"
                                       :labels="academydashboard.studentOverview.labels"
                                       :data-sets="academydashboard.studentOverview.dataSet"/>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 mb-primary">
                    <app-overlay-loader v-if="!isActiveSchoolOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveSchoolOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('school_overview') }}</h5>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="dough-chart"
                                       :height="230"
                                       :labels="academydashboard.schoolOverview.labels"
                                       :data-sets="academydashboard.schoolOverview.dataSet"/>
                            <div class="chart-data-list">
                                <div class="row">
                                    <div class="col-12"
                                         v-for="(item, index) in academydashboard.schoolOverview.chartElement" :key="index">
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

            <app-overlay-loader v-if="!isActivedDefaultData && !mainPreloader"/>
            <div class="row" v-if="isActivedDefaultData">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3"
                     v-for="(item, index) in academydashboard.defaultData.dataSet" :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-with-icon'"
                                :label="item.label"
                                :number="numberFormat(item.value)"
                                :icon="item.icon"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 mb-4 mb-md-0">
                    <app-overlay-loader v-if="!isActiveInstructorStudentOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveInstructorStudentOverview">
                        <div class="card-header p-primary bg-transparent d-flex align-items-baseline">
                            <h5 class="card-title m-0 d-inline-block">{{ $t('instructor_and_student') }}</h5>
                        </div>
                        <div class="card-body">
                            <app-chart type="bar-chart"
                                       :height="390"
                                       :labels="academydashboard.instructorStudentOverview.labels"
                                       :data-sets="academydashboard.instructorStudentOverview.dataSet"/>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6" v-if="!mainPreloader">
                    <div class="card card-with-shadow border-0">
                        <div class="card-header d-flex align-items-center justify-content-between p-primary primary-card-color">
                            <h5 class="card-title d-inline-block mb-0"> {{ $t('available_courses') }}</h5>
                        </div>
                        <div class="card-body p-0">
                            <app-table :id="'test-table-profile'" :options="availableCourses"/>
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
    import AppFunction from "../../../../../core/helpers/app/AppFunction";

    export default {
        name: "Dashboard2",
        mixins: [FormMixin,DashboardPreloader],
        data() {
            return {
                /* Loader section and active/inactive section */
                mainPreloader: true,

                isActivedDefaultData: false,
                isActiveStudentOverview: false,
                isActiveSchoolOverview: false,
                isActiveInstructorStudentOverview: false,
                /* end */

                value: 'by_school',

                academydashboard: {},
                availableCourses: {
                    name: 'Available Courses',
                    url: actions.AVAILABLE_COURSE_LIST,
                    datatableWrapper: false,
                    tableShadow: false,
                    showHeader: false,
                    managePagination: false,
                    columns: [
                        {
                            title: this.$t('course'),
                            type: 'media-object',
                            key: 'image',
                            mediaTitleKey: 'name',
                            mediaSubtitleKey: 'instructor-name',
                            default: AppFunction.getAppUrl('images/avatar-demo.jpg'),
                            modifier: (value, row) => {
                                return value; // imag url
                            },
                            isVisible: true
                        },
                        {
                            title: this.$t('status'),
                            type: 'custom-class',
                            key: 'status',
                            isVisible: true,
                            modifier: (value) => {
                                if (value === 'Basic') return "badge badge-sm badge-pill badge-success";
                                else if (value === 'Special') return "badge badge-sm badge-pill badge-warning";
                                return "badge badge-sm badge-pill badge-danger";
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
            }
        },
        created() {
            this.defaultData();
            this.studentOverview();
            this.schoolOverview();
            this.instructorStudentOverview();
        },
        methods: {
            getFilterValue(item) {
                this.value = item;
                this.isActiveStudentOverview = false;
                this.studentOverview();
            },
            defaultData() {
                let url = actions.DEFAULT_ACADEMIC_INFO;

                this.axiosGet(url).then(response => {

                    this.academydashboard.defaultData = response.data;
                    this.isActivedDefaultData = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            studentOverview() {

                let url = actions.STUDENT_OVERVIEW, reqData = {};

                reqData.params = {
                    key: this.value
                };

                this.axiosGet(url, reqData).then(response => {

                    this.academydashboard.studentOverview = response.data;
                    this.isActiveStudentOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            schoolOverview() {
                let url = actions.SCHOOL_OVERVIEW;

                this.axiosGet(url).then(response => {

                    this.academydashboard.schoolOverview = response.data;
                    this.isActiveSchoolOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            instructorStudentOverview() {

                let url = actions.INSTRUCTOR_STUDENT_OVERVIEW;

                this.axiosGet(url).then(response => {

                    this.academydashboard.instructorStudentOverview = response.data;
                    this.isActiveInstructorStudentOverview = true;

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

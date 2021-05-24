<template>
    <div class="position-relative">
        <div v-if="countCreatedResponse < 4" class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center dashboard-preloader justify-content-center">
                <span class="bounce1 mr-1"/>
                <span class="bounce2 mr-1"/>
                <span class="bounce3 mr-1"/>
                <span class="bounce4"/>
            </div>
        </div>

        <div class="content-wrapper">
            <app-breadcrumb :page-title="$t('hrm')" :directory="$t('dashboard')" :icon="'pie-chart'"/>

            <app-overlay-loader v-if="!isActiveBasic && !mainPreloader"/>
            <div class="row" v-if="isActiveBasic">
                <div class="col-12 col-sm-6 col-md-3"
                     v-for="(item, index) in hrm.basicData.topSectionData"
                     :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-with-icon'"
                                :label="item.label"
                                :number="numberFormat(item.number)"
                                :icon="item.icon"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8 col-xl-9 mb-primary">
                    <app-overlay-loader v-if="!isActiveProjectOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveProjectOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('project_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in hrm.projectOverview.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[projectFilter == item.id ? 'active' : index === 0 && projectFilter === '' ? 'active': '']"
                                       @click.prevent="getProjectFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="custom-line-chart"
                                       :height="380"
                                       :labels="hrm.projectOverview.labels"
                                       :data-sets="hrm.projectOverview.chartData"/>
                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: rgb(81, 194, 213);">
                                    <span class="square" style="background-color: rgb(81, 194, 213);"/>
                                    {{ $t('users') }}
                                    <span class="value"> {{ hrm.projectOverview.users }}</span>
                                </div>
                                <div class="data-group-item" style="color: rgb(235, 89, 110);">
                                    <span class="square" style="background-color: rgb(235, 89, 110);"/>
                                    {{ $t('visitors') }}
                                    <span class="value"> {{ hrm.projectOverview.visitors }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-xl-3 mb-primary">
                    <app-overlay-loader v-if="!isActiveYearlyHoliday && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveYearlyHoliday">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('yearly_holiday') }}</h5>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="dough-chart"
                                       :height="230"
                                       :labels="hrm.yearlyHoliday.labels"
                                       :data-sets="hrm.yearlyHoliday.dataSet"/>
                            <div class="chart-data-list">
                                <div class="row">
                                    <div class="col-12"
                                         v-for="(item, index) in hrm.yearlyHoliday.chartElement" :key="index">
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

            <div class="row">
                <app-overlay-loader v-if="!isActiveBasic && !mainPreloader"/>

                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4" v-if="isActiveBasic">
                    <div v-for="(item, index) in hrm.basicData.middleSectionData" :key="index">
                        <app-widget :class="{'mb-primary': index !== hrm.basicData.middleSectionData.length - 1}"
                                    :type="'app-widget-with-icon'"
                                    :label="item.label"
                                    :number="item.number"
                                    :icon="item.icon"/>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                    <app-overlay-loader v-if="!isActiveEmployeeOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveEmployeeOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('employee_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item" v-for="(item, index) in hrm.employeeOverview.filters"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[employeeFilter == item.id ? 'active' : index === 0 && employeeFilter === '' ? 'active': '']"
                                       @click.prevent="getEmployeeFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart type="horizontal-line-chart"
                                       :height="240"
                                       :labels="hrm.employeeOverview.labels"
                                       :data-sets="hrm.employeeOverview.dataSet"/>
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
        name: "HRM",
        mixins: [FormMixin,DashboardPreloader],
        data() {
            return {
                /* Loader section and active/inactive section */
                mainPreloader: true,

                isActiveBasic: false,
                isActiveProjectOverview: false,
                isActiveYearlyHoliday: false,
                isActiveEmployeeOverview: false,
                projectFilter: 'this_week',
                employeeFilter: 'by_department',
                hrm: {},
            }
        },
        created() {
            this.basicData();
            this.projectOverview();
            this.yearlyHoliday();
            this.employeeOverview();
        },
        methods: {
            getProjectFilterValue(item) {
                this.projectFilter = item;
                this.isActiveProjectOverview = false;
                this.projectOverview();
            },
            getEmployeeFilterValue(item) {
                this.employeeFilter = item;
                this.isActiveEmployeeOverview = false;
                this.employeeOverview();
            },
            basicData() {
                let url = actions.HRM_BASIC_DATA;

                this.axiosGet(url).then(response => {

                    this.hrm.basicData = response.data;
                    this.isActiveBasic = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            projectOverview() {
                let url = actions.PROJECT_OVERVIEW, reqData = {};

                reqData.params = {
                    key: this.projectFilter
                };

                this.axiosGet(url, reqData).then(response => {

                    this.hrm.projectOverview = response.data;
                    this.isActiveProjectOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            yearlyHoliday() {
                let url = actions.YEARLY_HOLIDAY;

                this.axiosGet(url).then(response => {

                    this.hrm.yearlyHoliday = response.data;
                    this.isActiveYearlyHoliday = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            employeeOverview() {
                let url = actions.EMPLOYEE_OVERVIEW, reqData = {};

                reqData.params = {
                    key: this.employeeFilter
                };

                this.axiosGet(url, reqData).then(response => {

                    this.hrm.employeeOverview = response.data;
                    this.isActiveEmployeeOverview = true;

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

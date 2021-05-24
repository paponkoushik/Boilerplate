<template>
    <div class="position-relative">
        <div v-if="countCreatedResponse < 3" class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center dashboard-preloader justify-content-center">
                <span class="bounce1 mr-1"/>
                <span class="bounce2 mr-1"/>
                <span class="bounce3 mr-1"/>
                <span class="bounce4"/>
            </div>
        </div>
        <div class="content-wrapper">
            <app-breadcrumb :page-title="$t('default')" :directory="$t('dashboard')" :icon="'pie-chart'"/>

            <app-overlay-loader v-if="!defaultData && !mainPreloader"/>
            <div class="row" v-if="defaultData">
                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3"
                     v-for="(item, index) in info.getDefaultDashboardInfo.topSectionData" :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-with-icon'"
                                :label="item.label"
                                :number="numberFormat(item.number)"
                                :icon="item.icon"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-9 mb-primary">
                    <app-overlay-loader v-if="!audienceChart && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="audienceChart">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('audience_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item" v-for="(item, index) in info.audienceOverviewChart.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[audienceFilter == item.id ? 'active' : index === 0 && audienceFilter === '' ? 'active': '']"
                                       @click.prevent="audienceOverviewCartFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="custom-line-chart"
                                       :height="170"
                                       :labels="info.audienceOverviewChart.labels"
                                       :data-sets="info.audienceOverviewChart.chartData"/>
                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: #368cd5;">
                                    <span class="square" style="background-color: #368cd5;"/>
                                    {{ $t('users') }}

                                    <span class="value">{{info.audienceOverviewChart.user}}</span>
                                </div>
                                <div class="data-group-item" style="color: #f7531e;">
                                    <span class="square" style="background-color: #f7531e;"/>
                                    {{ $t('visitors') }}

                                    <span class="value">{{info.audienceOverviewChart.visitor}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <app-overlay-loader v-if="!defaultData && !mainPreloader"/>
                <div class="col-12 col-md-3 mb-4 mb-md-0" v-if="defaultData">
                    <div :class="{'mb-primary': index !== info.getDefaultDashboardInfo.circleTopSection.length - 1}"
                         v-for="(item, index) in info.getDefaultDashboardInfo.circleTopSection"
                         :key="index">
                        <app-widget :type="'app-widget-with-circle'"
                                    :label="item.label"
                                    :number="numberFormat(item.number)"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <app-overlay-loader v-if="!defaultData && !mainPreloader"/>
                    <div class="row" v-if="defaultData">
                        <div class="col-12 col-sm-6 col-md-6"
                             v-for="(item, index) in info.getDefaultDashboardInfo.bottomSectionData" :key="index">
                            <app-widget class="mb-primary"
                                        :type="'app-widget-with-icon'"
                                        :label="item.label"
                                        :number="numberFormat(item.number)"
                                        :icon="item.icon"/>
                        </div>
                    </div>

                    <div class="row" v-if="defaultData">
                        <div class="col-12 col-md-6 mb-4 mb-md-0"
                             v-for="(item, index) in info.getDefaultDashboardInfo.circleBottomSection"
                             :key="index">
                            <app-widget :type="'app-widget-with-circle'"
                                        :label="item.label"
                                        :number="numberFormat(item.number)"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6" >
                    <app-overlay-loader v-if="!browserChart && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="browserChart">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('browser_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in info.browserOverviewChart.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[browserFilter == item.id ? 'active' : index === 0 && browserFilter === '' ? 'active': '']"
                                       @click.prevent="browserOverviewChartFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="line-chart"
                                       :height="210"
                                       :labels="info.browserOverviewChart.labels"
                                       :data-sets="info.browserOverviewChart.chartData"/>
                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: rgb(3, 90, 166);">
                                    <span class="square" style="background-color: rgb(3, 90, 166);"/>
                                    {{ $t('chrome') }}
                                    <span class="value">{{info.browserOverviewChart.chrome}} </span>
                                </div>
                                <div class="data-group-item" style="color: rgb(64, 186, 213);">
                                    <span class="square" style="background-color: rgb(64, 186, 213);"/>
                                    {{ $t('firefox') }}
                                    <span class="value">{{info.browserOverviewChart.firefox}}</span>
                                </div>
                                <div class="data-group-item" style="color: rgba(41, 199, 172, 0.7);">
                                    <span class="square" style="background-color: rgba(41, 199, 172, 0.7);"/>
                                    {{ $t('opera') }}
                                    <span class="value">{{info.browserOverviewChart.opera}}</span>
                                </div>
                            </div>
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

        mixins: [FormMixin,DashboardPreloader],
        name: "Dashboard",
        data() {
            return {
                /* Loader section and active/inactive section */
                mainPreloader: true,

                audienceChart: false,
                browserChart: false,
                defaultData: false,
                /* end */

                audienceFilter: 'this_week',
                browserFilter: 'this_week',
                info: {},
            }
        },
        created() {
            this.mainPreloader = true;
            this.getDefaultDashboardInfo();
            this.audienceOverviewCart();
            this.browserOverviewCart();
        },
        methods: {
            audienceOverviewCartFilterValue(item) {
                this.audienceFilter = item;
                this.audienceChart = false;
                this.audienceOverviewCart();

            },
            browserOverviewChartFilterValue(item) {

                this.browserFilter = item;
                this.browserChart = false;
                this.browserOverviewCart();
            },

            getDefaultDashboardInfo() {

                let url = actions.DEFAULT_DASHBOARD_INFO;

                this.axiosGet(url).then(response => {

                    this.info.getDefaultDashboardInfo = response.data;
                    this.defaultData = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },

            audienceOverviewCart() {

                let url = actions.AUDIENCE_OVERVIEW_CHART, reqData = {};

                reqData.params = {
                    key: this.audienceFilter
                };

                this.axiosGet(
                    url,
                    reqData
                ).then(response => {

                    this.info.audienceOverviewChart = response.data;
                    this.audienceChart = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },

            browserOverviewCart() {
                let url = actions.BROWSER_OVERVIEW_CHART, reqData = {};

                reqData.params = {
                    key: this.browserFilter
                };

                this.axiosGet(
                    url,
                    reqData
                ).then(response => {

                    this.info.browserOverviewChart = response.data;
                    this.browserChart = true;

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

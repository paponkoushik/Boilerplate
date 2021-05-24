<template>
    <div class="position-relative">
        <div v-if="countCreatedResponse<4" class="root-preloader position-absolute overlay-loader-wrapper">
            <div class="spinner-bounce d-flex align-items-center dashboard-preloader justify-content-center">
                <span class="bounce1 mr-1"/>
                <span class="bounce2 mr-1"/>
                <span class="bounce3 mr-1"/>
                <span class="bounce4"/>
            </div>
        </div>
        <div class="content-wrapper">
            <app-breadcrumb :page-title="$t('e_commerce')" :directory="$t('dashboard')" :icon="'pie-chart'"/>

            <div class="row">
                <app-overlay-loader v-if="!isActivedDefaultiInfo && !mainPreloader"/>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4" v-if="isActivedDefaultiInfo">
                    <div v-for="(item, index) in e_commerceDashboard.defaultInfo.topSectionData" :key="index">
                        <app-widget class="mb-primary"
                                    :type="'app-widget-with-icon'"
                                    :label="item.label"
                                    :number="currencyFormat(item.number)"
                                    :icon="item.icon"/>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 mb-primary">
                    <app-overlay-loader v-if="!isActiveBusinessOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveBusinessOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('business_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in e_commerceDashboard.businessOverview.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[businessFilter == item.id ? 'active' : index === 0 && businessFilter === '' ? 'active': '']"
                                       @click.prevent="businessFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="custom-line-chart"
                                       :height="180"
                                       :labels="e_commerceDashboard.businessOverview.labels"
                                       :data-sets="e_commerceDashboard.businessOverview.chartData"/>

                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: #ff9700;">
                                    <span class="square" style="background-color: #ff9700;"/>
                                    {{ $t('sales') }}
                                    <span class="value">{{e_commerceDashboard.businessOverview.salesCount}}</span>
                                </div>
                                <div class="data-group-item" style="color: #348cd4;">
                                    <span class="square" style="background-color: #348cd4;"/>
                                    {{ $t('profit') }}
                                    <span class="value">{{e_commerceDashboard.businessOverview.profitsCount}}</span>
                                </div>
                                <div class="data-group-item" style="color: #f7531e;">
                                    <span class="square" style="background-color: #f7531e;"/>
                                    {{ $t('purchase') }}
                                    <span class="value">{{e_commerceDashboard.businessOverview.purchaseCount}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <app-overlay-loader v-if="!isActivedDefaultiInfo && !mainPreloader"/>
            <div class="row" v-if="isActivedDefaultiInfo">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2"
                     v-for="(item, index) in e_commerceDashboard.defaultInfo.middleSectionData" :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-without-icon'"
                                :label="item.label"
                                :number="numberFormat(item.number)"/>
                </div>
            </div>

            <div class="row" v-if="isActivedDefaultiInfo">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-2"
                     v-for="(item, index) in e_commerceDashboard.defaultInfo.bottomSectionData" :key="index">
                    <app-widget class="mb-primary"
                                :type="'app-widget-with-circle'"
                                :label="item.label"
                                :number="numberFormat(item.number)"/>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 mb-4 mb-md-0">
                    <app-overlay-loader v-if="!isActiveContactOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveContactOverview">
                        <div class="card-header bg-transparent p-primary d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">{{ $t('contact_overview') }}</h5>
                            <ul class="nav tab-filter-menu justify-content-flex-end">
                                <li class="nav-item"
                                    v-for="(item, index) in e_commerceDashboard.contactOverview.chartFilterOptions"
                                    :key="index">
                                    <a href="#"
                                       class="nav-link py-0"
                                       :class="[contactFilter == item.id ? 'active' : index === 0 && contactFilter === '' ? 'active': '']"
                                       @click.prevent="contactFilterValue(item.id)">
                                        {{ item.value }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <app-chart class="mb-primary"
                                       type="line-chart"
                                       :height="230"
                                       :labels="e_commerceDashboard.contactOverview.labels"
                                       :data-sets="e_commerceDashboard.contactOverview.chartData"/>
                            <div class="chart-data-list d-flex flex-wrap justify-content-center">
                                <div class="data-group-item" style="color: rgb(97, 177, 90);">
                                    <span class="square" style="background-color: rgb(97, 177, 90);"/>
                                    Customers
                                    <span class="value">{{e_commerceDashboard.contactOverview.customerCount}}</span>
                                </div>
                                <div class="data-group-item" style="color: rgb(14, 73, 181);">
                                    <span class="square" style="background-color: rgb(14, 73, 181);"/>
                                    Suppliers
                                    <span class="value">{{e_commerceDashboard.contactOverview.supplierCount}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                    <app-overlay-loader v-if="!isActiveTeamOverview && !mainPreloader"/>
                    <div class="card card-with-shadow border-0 h-100" v-if="isActiveTeamOverview">
                        <div class="card-header p-primary bg-transparent d-flex align-items-baseline">
                            <h5 class="card-title m-0 d-inline-block">Team Overview</h5>
                        </div>
                        <div class="card-body">
                            <app-chart type="bar-chart"
                                       :height="250"
                                       :labels="e_commerceDashboard.teamOverview.barChartLabels"
                                       :data-sets="e_commerceDashboard.teamOverview.datasetsBarChart"/>
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
    import {numberFormatter, numberWithCurrencySymbol} from "../../../../Helpers/Helpers";

    export default {
        name: "Dashboard3",
        mixins: [FormMixin,DashboardPreloader],
        data() {
            return {
                /* Loader section and active/inactive section */
                mainPreloader: true,

                isActivedDefaultiInfo: false,
                isActiveBusinessOverview: false,
                isActiveContactOverview: false,
                isActiveTeamOverview: false,
                /* end */

                e_commerceDashboard: {},
                businessFilter: 'this_week',
                contactFilter: 'this_week',
            }
        },
        created() {
            this.teamOverview();
            this.ecommerceDefaultInfo();
            this.businessOverview();
            this.contactOverview();
        },
        methods: {
            businessFilterValue(item) {

                this.businessFilter = item;
                this.isActiveBusinessOverview = false;
                this.businessOverview();

            },
            contactFilterValue(item) {

                this.contactFilter = item;
                this.isActiveContactOverview = false;
                this.contactOverview();

            },
            ecommerceDefaultInfo() {

                let url = actions.DEFAULT_INFO;
                this.axiosGet(url).then(response => {

                    this.e_commerceDashboard.defaultInfo = response.data;
                    this.isActivedDefaultiInfo = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            businessOverview() {

                let url = actions.BUSINESS_OVERVIEW, reqData = {};
                reqData.params = {
                    key: this.businessFilter
                };

                this.axiosGet(url, reqData).then(response => {

                    this.e_commerceDashboard.businessOverview = response.data;
                    this.isActiveBusinessOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            contactOverview() {

                let url = actions.CONTACT_OVERVIEW, reqData = {};

                reqData.params = {
                    key: this.contactFilter
                };

                this.axiosGet(url, reqData).then(response => {

                    this.e_commerceDashboard.contactOverview = response.data;
                    this.isActiveContactOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            teamOverview() {

                let url = actions.TEAM_OVERVIEW;

                this.axiosGet(url).then(response => {

                    this.e_commerceDashboard.teamOverview = response.data;
                    this.isActiveTeamOverview = true;

                }).catch(({response}) => {

                }).finally(() => {
                    this.mainPreloader = false;
                    this.countCreatedResponse++;
                });
            },
            numberFormat(value) {
                return numberFormatter(value);
            },

            currencyFormat(value) {
                return numberWithCurrencySymbol(value);
            }
        }
    }
</script>

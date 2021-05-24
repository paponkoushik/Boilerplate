<template>
    <div class="container-scroller">
        <!--Top Navbar-->
        <Navbar/>

        <!--Sidebar-->
        <Sidebar/>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <Breadcrumb/>
                    <div class="dashboard-first-row mb-primary">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                    <div class="icon-wrapper">
                                        <Icon :name="'sun'"/>
                                    </div>
                                    <div class="widget-data">
                                        <h6>1,234</h6>
                                        <p>Total campaigns</p>
                                    </div>
                                </div>
                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                    <div class="icon-wrapper">
                                        <Icon :name="'message-circle'"/>
                                    </div>
                                    <div class="widget-data">
                                        <h6>1,234</h6>
                                        <p>Total campaigns</p>
                                    </div>
                                </div>
                                <div class="card card-with-shadow dashboard-widgets dashboard-icon-widget p-primary border-0">
                                    <div class="icon-wrapper">
                                        <Icon :name="'layers'"/>
                                    </div>
                                    <div class="widget-data">
                                        <h6>1,234</h6>
                                        <p>Total campaigns</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                <div class="card card-with-shadow border-0 h-100">
                                    <div class="card-header p-primary bg-transparent">
                                        <h5 class="card-title m-0">Campaign Overview</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-second-row mb-primary">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>51,234</h6>
                                        <p>Total sent</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>78,234</h6>
                                        <p>Total deliveries</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>251,234</h6>
                                        <p>Total bounces</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>11,234</h6>
                                        <p>Total opens</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>31,234</h6>
                                        <p>Total clicks</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border-0 p-primary dashboard-widgets">
                                    <div class="widget-data">
                                        <h6>16,234</h6>
                                        <p>Total unsubscribers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-third-row">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="85">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    85%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Sending rate</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="75">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    75%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Delivery rate</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="50">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    50%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Bounce rate</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="85">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    85%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Open rate</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="25">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    25%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Click rate</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                                <div class="card card-with-shadow border border-0 mb-primary py-primary">
                                    <div class="circular-progress-bar">
                                        <div class="progress" data-percentage="25">
                                        <span class="progress-left">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <span class="progress-right">
                                            <span class="progress-bar"></span>
                                        </span>
                                            <div class="progress-value">
                                                <h6 class="m-0">
                                                    25%
                                                </h6>
                                            </div>
                                        </div>
                                        <small class="mt-3 text-center d-block">Unsubscribing rate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard-fourth-row">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                                <div class="card card-with-shadow border-0 h-100">
                                    <div class="card-header p-primary bg-transparent">
                                        <h5 class="card-title m-0">Audiance Overview</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-9">
                                                <LineExample/>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                                <div class="card card-with-shadow border-0 h-100">
                                    <div class="card-header p-primary bg-transparent d-flex align-items-baseline">
                                        <h5 class="card-title m-0 d-inline-block">Last Campaign</h5>
                                        <span class="badge badge-success badge-sm badge-pill ml-auto d-inline-block">Sent</span>
                                    </div>
                                    <div class="card-body">
                                        <BarExample/>
                                    </div>
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
    import CoreJS from '../../assets/js/core'
    import BarExample from '../../assets/js/chart/BarExample'
    import LineExample from '../../assets/js/chart/LineExample'

    export default {
        name: "Admin-Layout-Master",
        extends: CoreJS,
        components: {
            BarExample, LineExample
        },
        data() {
            return {
                dataPoints: null,
                height: 20
            }
        },
        mounted() {
            setInterval(() => {
                this.fillData()
            }, 2000)
        },
        methods: {
            getRandomInt() {
                return Math.floor(Math.random() * (50 - 5 + 1)) + 5
            },
            fillData() {
                this.dataPoints = {
                    labels: ['January' + this.getRandomInt(), 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [
                        {
                            label: 'Data One',
                            backgroundColor: '#f87979',
                            data: [this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt(), this.getRandomInt()]
                        }
                    ]
                }
            }
        },
    }
</script>
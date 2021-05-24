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
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Barchart</h4>
                                        <bar-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Linechart</h4>
                                        <line-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Doughnutchart</h4>
                                        <doughnut-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Readerchart</h4>
                                        <radar-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Polarchart</h4>
                                        <polar-area-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Piechart</h4>
                                        <pie-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Bubblechart</h4>
                                        <bubble-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Scatterchart</h4>
                                        <scatter-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Horizontal-Linechart</h4>
                                        <horizontal-bar-example/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="card card-with-shadow border-0 mb-primary">
                                <div class="card-body">
                                    <div class="Chart">
                                        <h4 class="text-center pb-3">Custom-Linechart</h4>
                                        <custom-line/>
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

    // All Chart Imported Here...
    import BarExample from '../../assets/js/chart/BarExample'
    import LineExample from '../../assets/js/chart/LineExample'
    import DoughnutExample from '../../assets/js/chart/DoughnutExample'
    import PieExample from '../../assets/js/chart/PieExample'
    import RadarExample from '../../assets/js/chart/RadarExample'
    import PolarAreaExample from '../../assets/js/chart/PolarAreaExample'
    import BubbleExample from '../../assets/js/chart/BubbleExample'
    import ScatterExample from '../../assets/js/chart/ScatterExample'
    import HorizontalBarExample from '../../assets/js/chart/HorizontalBarExample'
    import CustomLine from '../../assets/js/chart/CustomExample'


    export default {
        name: "Chart",
        extends: CoreJS,
        components: {
            BarExample,
            LineExample,
            DoughnutExample,
            CustomLine,
            PieExample,
            RadarExample,
            PolarAreaExample,
            BubbleExample,
            ScatterExample,
            HorizontalBarExample

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
            increaseHeight() {
                this.height += 10
            },
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
        computed: {
            myStyles() {
                return {
                    height: `${this.height}px`,
                    position: 'relative'
                }
            }
        }
    }
</script>
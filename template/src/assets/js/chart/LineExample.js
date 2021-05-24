import {Line} from './BaseCharts'

export default {
    extends: Line,
    data() {
        return {
            gridBorderColor: ''
        }
    },
    watch: {

    },
    mounted() {
        if (localStorage.getItem('theme') == 'dark') {
            console.log('dark')
            this.gridBorderColor = '#2B303B'
        } else {
            console.log('light')
            this.gridBorderColor = '#F5F8FF'
        }

        this.renderChart(
            {
                labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [
                    {
                        label: 'Data One',
                        backgroundColor: 'rgba(68, 102, 242, 0.2)',
                        data: [0, 39, 10, 40, 39, 80, 40]
                    },
                    {
                        label: 'Data Two',
                        backgroundColor: 'rgba(68, 102, 242, 0.5)',
                        data: [0, 45, 35, 20, 65, 30, 70]
                    },
                ],
            },
            {
                responsive: true,
                maintainAspectRatio: false,
                /*scales: {
                    xAxes: [{
                        gridLines: {
                            color: this.gridBorderColor
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            color: this.gridBorderColor
                        }
                    }]
                }*/
            },
        )
    }
}

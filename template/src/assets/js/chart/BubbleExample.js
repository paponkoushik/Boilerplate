import { Bubble } from './BaseCharts'

export default {
    extends: Bubble,
    mounted () {
        this.renderChart({
            datasets: [
                {
                    label: 'Data One',
                    backgroundColor: '#4466F2',
                    data: [
                        {
                            x: 20,
                            y: 25,
                            r: 5
                        },
                        {
                            x: 40,
                            y: 10,
                            r: 10
                        },
                        {
                            x: 30,
                            y: 22,
                            r: 30
                        }
                    ]
                },
                {
                    label: 'Data Two',
                    backgroundColor: '#6a008a',
                    data: [
                        {
                            x: 10,
                            y: 30,
                            r: 15
                        },
                        {
                            x: 20,
                            y: 20,
                            r: 10
                        },
                        {
                            x: 15,
                            y: 16,
                            r: 30
                        }
                    ]
                }
            ]
        }, {responsive: true, maintainAspectRatio: false})
    }
}

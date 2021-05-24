import { Pie } from './BaseCharts'

export default {
    extends: Pie,
    mounted () {
        this.renderChart({
            labels: ['VueJs', 'EmberJs', 'ReactJs', 'AngularJs'],
            datasets: [
                {
                    backgroundColor: [
                        '#f96868',
                        '#4466F2',
                        '#2e383e',
                        '#6a008a'
                    ],
                    data: [20, 25, 40, 15]
                }
            ]
        }, {responsive: true, maintainAspectRatio: false})
    }
}

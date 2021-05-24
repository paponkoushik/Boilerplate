import { Bar } from './BaseCharts'

export default {
    extends: Bar,
    mounted () {
        this.renderChart({
            labels: ['Sent', 'Delivered', 'Bounced', 'Open', 'Clicked'],
            datasets: [
                {
                    label: 'Data One',
                    backgroundColor: '#4466F2',
                    data: [80, 70, 32, 69, 50]
                }
            ]
        }, {responsive: true, maintainAspectRatio: false})
    }
}

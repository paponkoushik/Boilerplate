import { PolarArea } from './BaseCharts'

export default {
    extends: PolarArea,
    mounted () {
        this.renderChart({
            labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
            datasets: [
                {
                    label: 'My First dataset',
                    backgroundColor: '#4466F2',
                    pointBackgroundColor: 'rgba(179,181,198,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(179,181,198,1)',
                    data: [65, 59, 76, 70, 56, 55, 40]
                },
                {
                    label: 'My Second dataset',
                    backgroundColor: '#6a008a',
                    pointBackgroundColor: 'rgba(255,99,132,1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(255,99,132,1)',
                    data: [28, 80, 40, 19, 96, 27, 100]
                }
            ]
        }, {responsive: true, maintainAspectRatio: false})
    }
}

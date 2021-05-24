import { Radar } from './BaseCharts'

export default {
    extends: Radar,
    mounted () {
        this.renderChart({
            labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
            datasets: [
                {
                    label: 'My First dataset',
                    backgroundColor: 'rgba(68, 102, 242, 0.5)',
                    borderColor: 'rgba(179,181,198,.5)',
                    pointBackgroundColor: 'rgba(70, 195, 95, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(179,181,198,1)',
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: 'My Second dataset',
                    backgroundColor: 'rgba(106, 0, 138, 0.5)',
                    borderColor: 'rgba(0, 143, 214, .5)',
                    pointBackgroundColor: 'rgba(70, 195, 95, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(255,99,132,1)',
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        }, {responsive: true, maintainAspectRatio: false})
    }
}

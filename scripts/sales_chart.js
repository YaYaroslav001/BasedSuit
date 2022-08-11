	var ctx = document.getElementById('sales_chart').getContext('2d');
	var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2016', '2017', '2018', '2019', '2020', '2021'],
        datasets: [{
            label: 'График продаж за последние 6 лет',
            data: [21389, 26439, 35166, 51528, 51251, 50146],
            backgroundColor: [
                'rgba(28, 28, 28, 0.8)',
                'rgba(28, 28, 28, 0.8)',
                'rgba(28, 28, 28, 0.8)',
                'rgba(28, 28, 28, 0.8)',
                'rgba(28, 28, 28, 0.8)',
                'rgba(28, 28, 28, 0.8)'
            ],
            borderColor: [
                'rgba(28, 28, 28, 1)',
                'rgba(28, 28, 28, 1)',
                'rgba(28, 28, 28, 1)',
                'rgba(28, 28, 28, 1)',
                'rgba(28, 28, 28, 1)',
                'rgba(28, 28, 28, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: 'График продаж за последние 6 лет',
            position: 'top',
            fontSize: 16,
            padding: 20
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 75
                }
            }]
        }
    }
});


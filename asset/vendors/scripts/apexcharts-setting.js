
const fetchData = () => {
	// axios.get('https://api.ipify.org/?format=json')
	axios.get('/247gainers/success')
		.then(response => {
			const success_rates = response.data;
			console.log(`GET success rate array`, success_rates);
			const d = []
			const cat = []

			for (const success_rate of success_rates) {
				cat.push(success_rate.date)
				d.push(success_rate.success_rate)
			}

			console.log('dates:', d)

			var options = {
				series: [{
					name: 'Success Rate',
					data: d // [40.6, 55.3, 50.7, 54.1, 60.9, 65.6, 60.5, 55.8, 72.3, 83.4, 97,]
				}],
				chart: {
					height: 350,
					type: 'line',
					toolbar: {
						show: false,
					}
				},
				grid: {
					show: false,
					padding: {
						left: 0,
						right: 0
					}
				},
				stroke: {
					width: 7,
					curve: 'smooth'
				},
				xaxis: {
					type: 'datetime',
					categories: cat // ['5/29/2020', '6/29/2020', '7/30/2020', '8/30/2020', '9/29/2020', '10/30/2020', '11/29/2020', '12/30/2020', '1/30/2021', '2/26/2021', '3/30/2021'],
				},
				title: {
					text: 'Last One year Average Trading Success Rate ',
					align: 'left',
					style: {
						fontSize: "16px",
						color: '#666'
					}
				},
				fill: {
					type: 'gradient',
					gradient: {
						shade: 'dark',
						gradientToColors: ['#1b00ff'],
						shadeIntensity: 1,
						type: 'horizontal',
						opacityFrom: 1,
						opacityTo: 1,
						stops: [0, 100, 100, 100]
					},
				},
				markers: {
					size: 4,
					colors: ["#FFA41B"],
					strokeColors: "#fff",
					strokeWidth: 2,
					hover: {
						size: 7,
					}
				},
				yaxis: {
					min: 10,
					max: 100,
					title: {
						text: 'Percentage Trading Success (%)',
					},
				}
			};
			var chart = new ApexCharts(document.querySelector("#chart1"), options);
			chart.render();
		})
		.catch(error => console.error(error));
}

fetchData()



var data =[
		{y: '2019', a: 49%, b: 55%},
		{y: '2020', a: 56%, b: 65%},
		{y: '2021', a: 60%, b: 76%},
		],
config = {
	data: data,
	xkey: 'y',
	ykeys: ['a', 'b'],
	labels: ['Trading Success Low', 'Trading Success High'],
	fillOpacity: 0.6,
	hideHover: 'auto',
	behaveLikeLine: true,
	resize: true,
	pointFillColors:['#ffffff'],
	PointStrokeColors:['black'],
	LineColors: ['red', 'green']
}; 

config.element = 'line-chart';
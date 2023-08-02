<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>VENTA DE CELULARES tECNOTEC</title>

		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


input[type="number"] {
	min-width: 50px;
}
		</style>
	</head>
	<body>
<script src="Highcharts-9.1.2/code/highcharts.js"></script>
<script src="Highcharts-9.1.2/code/modules/exporting.js"></script>
<script src="Highcharts-9.1.2/code/modules/export-data.js"></script>
<script src="Highcharts-9.1.2/code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
        REPORTES DE STOCK DE TIENDA TECNOTEC JUNIO 2021
    </p>
</figure>



		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'REPORTES DE STOCK JUNIO 2021'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: '',
        colorByPoint: true,
        data: [{
            name: 'Samsung Galaxy A52',
            y: 50.41,
            sliced: true,
            selected: true
        }, {
            name: 'Samsung galaxy M12',
            y: 15.84
        }, {
            name: '',
            y: 10.85
        }, {
            name: 'Redmi note 10',
            y: 8.67
        }, {
            name: 'xiaomi poco F3',
            y: 9.18
        }, {
            name: 'Huawei Y8s',
            y: 13.64
        }, {
            name: 'huawei mate 40',
            y:5.6
        }]
    }]
});
		</script>
	</body>
</html>

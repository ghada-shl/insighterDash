<!DOCTYPE html>
<html>
<head>
<title>Highcharts Example</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

<div id="container" style="width:100%; height:400px;"></div>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Fruit Consumption'
    },
    xAxis: {
        categories: ['Apples', 'Bananas', 'Oranges']
    },
    yAxis: {
        title: {
            text: 'Fruit eaten'
        }
    },
    series: [{
        name: 'Jane',
        data: [1, 0, 4]
    }, {
        name: 'John',
        data: [5, 7, 3]
    }]
});
</script>

</body>
</html>

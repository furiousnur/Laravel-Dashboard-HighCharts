<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>High Chart</title>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body>
<div id="chart-container"></div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
{{--<script src="components/highstock/highstock.js"></script>--}}
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    var chart=null;
    $(document).ready(function() {
        var datas = <?php json_encode($datas) ?>
            chart = new HighCharts.Chart('chart-container', {
            title: {
                text: 'New User Growth, 2020'
            },
            subtitle: {
                text: 'Source: Surfside Media'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'jun', 'Jul', 'Aug', 'Oct', 'Nov', 'Dec']
            },
            yAxis: {
                title: {
                    text: 'Number Of Year'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New User',
                data: datas
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        })
    });
</script>

</body>
</html>

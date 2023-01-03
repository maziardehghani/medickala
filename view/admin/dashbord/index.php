<?php

require('view/admin/layout.php');
$date = $data['date'];
$categories = array_keys($date);
$orders = array_values($date);
$orders =join(',' , $orders);



?>


<div class="left">

    <p class="title">
        <a>
            داشبورد
        </a>


    </p>

    <style>
        #container * {
            direction: ltr;
        }
    </style>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Highcharts Example</title>

        <script type="text/javascript" src="/jquery.min.js"></script>
        <style type="text/css">
            ${demo.css}
        </style>
        <script type="text/javascript">
            $(function () {
                $('#container').highcharts({
                    title: {
                        text: 'نمودار آمار فروش در 7 روز گذشته',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'فروشگاه مدیک کالا',
                        x: -20
                    },
                    xAxis: {
                        categories: [<?php foreach ($categories as $category){echo "'$category',";} ?>]
                    },
                    yAxis: {
                        title: {
                            text: 'تعداد سفارش'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                    },
                    tooltip: {
                        valueSuffix: 'سفارش'
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle',
                        borderWidth: 0
                    },
                    series: [{
                        name: 'فروش',
                        data: [<?= $orders ?>]
                    }]
                });
            });
        </script>
    </head>
    <body>
    <script src="<?= URL ?>plugins/highcharts/highcharts.js"></script>
    <script src="<?= URL ?>plugins/highcharts/exporting.js"></script>

    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    </body>
</div>













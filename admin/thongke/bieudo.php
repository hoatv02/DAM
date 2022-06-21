<head>
    <style>
        .chart{
            margin-left: 200px;
            margin-top: 50px;  
        }
        .thongke{
            padding:50px 300px;
            width: 100%;
            margin-left: 100px;
        }
    </style>
</head>
<div class="thongke">
<h3 class="alert alert-success">
    THỐNG KÊ SẢN PHẨM THEO DANH MỤC
</h3>
<div class="chart">
<div id="myChart" style="width:100%; max-width:600px; height:500px;">>
</div>

<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([

            ['Danh Mục', 'Số Lượng Sản Phẩm'],
            <?php
            $tongdm = COUNT($listthongke);
            $i=1;
                foreach ($listthongke as $tk){
                    extract($tk);
                    echo "['".$tk['tendm']."',".$tk['COUNTSP']."],";
                    $i+=1;
                }
            ?>
            
        ]);

        var options = {
            title: 'Thống kê sản phẩm theo danh mục',
            is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('myChart'));
        chart.draw(data, options);
    }
</script>

</div>
</div>
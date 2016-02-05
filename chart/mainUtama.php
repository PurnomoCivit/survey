<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
require("classSaran.php");
if($_SESSION['lvl_user']==''){
    header("location:index.php");
}
?><html>
    <head>
        <title>Survey Kepuasaan Pasien di RS. X</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="../bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
       
        <script type="text/javascript" src="../bootstrap-3.3.5-dist/js/jquery-2.1.4.min.js"></script>
       
        <script type="text/javascript" src="../bootstrap-3.3.5-dist/js/load.js"></script>
        
        <style>
            body{
                padding-top: 50px;
            }
            
      
     .container-fluid{
         padding-left: 175px;
         padding-top: 15px;    
     }
        </style>
        <script type="text/javascript">
$(function () {
    $('#container5').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Tahunan Kepuasaan Pasien Rumah Sakit X'
        },
        xAxis: {
            categories: [
                '2013',
                '2014',
                '2015'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Penilaian'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Admission',
            data: [49.9, 71.5, 106.4]

        }, {
            name: 'Akses',
            data: [83.6, 78.8, 98.5]

        }, {
            name: 'Dokter Anda',
            data: [48.9, 38.8, 39.3]

        }]
    });
    
});

$(function () {
    $('#container4').highcharts({
        title: {
            text: 'Grafik Bulanan Kepuasan Pasien di Rumah Sakit X',
            x: -20 //center
        },
        
        xAxis: {
            categories: ['Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Total Penilaian'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
       
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Submission',
            data: [14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3]
        }, {
            name: 'Akses',
            data: [11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1]
        }, {
            name: 'Dokter Anda',
            data: [8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0]
        }]
    });
});

		</script> 
    </head>
    <body>
        <header>
           <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                   <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
                       <span class="sr-only">Toggle Navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                       <a href="mainUtama.php" class="navbar-brand">Survey Kepuasan Pasien Rumah Sakit X</a>
                   </div>
                   
           </nav>	   
        </header>
        <div class="pull-left text-center">
                <div class="list-group">
                    <div class="menu">
                    <a href="main.php?id=home" class="list-group-item active list-group-item-success">Home</a>
                    <a href="main.php?id=grafik-kepuasan" class="list-group-item list-group-item-info">Grafik Kepuasan</a>
                    <a href="main.php?id=kritik-saran" class="list-group-item list-group-item-warning">Kritik & Saran</a>
                    </div>
                    <a href="logOut.php" class="list-group-item list-group-item-success">Log Out</a>
                    
                    
                </div> 
            </div>
            <div id="main">
        <div class="container text-center">
            <h2>Selamat datang, <?php echo $_SESSION['nm_user'];?> di Aplikasi Penilaian Kepuasan Pasien di Rumah Sakit X</h2>
        </div>
        </div>
        <hr>
        <footer class="panel-footer">
                    &copy; Copyright 2015
        </footer>
        <script src="../Highcharts-4.2.1/js/highcharts.js"></script>
        <script src="../Highcharts-4.2.1/js/modules/exporting.js"></script>
        <script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../bootstrap-3.3.5-dist/js/grafik.js"></script>
    </body>
</html>

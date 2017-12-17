<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Content Header (Page header) -->
<head>
    <link href="<?php echo base_url('asset/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
	
</head>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>  
<script type="text/javascript" src="<?php echo base_url('assets/js/highcharts.js');?>"></script>

<div id="container" style="width: 1050px;"></div>
			
<script type="text/javascript">
var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'GRAFIK DATA YUDISIUM'
    },

    subtitle: {
        text: '5 TAHUN'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['2013', '2014', '2015', '2016', '2017'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Jumlah Mahasiswa'
        }
    },

    series: [{
        name: 'Belum Yudisium',
        data: [<?php foreach($report_belum1 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum2 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum3 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum4 as $data){ echo $data->nilai; } ?>,<?php foreach($report_belum5 as $data){ echo $data->nilai; } ?>]
    }, {
        name: 'Sudah Yudisium',
        data: [<?php foreach($report_sudah1 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah2 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah3 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah4 as $data){ echo $data->nilai; } ?>,<?php foreach($report_sudah5 as $data){ echo $data->nilai; } ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

</script>


<script src="<?php echo base_url('asset/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js') ?>" type="text/javascript"></script>
<!-- FastClick -->
<script src='<?php echo base_url('asset/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('asset/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>

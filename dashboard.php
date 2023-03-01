<?php
include("koneksi.php");
include("chart/data_chart.php");
?>

<!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Dashboard</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Wilayah</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="wilayah" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Hasil Seleksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="hasil" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Kelamin Pendaftar</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="jk_pendaftar" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <input type="hidden" name="hidden" class="data1" id="data1" value=<? include("data_chart1.php"); ?> ?>

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Kelamin Lolos Seleksi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="jk_lolos" style="height: 300px; position: relative;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function()
    {

    //DONUT CHART
    $.ajax({
            type: 'POST',
            url: 'chart/data_chart1.php',
            success: function (data) {
                //$('.result').html(data)
                 json = <? include("chart/data_chart1.php"); ?>,
                 Morris.Donut({
                    element: 'wilayah',
                    resize: true,
                    colors: ["#3c8dbc", "#00a65a"],
                    data: json,
                    hideHover: 'auto'
                  });
                  }
                });

    //DONUT CHART
    $.ajax({
            type: 'POST',
            url: 'chart/data_chart4.php',
            success: function (data) {
                //$('.result').html(data)
                 json = <? include("chart/data_chart4.php"); ?>,
                 Morris.Donut({
                    element: 'hasil',
                    resize: true,
                    colors: ["#00a65a", "#f56954"],
                    data: json,
                    hideHover: 'auto'
                  });
                  }
                });

    //DONUT CHART
    $.ajax({
            type: 'POST',
            url: 'chart/data_chart2.php',
            success: function (data) {
                //$('.result').html(data)
                 json = <? include("chart/data_chart2.php"); ?>,
                 Morris.Donut({
                    element: 'jk_pendaftar',
                    resize: true,
                    colors: ["#3c8dbc", "#f56954"],
                    data: json,
                    hideHover: 'auto'
                  });
                  }
                });
    //DONUT CHART
    $.ajax({
            type: 'POST',
            url: 'chart/data_chart3.php',
            success: function (data) {
                //$('.result').html(data)
                 json = <? include("chart/data_chart3.php"); ?>,
                 Morris.Donut({
                    element: 'jk_lolos',
                    resize: true,
                    colors: ["#3c8dbc", "#f56954"],
                    data: json,
                    hideHover: 'auto'
                  });
                  }
                });
              });
</script>
<!--script>
  $(function () {
    "use strict";

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'wilayah',
      resize: true,
      colors: ["#3c8dbc", "#00a65a"],
      data: [
        {label: "Malang Raya", value: <? echo $dlm_kota; ?>},
        {label: "non-Malang Raya", value: <? echo $luar_kota; ?>}
      ],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'hasil',
      resize: true,
      colors: ["#00a65a", "#f56954"],
      data: [
        {label: "Lolos", value: <? echo $lolos_hasil; ?>},
        {label: "Gagal", value: <? echo $gagal_hasil; ?>}
      ],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'jk_pendaftar',
      resize: true,
      colors: ["#3c8dbc", "#f56954"],
      data: [
        {label: "Laki - laki", value: <? echo $laki; ?>},
        {label: "Perempuan", value: <? echo $perempuan; ?>},
      ],
      hideHover: 'auto'
    });
    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'jk_lolos',
      resize: true,
      colors: ["#3c8dbc", "#f56954"],
      data: [
        {label: "Laki - Laki", value: <? echo $laki_lolos_hasil; ?>},
        {label: "Perempuan", value: <? echo $perempuan_lolos_hasil; ?>}
      ],
      hideHover: 'auto'
    });
  });
</script-->
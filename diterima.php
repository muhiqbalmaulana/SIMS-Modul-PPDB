  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <section class="content-header">
      <h1>
        <b>Admin</b>LTE
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">         
    <div class="col-md-12">
          <!-- /.box -->

          <div class="box box-primary table-responsive">
            <div class="box-header with-border">
              <i class="fa fa-mail-forward"></i><h3 class="box-title"><b>Outbox</b></h3>
        <div class="cols-xs-3" style="width:208px;">
        <!--a data-toggle="modal" data-target="#Tambah">
        <button type="button" class="btn btn-block btn-success" style="width:130px;margin-top:10px;"><i class="fa fa-plus"><span style="font-family:tahoma;">
        Tambah Siswa </span></i> </button> </a-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th rowspan="2"><center>No</center></th>
                    <th rowspan="2"><center>NISN</center></th>
                    <th rowspan="2"><center>Nama</center></th>
                    <th rowspan="2"><center>Alamat</center></th>
                    <th colspan="4"><center>Nilai</center></th>
                    <th rowspan="2"><center>Action</center></th>
                  </tr>
                  <tr>
                    <th><center>B.Ind</center></th>
                    <th><center>B.Ing</center></th>
                    <th><center>Matematika</center></th>
                    <th><center>IPA</center></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  include ('koneksi.php');
                  $qu=mysql_query("SELECT * FROM siswa where status='1'");
                  $no=0;
                          while($r_tampil=mysql_fetch_array($qu)){
                    $no++;
                  echo "<tr>
                    <td>$no</td>
                    <td>$r_tampil[nisn]</td>
                    <td>$r_tampil[nama]</td>
                    <td>$r_tampil[alamat]</td>
                    <td>$r_tampil[bind]</td>
                    <td>$r_tampil[bing]</td>
                    <td>$r_tampil[matematika]</td>
                    <td>$r_tampil[ipa]</td>
                    <td>
                        <a href='#' class='open_modal' id='$r_tampil[nis]'><span data-placement='top' data-toggle='tooltip' title='Update'><button class='btn btn-primary btn-xs' style='margin-left:10px;margin-right:10px;'><span class='glyphicon glyphicon-pencil'> UPDATE</span></button></span></a>
                        <input type='checkbox' class='flat-red'>
                    </td> 
                    </tr>";}
                  ?>
                </tbody>
                <tfoot>
                <tr>
                    <th><center>No</center></th>
                    <th><center>NISN</center></th>
                    <th><center>Nama</center></th>
                    <th><center>Alamat</center></th>
                    <th colspan="4"><center>Nilai</center></th>
                    <th><center>Action</center></th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <!--tambah Siswa-->
        <div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user" style="margin-right:10px;"></i>Tambah Data Siswa</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="tambah.php">
              <div class="box-body">
                    <div class="form-group">
                  <label class="col-sm-2 control-label">NIS</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="NIS" name="nis" style="width:200px;" required>
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Nama"name="nama" required>
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="ttl" style="width:200px;"required>
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-10" style="margin-top:10px;">
                  <input type="radio" class="flat-red" name="kelamin" value="Laki-Laki"> Laki-Laki</input>
                  <input type="radio" class="flat-red" name="kelamin" value="Perempuan" style="margin-left:30px;"> Perempuan</input>
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Asal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="asal" placeholder="Asal" required>
                </div>
                </div>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger pull-left" data-dismiss="modal" style="padding:10px;">Cancel</button>
                  <button type="submit" class="btn btn-primary" style="padding:10px;">Tambah</button>
                </div>
              </form>           
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
</script>
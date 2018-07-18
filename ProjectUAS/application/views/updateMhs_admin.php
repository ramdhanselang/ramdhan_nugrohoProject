<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>/assets/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>/assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><b>SIAKAD <font color="#00cccc">PROJECT</font></b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-group"></i>
            <span class="nav-link-text">Mahasiswa</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url('index.php/Admin_Mhs') ?>">Biodata Mahasiswa</a>
            </li>
            <li>
              <a href="cards.html">Nilai Mahasiswa</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      </div>
      <center><h1>BIODATA MAHASISWA</h1></center><br>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
      <div class="container-fluid">
      <h3 style="font-family: 'Open Sans', sans-seri; color: #25993C" ><?php echo $sekolah['namaSkl'] ?> / <?php echo $mahasiswa[0]->namaMhs?></h3>
      </div>
      </div>
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <h4 class="form-section">Data Diri</h4>
      </ol>
      </div>
        <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="date" class="form-control" name="" >
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="tglLahirMhs" placeholder="Kota Lahir" >
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="NIK">
        </div>
      </div>
      <p>
      <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <select class="form-control">
            <option>Agama</option>
            <option>Islam</option>
          </select>
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <select class="form-control">
            <option>Jenis Kelamin</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="No Hp">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Email">
        </div>
      </div>
      </p>
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <h4 class="form-section">Data Sekolah</h4>
      </ol>
      </div>
        <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Nama Sekolah">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Jurusan">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="NISN">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="Nilai UN">
        </div>
      </div>
      <p>
      <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="Jumlah Mata Pelajaran">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Kota">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Provinsi">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="Kode Pos">
        </div>
      </div>
      </p>
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <h4 class="form-section">Data Keluarga</h4>
      </ol>
      </div>
        <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Nama Ayah Kandung">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="NIK Ayah Kandung">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="Nama Ibu Kandung">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="NIK Ibu Kandung">
        </div>
      </div>
      <p>
      </p>
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <h4 class="form-section">Data Domisili</h4>
      </ol>
      </div>
        <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Alamat">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="RT">
        </div>
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="RW">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Kelurahan">
        </div>
      </div>
      <p>
      <div class="form-inline col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <label>&nbsp;</label>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Kecamatan">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Kota">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="text" class="form-control" name="" placeholder="Provinsi">
        </div>
        <div class="form-group">
          <label>&nbsp;</label>
          <label>&nbsp;</label>
          <input type="number" class="form-control" name="" placeholder="Kode Pos">
        </div>
      </div>
      </p>
      <div class="container-fluid">
      <button class="btn btn-primary">Simpan</button>
      </div>
      <br>
    </div>
    </div>
    </div>
      
      
      <!-- Icon Cards-->
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>
</html>
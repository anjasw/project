<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->

    <link href="../assets/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  					<div class="navbar-header">
  							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  									<span class="sr-only">Toggle navigation</span>
  									<span class="icon-bar"></span>
  									<span class="icon-bar"></span>
  									<span class="icon-bar"></span>
  							</button>
  							<a class="navbar-brand" href="#">Admin Service Fire Alarm</a>
  					</div>
  					<!-- /.navbar-header -->

  					<ul class="nav navbar-top-links navbar-right">
  							<!-- /.dropdown -->
  							<li class="dropdown">
  									<a class="dropdown-toggle" data-toggle="dropdown" href="#">
  											<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
  									</a>
  									<ul class="dropdown-menu dropdown-user">
  											<li><a href="#"><i class="fa fa-user fa-fw"></i> Admin</a>
  											</li>
  											<li><a href="../tambah_admin.php"><i class="fa fa-plus fa-fw"></i> Admin</a>
  											</li>
  											<li class="divider"></li>
  											<li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  											</li>
  									</ul>
  									<!-- /.dropdown-user -->
  							</li>
  							<!-- /.dropdown -->
  					</ul>
  					<!-- /.navbar-top-links -->

  					<div class="navbar-default sidebar" role="navigation">
  							<div class="sidebar-nav navbar-collapse">
  									<ul class="nav" id="side-menu">
  											<li class="sidebar-search">
  													<div class="input-group custom-search-form">
  															<input type="text" class="form-control" placeholder="Search...">
  															<span class="input-group-btn">
  															<button class="btn btn-default" type="button">
  																	<i class="fa fa-search"></i>
  															</button>
  													</span>
  													</div>
  													<!-- /input-group -->
  											</li>
  											<li>
  													<a href="../list/"><i class="fa fa-list fa-fw"></i> List Jasa Serice</a>
  											</li>
  											<li><a href="#"><i class="fa fa-phone fa-fw"></i>Contact Pekerja</a></li>

  									</ul>
  							</div>
  							<!-- /.sidebar-collapse -->
  					</div>
  					<!-- /.navbar-static-side -->
  			</nav>

        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <legend><center>Daftar Contact yang tersedia</center></legend>
                        </div>
                        <br>
                        <center><a href="tambah.php" class="btn btn-primary">Tambah Kontak</a></center>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-lg-1"><center>No</center></th>
                                        <th class="col-lg-3"><center>Nama</center></th>
                                        <th class="col-lg-3"><center>No Telepon</center></th>
                                        <th class="col-lg-3"><center>No Whatsapp</center></th>
                                        <th colspan="2" class="col-lg-2"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  include "../koneksi.php";

                                  $query = "SELECT * FROM contact"; // Query untuk menampilkan semua data siswa
                                  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
                                  $no=1;
                                  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                                ?>
                                <tr class="success">
                                  <td><center><?php echo $no++; ?></center></td>
                                  <td><center></center><?php echo $data['nama'] ?></td>
                                  <td><center></center><?php echo $data['no_telepon'] ?></td>
                                  <td><center></center><?php echo $data['no_wa'] ?></td>
                                  <td><center><a href='edit.php?id=<?php echo $data['id']?>' class='btn btn-info  glyphicon glyphicon-edit'></a></center></td>
                                  <td><center><a href='hapus.php?id=<?php echo $data['id'] ?>' class='btn btn-danger  glyphicon glyphicon-trash'></a></center></td>
                                </tr>
                              <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>

                        <!-- /.row -->
                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <legend><center>Manage Komentar</center></legend>
                        </div>
                        <br>
                        <center><a href="tambah.php" class="btn btn-primary">Tambah Komentar</a></center>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="col-lg-1"><center>No</center></th>
                                        <th class="col-lg-3"><center>Nama</center></th>
                                        <th class="col-lg-3"><center>Email</center></th>
                                        <th class="col-lg-4"><center>Komentar</center></th>
                                        <th class="col-lg-1"><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php

                                  $select = "SELECT * FROM komentar"; // Query untuk menampilkan semua data siswa
                                  $sql2 = mysqli_query($connect, $select); // Eksekusi/Jalankan query dari variabel $query
                                  $no=1;
                                  while($komen = mysqli_fetch_array($sql2)){ // Ambil semua data dari hasil eksekusi $sql
                                ?>
                                <tr class="success">
                                  <td><center><?php echo $no++; ?></center></td>
                                  <td><center></center><?php echo $komen['nama'] ?></td>
                                  <td><center></center><?php echo $komen['email'] ?></td>
                                  <td><center></center><?php echo $komen['komentar'] ?></td>
                                  <td><center><a href='hapus_komen.php?id=<?php echo $komen['id'] ?>' class='btn btn-danger  glyphicon glyphicon-trash'></a></center></td>
                                </tr>
                              <?php } ?>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

<!-- Import Javascript -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="../assets/vendor/metisMenu/metisMenu.min.js"></script>
  <!-- DataTables JavaScript -->
  <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="../assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
  <script src="../assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="../assets/dist/js/sb-admin-2.js"></script>
</body>
</html>

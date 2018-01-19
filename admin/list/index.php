<?php
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../login.php");
}
?>
<html>
<head>
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
													<a href="#"><i class="fa fa-list fa-fw"></i> List Jasa Serice</a>
											</li>
											<li><a href="../contact/"><i class="fa fa-phone fa-fw"></i>Contact Pekerja</a></li>

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
                            <h3><center>Tabel Jasa Service</center></h3>
                        </div>
												<br>
												<!-- /.panel-heading -->
												<center><a href="form_simpan.php" class="btn btn-primary">Tambah List</a></center>

												<div class="panel-body">
													<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
													<thead>
													<tr>
														<th>No</th>
														<th class="col-lg-4 text-center">Foto</th>
														<th class="col-lg-3 text-center">Nama</th>
														<th class="col-lg-4 text-center">Keterangan</th>
														<th colspan="2">Aksi</th>
													</tr>
												</thead>
												<tbody>


													<?php
													// Load file koneksi.php
													include "koneksi.php";
													$query = "SELECT * FROM list"; // Query untuk menampilkan semua data siswa
													$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
													$no=1;
													while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
														echo "<tr>";
														echo "<td>".$no++."</td>";
														echo "<td class='col-lg-4'><img src='images/".$data['foto']."' width='100%' height='100'></td>";
														echo "<td class='col-lg-3 text-center'>".$data['nama']."</td>";
														echo "<td class='col-lg-4 text-center'>".$data['keterangan']."</td>";
														echo "<td class='text-center'><a href='form_ubah.php?id=".$data['id']."' class='btn btn-info glyphicon glyphicon-edit'></a></td>";
														echo "<td><a href='proses_hapus.php?id=".$data['id']."' class='btn btn-danger glyphicon glyphicon-trash'></a></td>";
														echo "</tr>";
													}
													?>
													</tbody>
													</table>
												</div>
											<!-- /.panel-body -->
									</div>
									<!-- /.panel -->
							</div>
							<!-- /.col-lg-12 -->
					</div>

<script src="../assets/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../assets/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../assets/vendor/raphael/raphael.min.js"></script>
<script src="../assets/vendor/morrisjs/morris.min.js"></script>
<script src="../assets/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../assets/dist/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>

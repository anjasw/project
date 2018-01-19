<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  	<!-- MetisMenu CSS -->
  	<link href="assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  	<!-- Custom CSS -->

  	<link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">
  	<!-- Morris Charts CSS -->

  	<link href="assets/vendor/morrisjs/morris.css" rel="stylesheet">
  	<!-- Custom Fonts -->
  	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<div class="col-lg-4">

</div>
<div class="col-lg-4">
  <form action="proses_tambah_admin.php" method="post">
    <h3 align="center">Regist Admin</h3>
    <div class="form-group" align="center">
      <label for="nama">Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
    </div>
    <div class="form-group" align="center">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" placeholder="Masukan Username Admin">
    </div>
    <div class="form-group" align="center">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control" placeholder="Masukan Password Admin">

    </div>


    <button type="submit" name="daftar" class="btn btn-info btn-block">Daftar</button>


  </form>

</div>


    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="assets/vendor/raphael/raphael.min.js"></script>
    <script src="assets/vendor/morrisjs/morris.min.js"></script>
    <script src="assets/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/dist/js/sb-admin-2.js"></script>
  </body>
</html>

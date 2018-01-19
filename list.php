<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar Service</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <script src="assets/js/modernizr.js"></script>
  </head>
  <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Service Fire Alarm</a>
            </div>
            <div class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="index.php">HOME</a></li>
                <li class="active"><a href="list.php">LIST</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="admin/list/">LOGIN</a></ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>
<!--Konten -->



<div class="container mtb">
	 	<div class="row centered">
		 	<h3 class="mb">Daftar Jasa Service<hr></h3>
      <?php
      // Load file koneksi.php
      include "admin/koneksi.php";

      $query = "SELECT * FROM list"; // Query untuk menampilkan semua data siswa
      $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query

      while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
      ?>
      <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-5">
        <img src="admin/list/images/<?php echo $data['foto'] ?>" width="85%" alt="">
      </div>
      <div class="col-lg-5">
		 		<h4><?php echo $data['nama'] ?></h4>
		 		<p align="justify"><?php echo $data['keterangan'] ?></p>
		 		<p align="right"><a href="contact.php" class="btn btn-theme">Pesan</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

    <?php } ?>
<br><br>
  </div>
</div>
<div id="footerwrap">
 <div class="container">
   <div class="row">
     <div class="col-lg-6">
       <h4>Social Links</h4>
       <div class="hline-w"></div>
       <p>
         <a href="#"><i class="fa fa-facebook"></i></a>
         <a href="#"><i class="fa fa-instagram"></i></a>
       </p>
     </div>
     <div class="col-lg-6">
       <h4>Alamat Kami</h4>
       <div class="hline-w"></div>

       <p>
         Jl. letnan ibrahim adjie (Sindang Barang)<br>
         Kecamatan Bogor Barat <br>
         Kabupaten Bogor <br>
         Provinsi Jawa Barat
       </p>
     </div>

   </div><! --/row -->
 </div><! --/container -->
</div><! --/footerwrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/retina-1.1.0.js"></script>
<script src="assets/js/jquery.hoverdir.js"></script>
<script src="assets/js/jquery.hoverex.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>

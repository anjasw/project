<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Service Fire Alarm</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <li><a href="list.php">LIST</a></li>
                <li class="active"><a href="#">CONTACT</a></li>
                <li><a href="admin/list/">LOGIN</a></ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>


	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->


	<!-- *****************************************************************************************************************
	 CONTACT WRAP
	 ***************************************************************************************************************** -->
<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.558387903904!2d106.75498051440299!3d-6.577280466124919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4f2016bdfc1%3A0xd695373ff52d2934!2sPool+Bis+Kehutanan!5e0!3m2!1sid!2sid!4v1507390378250" width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center
	<!-- *****************************************************************************************************************
	 CONTACT FORMS
	 ***************************************************************************************************************** -->
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="co-lg-4">
      </div>
      <?php
      include 'admin/koneksi.php';
      $tampil = mysqli_query($connect, "SELECT * FROM contact");
      while($contact=mysqli_fetch_array($tampil)){
      ?>
      <div align="center" class="co-lg-4">

      <div class="fa fa-user">
        <p><?php echo $contact['nama'] ?></p>
      </div><br>
      <div class="glyphicon glyphicon-phone-alt">
        <p><?php echo $contact['no_telepon'] ?></p>
      </div><br>
      <div class="glyphicon glyphicon-comment">
        <p><?php echo $contact['no_telepon'] ?></p>
      </div>

      </div>
    <?php } ?>
      </div>
    </div>

  </div>
</div>
	 <div class="container mtb">
	 	<div class="row">

      <div class="col-lg-4">
        <?php

        $select = mysqli_query($connect,"SELECT * FROM komentar");
        while ($data=mysqli_fetch_array($select)) {
        ?>
        <!-- komentar  yang ada  -->
        <blockquote>
          <p><?php echo $data['email']." Berkomentar : <br>".$data['komentar'] ?></p>
        </blockquote>
<?php } ?>
        <!--A= Akhir komentar  yang ada  -->
      </div>
      <div class="col-lg-4">

      </div>
	 		<div class="col-lg-4">
	 			<h4>Beri Komentar Tentang Kinerja Kami</h4>
	 			<div class="hline"></div>
          <form role="form" action="komen.php" method="post">
					  <div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" placeholder="Masukan Nama Anda" name="nama">
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukan Email Anda">
					  </div>
					  <div class="form-group">
					  	<label for="komentar">Komentar</label>
					  	<textarea class="form-control" id="message1" rows="3" name="komentar"></textarea>
					  </div>
					  <button type="submit" class="btn btn-theme "><i class="glyphicon glyphicon-pencil"></i>Komentar</button>
					</form>
			</div><! --/col-lg-8 -->

	 	</div><! --/row -->
	 </div><! --/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

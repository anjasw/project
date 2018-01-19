<!DOCTYPE html>
<html>
<head>
	<title>Login Khusus Admin</title>
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
  <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-info">
                    <div class="panel-heading"><center>
                        <h3 class="panel-title">Log In</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="proses_login.php" method="post" onSubmit="return validasi()">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" id="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" id="password">
                                </div>
                                <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-info btn-block">Login</button>
                            </fieldset>
                        </form><center>
													<br>
												<a href="../index.php" class="btn btn-danger">Kembali</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>

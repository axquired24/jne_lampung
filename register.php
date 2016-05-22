<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="AxQuired24">
	<title>Register - JNE Lampung</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
	<!-- <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" /> -->
</head>
<body class="bg-login">
	<div id="login" class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="page-header"><a href="./" title="Kembali ke halaman awal" class="btn btn-lg btn-link"><span class="glyphicon glyphicon-chevron-left"></span></a> Register Member </h1>
				</div>
				<div class="col-md-6">
					<img src="images/top_logo.png" class="img-responsive top_logo pull-right top_logo" alt="JNE Lampung">
				</div>
			</div> <!-- row -->
			<div class="row">
				<form class="form-horizontal" role="form">
				<h4 align="center" class="page-header">Login Data</h4>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				    <div class="col-sm-8">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  
				  <h4 align="center" class="page-header">Personal Data</h4>
					
					<div class="form-group">
					    <label for="nama" class="col-sm-2 control-label">Nama</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="nama" placeholder="Nama lengkap">
					    </div>
				    </div>

					<div class="form-group">
				    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="alamat" placeholder="Alamat sekarang">
					    </div>
					</div>

					<div class="form-group">
				    <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
					    <div class="col-sm-8">
					      <select name="jk" id="jk" placeholder="Jenis" Kelamin="">
					      	<option value="l">Laki-Laki</option>
					      	<option value="p">Perempuan</option>
					      </select>
					    </div>
				    </div>

					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-8">
					      <div class="checkbox">
					        <label>
					          <input type="checkbox"> Saya setuju dengan <a href="#">perjanjian</a> dari JNE Lampung
					        </label>
					      </div>
					    </div>
					  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-8">
				      <button type="submit" class="btn btn-primary">Kirim</button>
				      <br><br><span> Sudah punya <a title="Sudah punya login?" href="login.php">Login ?</a></span>
				    </div>
				  </div>
				</form> <!-- end form -->				
			</div>
		</div>
	</div> <!-- container-fluid -->
	<div class="container-fluid bg-dark">
		<div align="center" class="container">
			<span>
			<strong>Customer Care</strong> 0822-344-3333-1 / 0822-344-3333-2 <br>
			<strong>Kantor pusat</strong> Jl Tamin no 29 atau Jl Diponogoro No 77 A, Bandar Lampung <br>
			<strong>JNE Lampung Training Center</strong> Jl. Tamin no 29, Bandar Lampung Lt. 3 <br>
			</span><br>
			&copy 2015 JNE Lampung
		</div>
	</div>

<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<script src="//use.edgefonts.net/droid-sans.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="AxQuired24">
	<title>JNE Lampung</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
	<!-- <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" /> -->
</head>
<body>
	<?php // Navigate Dynamic Page
		$judul = array("Profile, Service and Network","News and Promo","Our Clients");
	?>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="./">JNE Lampung</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="./">Home</a></li>
	        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
	        	<ul class="dropdown-menu">
	        		<li><a href="more.php?judul=<?php echo $judul[0]; ?>">Profile, Service & Network</a></li>
	        		<li><a href="more.php?judul=<?php echo $judul[1]; ?>">News & Promo</a></li>
	        		<li><a href="more.php?judul=<?php echo $judul[2]; ?>">Our Clients</a></li>
	        	</ul>
	        </li>
	        <li><a href="online_booking.php?h=1">Booking Online</a></li>
	        <li><a href="contact_us.php">Contact Us</a></li>
	      </ul>
	      <ul class="nav navbar-nav pull-right">
	      	<li><a href="register.php"><span class="glyphicon glyphicon-link"></span> Daftar</a></li>
	      	<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid banner">
		<img src="images/top_logo.png" class="img-responsive top_logo pull-left" alt="JNE Lampung">
		<!-- <img src="images/banner_top.png" alt="Banner" class="img-responsive pull-right"> -->
	</div> <!-- container-fluid -->
	<div class="container-fluid bg-primary">
		<div class="container">
			<div class="col-md-4">
				<h2 class="page-header">Trace n Tracks<br>
				<small>Insert the airWayBill Number to start tracking</small></h2>
				<div>
					<textarea class="form-control" rows="8" placeholder="Maximum 20 airWayBill Number, separated by comma(,)"></textarea><br>
					<a title="go back" href="./" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<button type="submit" class="btn btn-primary">Start Track</button> 
				</div><br>
			</div>
			<div class="col-md-8">
				<h2 class="page-header">Tracking Result<br><small>Here are our result.</small></h2>
				<table class="table table-bordered table-stripped">
					<thead>
						<th>No.</th>
						<th>AWB</th>
						<th>Services</th>
						<th>Destination</th>
						<th>Consignee</th>
						<th>Data Received</th>
						<th>Receiver</th>
						<th>Status</th>
					</thead>
					<tbody>
						<tr>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
						</tr>
						<tr>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
							<td>isi</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- container -->
	</div> <!-- container-fluid bg-primary -->
	<div class="container-fluid bg-dark">
		<div align="center" class="container">
			<span>
			<strong>Customer Care</strong> 0822-344-3333-1 / 0822-344-3333-2 <br>
			<strong>Kantor pusat</strong> Jl Tamin no 29 atau Jl Diponogoro No 77 A, Bandar Lampung <br>
			<strong>JNE Lampung Training Center</strong> Jl. Tamin no 29, Bandar Lampung Lt. 3 <br>
			&copy 2015 JNE Lampung
			</span>
		</div>
	</div>

<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<script src="//use.edgefonts.net/droid-sans.js"></script>
</body>
</html>

<!-- 
http://jnelampung.wordpress.com/
- Halaman Home (tanpa Slide)
- Halaman Read More 1  + sidebar 
- Halaman Contact Us + Buku Tamu
- Form Registrasi
- Login Page
- Booking Page
 -->
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
	        <li class="active"><a href="./">Home</a></li>
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
				<h2 class="page-header">INFO JNE <br><small>What's New</small></h2>
				<div class="jne_primary"> <!-- Info JNE -->
				<?php for($i=0;$i<3;$i++){ ?>
					<h5><a href="more.php"><span class="glyphicon glyphicon-record"></span>  Title Lorem ipsum</a><br>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ex quia, consectetur est.. <br><a href="more.php" class="btn btn-xs btn-primary">more</a>
					</h5></span>
				<?php }; ?>
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="page-header">Trace n Tracks<br>
				<small>Insert the airWayBill Number to start tracking</small></h2>
				<div>
					<form action="track_result.php" role="form">
					<textarea class="form-control" rows="8" placeholder="Maximum 20 airWayBill Number, separated by comma(,)"></textarea><br>
					<button type="submit" class="btn btn-primary">Start Track</button>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<h2 class="page-header">Tariff Check <br><small>Fill this required fields first</small></h2>
				<div>
					<form action="" role="form">
						<div class="form-group"><label for="input">From</label><input type="text" id="idInput" class="form-control" placeholder="City Name"></div>
						<div class="form-group"><label for="input">To</label><input type="text" id="idInput" class="form-control" placeholder="City Name"></div>
						<div class="form-group"><label for="input">Weight(Kg)</label><input type="text" id="idInput" class="form-control" placeholder="Number Only"></div>
						<button class="btn btn-primary" type="submit" onclick="alert('Tariff: Rp. 20.000,-')">Check Tariff</button>
					</form>
				</div>
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
<?php // Inisialisasi
	
	// Navigate Dynamic Page
	$judul = array("Profile, Service, Network","News and Promo","Our Clients");
	
	$pjudul = $_GET[judul];
	if(empty($pjudul)){
		$pjudul = "Lorem Ipsum";
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="AxQuired24">
	<title><?php echo $pjudul; ?> - JNE Lampung</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
	<!-- <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" /> -->
</head>
<body>
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
	      <a class="navbar-brand" href="#">JNE Lampung</a>
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
		<div class="container"><h1 class="page-header col-md-6"><?php echo $pjudul; ?></h1></div>
	</div> <!-- container-fluid -->
	<div class="container-fluid bg-primary">
		<div class="container">
			<div class="col-md-8">
				<h2>"<?php echo $pjudul; ?>" <br>
				<small><span class="glyphicon glyphicon-user"></span> Posted by : Admin on 24 September 1995 | Category <span class="label label-info">Promo</span>  </small></h2>
				<div class="jne_primary"> <!-- Info JNE -->
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa neque, quae tempore soluta delectus eum iure. Nam, hic perferendis vel mollitia ipsum dolore quos fuga, omnis nemo reprehenderit saepe iusto. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, praesentium facilis dolore. Quibusdam consectetur illo aspernatur ipsam corporis sint nobis deleniti, exercitationem tempora ratione, architecto eos earum accusamus laudantium temporibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt tempora earum eaque provident vitae ipsum explicabo distinctio voluptatem sequi reiciendis velit hic, repudiandae, expedita facilis porro dolor, deleniti? Accusamus, quasi! 
					</p>
					<img src="images/content-image1.jpg" alt="Content" class="img-responsive">
					<p>
					 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laboriosam impedit veritatis commodi, quibusdam at nam, fuga dolorum aut reiciendis magni. Iusto veniam, eos, saepe numquam quasi sed voluptatem suscipit! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tempora placeat quidem molestiae, harum necessitatibus atque, officia. Totam recusandae, deleniti consequuntur illum deserunt consequatur placeat, quas sapiente, dolor molestias quaerat.</p>
					 <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, quaerat asperiores. Accusamus consequuntur iure, quis molestiae aliquam dicta, deleniti ut provident tempora quasi! Tempore rem, veritatis molestias, odit assumenda molestiae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque repellendus fugit animi, vero quod enim! Numquam excepturi, laborum corporis sed libero est, nemo natus suscipit veniam aspernatur minima tempore labore! </p>
				</div>
			</div>
			<div class="col-md-4 bg-primary-sidebar">
				<h2>More<br>
				<small>You May see</small></h2>
				<div class="primary-sidebar">
				<ul>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
					<li><a href="#">Lorem ipsum dolor sit amet, elit consectetur adipisicing.</a> <br> <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit...</small></li>
				</ul><br>
					<div align="center">
						<div class="btn-group">
							<a href="" class="btn btn-primary" title="Share"> <span class="glyphicon glyphicon-bullhorn"></span> </a>
							<a href="#" title="Share via Facebook" class="btn btn-primary">Facebook</a>
							<a href="#" title="Share via Google+" class="btn btn-danger">Google+</a>
							<a href="#" title="Share via Twitter" class="btn btn-info">Twitter</a>
						</div>
					</div>
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
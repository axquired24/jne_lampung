<?php // Manual height based on page
	$h = $_GET[h];
	if($h == 1){
		$classAdd = "left-side-special-class";
	}
	else{
		$classAdd = "left-side-special-class2";
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
	<title>JNE Lampung</title>
    
    <!-- BS3 Core CSS -->
    <link href="../bs3_dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
	<!-- <link href="../bs3_dist/css/bootstrap-theme.min.css" rel="stylesheet" /> -->
</head>
<body class="bg-login">
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
	      <a class="navbar-brand" href="./">JNE Online Booking</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav pull-right">
	      	<li><a href="#"><span class="glyphicon glyphicon-user"></span> AxQuired L</a></li>
	      	<li class="active"><a href="#">ID</a></li>
	      	<li><a href="#">EN</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 left-side <?php echo $classAdd; ?>">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="?h=1"><span class="glyphicon glyphicon-tag"></span> Sekali Transaksi</a></li>
					<li><a href="?h=2"><span class="glyphicon glyphicon-tags"></span> Multi Transaksi</a></li>
					<li><a href="?h=3"><span class="glyphicon glyphicon-tasks"></span> Riwayat Booking</a></li>
					<li><a href="?h=4"><span class="glyphicon glyphicon-cog"></span> Pengaturan</a></li>
					<li><a href="?h=5"><span class="glyphicon glyphicon-home"></span> Daftar Outlet JNE</a></li>
					<li><a href="./"><span class="glyphicon glyphicon-off"></span> Keluar</a></li>
				</ul>
			</div>
			<div class="col-md-9 right-side">.
				<?php
					// Include
					$book = "book_".$_GET[h];
					if(!empty($book)){
						include($book.".php");
					}
					else{
						echo "<h2 align='center'>Page Not Found</h2>";					
					}
				?>
			</div>
		</div>
	</div>
	<div class="footer">
		&copy 2015 JNE Lampung - Online Ticketing
	</div>
<script src="../bs3_dist/js/jquery.js"></script>
<script src="../bs3_dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(".form-control").tooltip();
	$("#axtab a").click(function(e){
		e.preventDefault()
		$(this).tab("show")
	})
</script>
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
<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Tim</title>
	<link rel="shortcut icon" href="images\logologo1.png">
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css\stil2.css" />
<style>
</style>
</head>
<body>
    <?php session_start(); if( isset($_SESSION['ime']) )
    die(header("Location: Naslovna.php"));?>
	<!-- header -->
	<header>
	<div class="header" align="center">
		<div class="header7">
			<div class="row">
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
				<li class="dropdown">
					<div data-toggle="dropdown"><button id="login-bu">PRIJAVA</button></div>
					<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
										 <font size="4" color="white">Prijava</font>
										 <form action="login.php" method="POST">
													 <label class="sr-only" for="exampleInputEmail2">Email adresa</label><br>
													 <input type="email" id="inputEmail" class="form-control" name="Email" placeholder="Email address" required>
													 <label class="sr-only" for="exampleInputPassword2">Password</label><br>
													 <input type="password" id="inputPassword" class="form-control" name="Sifra" placeholder="Password" required>
													 <div class="help-block text-right"><a href="Forgot.php">Zaboravili ste sifru?</a></div>
													 <button type="submit" class="btn btn-primary btn-block">Prijavi se</button><br>
													 <a href="Registracija.php" class="btn btn-danger btn-block">Registracija</a><br>
										 </form>	
									</div>
					 </div>
				</li>
			</ul>
        </li>
			</div>
		</div>
	</div>
		<div class="header6">
			<span class="ZvanicniSajt">
				<img src="images\logo.jpg" width="700px" height="250px">
			</span>
		</div>
	</div>
	<!-- navbar -->
	<nav class="navbar navbar-inverse">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <div class="logologo">
			<a href="Naslovna.php"><img src="images\logologo.jpg" height="55px" width="90px"><img src="images\logoFK.png" height="55px"></a>
              <a href="Prijava1.php"><span class="glyphicon glyphicon-user"></span></a>
          </div>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav">
		   	<li><a href="Naslovna.php">POCETNA</a></li>
			<li><a href="Vesti.php">VESTI</a></li>
			<li><a href="Istorija.php">ISTORIJA</a></li>
			<li><a href="Rezultati.php">REZULTATI</a></li>
			<li class="active"><a href="Tim.php">TIM</a></li>
			<li><a href="Rezervacija.php">REZERVACIJA</a></li>
			<li><a href="Kontakt.php">KONTAKT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	</header>
	
	<div class="container">
		<div class="jumbotron">
			<div class="row">
			<div class="Istorija"><font face="Bernard MT Condensed" size="6">PRVI TIM</font></div><br>
			<div class="col-md-2"><font class="timfont">Golmani</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\1.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p class="Ime" style="margin-left:10px">Danilo Kostic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\2.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Bulajic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"><font class="timfont">Odbrana</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\3.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nenad Manic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\4.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milos Potic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\5.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nikola Simic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\6.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nenad Manic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-2">
				<img src="images\Tim\7.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Antic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\8.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Dusan Jovic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\9.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Nemanja Milic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"><font class="timfont">Sredina</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\10.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Ivan Jovic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\11.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Bojan Veljic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\12.jpg" class="img-fluid" alt="Responsive image"    width="350px" height="400px"><p style="margin-left:10px">Milan Cenic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\13.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Darko Panic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-2">
				<img src="images\Tim\14.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Vuk Tosic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\15.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Milos Tosic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"><font class="timfont">Napad</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\21.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Vuk Tomic<p></div>
				<div class="col-md-2">
				<img src="images\Tim\17.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Uros Djuric<p></div>
				<div class="col-md-2">
				<img src="images\Tim\18.jpg" class="img-fluid" alt="Responsive image"   width="350px" height="400px"><p style="margin-left:10px">Denis Ristov<p></div>
				<div class="col-md-2">
				<img src="images\Tim\19.jpg" class="img-fluid" alt="Responsive image"   width="350px" height="400px"><p style="margin-left:10px">Vuk Tomic<p></div>
			</div>
			<font face="Bernard MT Condensed" size="6">STRUCNI STAB</font>
			<div class="row">
			<div class="col-md-2"><br><font class="timfont">Predsednik kluba</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\22.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Nenad Joncic<p></div>
			</div>
			<div class="row">
			<div class="col-md-2"><br><font class="timfont">Trener</font><br></div>
				<div class="col-md-2">
				<img src="images\Tim\23.jpg" class="img-fluid" alt="Responsive image"  width="350px" height="400px"><p style="margin-left:10px">Goran Petric<p></div>
			</div>
			</div>
		</div>
	</div>
	
		<script type="text/javascript">
	// create the back to top button
	$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

	var amountScrolled = 300;

	$(window).scroll(function() {
		if ( $(window).scrollTop() > amountScrolled ) {
			$('a.back-to-top').fadeIn('slow');
		} else {
			$('a.back-to-top').fadeOut('slow');
		}
	});

	$('a.back-to-top, a.simple-back-to-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 700);
		return false;
	});
	</script>

	
	<!-- Footer -->
		<div align="center">
			<div class="footer">
				<img src="images\s1.png">
				<p><font size="4" color="black">Copyright&copy; 2016-2017 FK Pobeda</font></p>
			</div>
		</div>
</body>
</html>
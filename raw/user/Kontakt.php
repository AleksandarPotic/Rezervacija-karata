<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Kontakt</title>
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
    die(header("Location: NaslovnaL.php"));?>
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
			<li><a href="Tim.php">TIM</a></li>
			<li><a href="Rezervacija.php">REZERVACIJA</a></li>
			<li class="active"><a href="Kontakt.php">KONTAKT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	</header>
	
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="Istorija"><font face="Bernard MT Condensed" size="6">KONTAKT</font></div><br>
				<div class="col-sm-4">
				<div><font face="Bernard MT Condensed" size="5">Osnovni podaci</font></div><br>
				<font face="Arial" size="4">Adresa: Drzina, Pirot<br>Mesto: 18300 Pirot<br>Osnovan: 1964<br>Opstina: Pirot<br>Okrug: Pirotski okrug<br>Telefon: 010/000-000</font>
				</div>
				<div class="col-sm-4">
				<div><font face="Bernard MT Condensed" size="5">Pisite nam</font></div><br>
				<form action="komentar.php" method="POST">
					Ime:<input type="text" class="form-control" size="20" name="Ime" required>
					E-mail:<input type="email" class="form-control" size="20" name="Email" required>
					Telefon:<input type="text" class="form-control" size="20" name="Telefon" required><br>
					<textarea name="Komentar" type="text" class="form-control" cols="32" rows="5" required></textarea><br>
					<input class="btn btn-primary" type="submit" value="Potvrdi">
					<input class="btn btn-danger" type="reset" value="Obrisi">
				</form>
				</div>
				<div class="col-sm-4">
				<div><font face="Bernard MT Condensed" size="5">Lokacija kluba i stadiona</font></div><br>
					<div class="embed-responsive embed-responsive-4by3">
					<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1254.6385616998111!2d22.59310471305639!3d43.14517065899693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2srs!4v1484954005655"></iframe>
					</div>
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
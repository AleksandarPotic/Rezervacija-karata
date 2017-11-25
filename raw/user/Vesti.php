<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Vest</title>
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
			<li class="active"><a href="Vesti.php">VESTI</a></li>
			<li><a href="Istorija.php">ISTORIJA</a></li>
			<li><a href="Rezultati.php">REZULTATI</a></li>
			<li><a href="Tim.php">TIM</a></li>
			<li><a href="Rezervacija.php">REZERVACIJA</a></li>
			<li><a href="Kontakt.php">KONTAKT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	</header>
		<!-- News -->
		<div class="container">
			<div class="jumbotron">
				<div class="vesti0"><font face="Bernard MT Condensed" size="6">VESTI</font></div>
							<a href="Vest1.php" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">24.11.2016.</font>
							<font class="font23" size="5">BOD ZA KRAJ POLUSEZONE</font>
							<br><img src="images\2.jpg" height="150px" width="300px">
							<font size="3" class="font21">Osvojen bod na teskom gostovanju Lokomotivi u okviru 13 kola Opstinske lige Pirot...</font></div></a>
							<a href="#Vest2" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">24.11.2016.</font>
							<font class="font23" size="5">FK POBEDA GOSTUJE U BELOM POLJU</font>
							<br><img src="images\3.jpg" height="150px" width="300px">
							<font size="3" class="font21">U okviru 13. kola Opstinske lige Pirot,ekipa FK Pobeda gostuje poslednjeplasiranoj ekipi...</font></div></a>
							<a href="#Vest3" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">20.11.2016.</font>
							<font class="font23" size="5">VELIKA POBEDA NAD EKIPOM FK SENJAK</font>
							<br><img src="images\4.jpg" height="150px" width="300px">
							<font size="3" class="font21">FK Pobeda je na svom terenu savlada do sad ne porazenu ekipu u sezoni...</font></div></a>
							<a href="#Vest4" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">11.11.2016.</font>
							<font class="font23" size="5">FK POBEDA DOCEKUJE LIDERA NA TABELI</font>
							<br><img src="images\5.jpg" height="150px" width="300px">
							<font size="3" class="font21">U okviru 12. kola Opstinske lige Pirot,ekipa FK Pobeda docekuje lidera na tabeli...</font></div></a>
							<a href="#Vest5" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">05.11.2016.</font>
							<font class="font23" size="5">DRUGI PORAZ U SEZONI NA GOSTOVANJU</font>
							<br><img src="images\6.jpg" height="150px" width="300px">
							<font size="3" class="font21">U okviru 11. kola Opstinske lige Pirot, ekipa FK Pobeda porazena sa 3:0 na gotovanju...</font></div></a>
							<a href="#Vest6" style="text-decoration: none"><div class="vesti1"><font size="3" class="font22" color="gray">02.11.2016.</font>
							<font class="font23" size="5">TESKO GOSTOVANJE EKIPI FK NISAVAC</font>
							<br><img src="images\7.jpg" height="150px" width="300px">
							<font size="3" class="font21">U okviru 11. kola Opstinske lige Pirot, ekipu FK Pobeda ocekuje tesko gostovanje...</font></div></a>
						<nav aria-label="Page navigation">
						  <ul class="pagination">
							<li>
							  <a href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							  </a>
							</li>
							<li class="active"><a href="Vesti.php">1</a></li>
							<li><a href="Vesti1.php">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  <a href="Vesti1.php" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							  </a>
							</li>
						  </ul>
						</nav>
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
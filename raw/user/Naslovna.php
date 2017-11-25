<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Naslovna</title>
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
				<li class="dropdown" id="login">
					<div class="dropdown-toggle" data-toggle="dropdown"><button id="login-bu">PRIJAVA</button></div>
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
		  	<li class="active"><a href="Naslovna.php">POCETNA</a></li>
			<li><a href="Vesti.php">VESTI</a></li>
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
	<!-- jumbotron -->
	<div class="container">
		<div class="jumbotron">
			<div class="jumbotron1">
			<!-- slider -->
			<div class="container">
				<div id="main_area">
						<div class="row">
							<div class="col-xs-12" id="slider">
								<div class="row">
									<div class="col-sm-8" id="carousel-bounding-box">
										<div class="carousel slide" id="myCarousel">
											<div class="carousel-inner">
												<div class="active item" data-slide-number="0">
												<img src="images\2.jpg" width="1920px" height="1080px"></div>

												<div class="item" data-slide-number="1">
												<img src="images\3.jpg" width="1920px" height="1080px"></div>

												<div class="item" data-slide-number="2">
												<img src="images\4.jpg" width="1920px" height="1080px"></div>

												<div class="item" data-slide-number="3">
												<img src="images\5.jpg" width="1920px" height="1080px"></div>

												<div class="item" data-slide-number="4">
												<img src="images\6.jpg" width="1920px" height="1080px"></div>

												<div class="item" data-slide-number="5">
												<img src="images\7.jpg" width="1920px" height="1080px"></div>
											</div>
											<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
												<span class="glyphicon glyphicon-chevron-left"></span>                                       
											</a>
											<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
												<span class="glyphicon glyphicon-chevron-right"></span>                                       
											</a>                                
											</div>
									</div>

									<div class="col-sm-4" id="carousel-text"></div>

									<div id="slide-content" style="display: none;">
										<div id="slide-content-0">
											<a href="Vest1.html"><font class="text5">BOD ZA KRAJ POLUSEZONE</font><br>
											<font class="text6" size="4">Osvojen bod na teskom gostovanju Lokomotivi...</font>
											<p class="sub-text">Novembar 27 2016</p></a>
										</div>

										<div id="slide-content-1">
											<a href="Vest2.html"><font class="text5">FK POBEDA GOSTUJE U BELOM POLJU</font><br>
											<font class="text6" size="4">U okviru 13. kola Opstinske lige Pirot,ekipa FK Pobeda gostuje poslednjeplasiranoj ekipi...</font>
											<p class="sub-text">Novembar 24 2016</p></a>
										</div>

										<div id="slide-content-2">
											<a href="Vest3.html"><font class="text5">VELIKA POBEDA NAD EKIPOM FK SENJAK</font><br>
											<font class="text6" size="4">FK Pobeda je na svom terenu savlada do sad ne porazenu ekipu u sezoni...</font>
											<p class="sub-text">Novembar 20 2016</p></a>
										</div>

										<div id="slide-content-3">
											<a href="Vest4.html"><font class="text5">FK POBEDA DOCEKUJE LIDERA NA TABELI</font><br>
											<font class="text6" size="4">U okviru 12. kola Opstinske lige Pirot, ekipa FK Pobeda docekuje lidera na tabeli...</font>
											<p class="sub-text">Novembar 11 2016</p></a>
										</div>

										<div id="slide-content-4">
											<a href="Vest5.html"><font class="text5">DRUGI PORAZ U SEZONI NA GOSTOVANJU</font><br>
											<font class="text6" size="4">U okviru 11. kola Opstinske lige Pirot, ekipa FK Pobeda porazena sa 3:0 na gotovanju...</font>
											<p class="sub-text">Novembar 05 2016</p></a>
										</div>

										<div id="slide-content-5">
											<a href="Vest6.html"><font class="text5">TESKO GOSTOVANJE EKIPI FK NISAVAC</font><br>
											<font class="text6" size="4">U okviru 11. kola Opstinske lige Pirot, ekipu FK Pobeda ocekuje tesko gostovanje...</font>
											<p class="sub-text">Novembar 02 2016</p></a>
										</div>
									</div>
								</div>
							</div>
						</div><!--/Slider-->

						<div class="row hidden-xs" id="slider-thumbs">
								<!-- Bottom switcher of slider -->
								<ul class="hide-bullets">
									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-0"><img src="images\2.jpg"></a>
									</li>

									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-1"><img src="images\3.jpg"></a>
									</li>

									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-2"><img src="images\4.jpg"></a>
									</li>

									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-3"><img src="images\5.jpg"></a>
									</li>

									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-4"><img src="images\6.jpg"></a>
									</li>

									<li class="col-sm-2">
										<a class="thumbnail" id="carousel-selector-5"><img src="images\7.jpg"></a>
									</li>
								</ul>                 
						</div>
				</div>
			</div>
			</div>
			<div class="row">
			<!-- News -->
				<div class="vesti0"><font face="Impact" size="6">VESTI</font></div>
				<div class="col-md-6">
						<a href="Vest1.html" style="text-decoration: none"><div class="vesti1"><font size="3" class="font2" color="gray">27.11.2016.</font>
						<font class="font3" size="5">BOD ZA KRAJ POLUSEZONE</font>
						<br><font size="3" class="font1">Osvojen bod na teskom gostovanju Lokomotivi...</div></a>
						<a href="#Vest2" style="text-decoration: none"><div class="vesti1"><font size="3" class="font2" color="gray">24.11.2016.</font>
						<font class="font3" size="5">FK POBEDA GOSTUJE U BELOM POLJU</font>
						<br><font size="3" class="font1">U okviru 13. kola Opstinske lige Pirot,ekipa FK Pobeda gostuje poslednjeplasiranoj ekipi...</div></a>
						<a href="#Vest3" style="text-decoration: none"><div class="vesti1"><font size="3" class="font2" color="gray">20.11.2016.</font>
						<font class="font3" size="5">VELIKA POBEDA NAD EKIPOM FK SENJAK</font>
						<br><font size="3" class="font1">FK Pobeda je na svom terenu savlada do sad ne porazenu ekipu u sezoni...</div></a>
						<a href="#Vest4" style="text-decoration: none"><div class="vesti1"><font size="3" class="font2" color="gray">11.11.2016.</font>
						<font class="font3" size="5">FK POBEDA DOCEKUJE LIDERA NA TABELI</font>
						<br><font size="3" class="font1">U okviru 12. kola Opstinske lige Pirot,ekipa FK Pobeda docekuje lidera na tabeli...</div></a>
				
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
						<li><a href="#">6</a></li>
						<li>
						  <a href="Vesti1.php" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						  </a>
						</li>
					  </ul>
					</nav>
				</div>
				<!-- Image slider on click button -->
				<div class="col-md-6">
							<div class="logo123">
								<div class="w3-3">
									<button class="w3" onclick="currentDiv(1)">SLEDECI MEC</button>
									<button class="w3" onclick="currentDiv(2)">TABELA</button>
									<button class="w3" onclick="currentDiv(3)">PREDHODNI MEC</button>
								</div>

								<div class="w3-content">
									<a href="Vest1.php"><img class="MojSlajder" src="images\sledecimec.jpg"></a>
									<a href="Rezultati.php"><img class="MojSlajder" src="images\tabela1.jpg"></a>
									<a href="Vest1.php"><img class="MojSlajder" src="images\predhodnimec.jpg"></a>
								</div>

								<script>
								var slideIndex = 1;
								showDivs(slideIndex);

								function plusDivs(n) {
								  showDivs(slideIndex += n);
								}

								function currentDiv(n) {
								  showDivs(slideIndex = n);
								}

								function showDivs(n) {
								  var i;
								  var x = document.getElementsByClassName("MojSlajder");
								  var dots = document.getElementsByClassName("demo");
								  if (n > x.length) {slideIndex = 1}
								  if (n < 1) {slideIndex = x.length}
								  for (i = 0; i < x.length; i++) {
									 x[i].style.display = "none";
								  }
								  for (i = 0; i < dots.length; i++) {
									 dots[i].className = dots[i].className.replace(" w3-red", "");
								  }
								  x[slideIndex-1].style.display = "block";
								  dots[slideIndex-1].className += " w3-red";
								}
								</script>
							</div>
							<!--Social-->
							<div class="social-icon">
								<a href="#facebook"><img src="images\social-logo\fb.png" class="social" width="70px" height="70px"></a>
								<a href="#instagra"><img src="images\social-logo\in.png" class="social" width="70px" height="70px"></a>
								<a href="#G-mail"><img src="images\social-logo\gm.png" class="social" width="70px" height="70px"></a>
								<a href="#YouTube"><img src="images\social-logo\ytube.png" class="social" width="70px" height="70px"></a>
								<a href="#Whatsapp"><img src="images\social-logo\wu.png" class="social" width="70px" height="70px"></a>
							</div>
							<font class="fontprati">Pratite FK Pobeda</font>
				</div>
			</div> 
		</div>
	</div>
	
	<script>
		  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
	</script>
	
	<!-- Create the back to top button -->
	<script type="text/javascript">
	
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
				<p><font class="footer1" size="4" color="black">Copyright&copy; 2016-2017 FK Pobeda-Aleksandar Potic </font></p>
			</div>
		</div>
</body>
</html>
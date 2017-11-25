<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Rezultati</title>
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
			<li class="active"><a href="Rezultati.php">REZULTATI</a></li>
			<li><a href="Tim.php">TIM</a></li>
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
		<div class="Istorija"><font face="Bernard MT Condensed" size="6">REZULTATI I RASPORED</font></div><br>
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<font face="Bernard MT Condensed" size="5">Izaberite kolo</font>
			<Select id="koloselector">
			   <option value="kolo1">1.kolo</option>
			   <option value="kolo2">2.kolo</option>
			   <option value="kolo3">3.kolo</option>
			   <option value="kolo4">4.kolo</option>
			   <option value="kolo5">5.kolo</option>
			   <option value="kolo6">6.kolo</option>
			   <option value="kolo7">7.kolo</option>
			   <option value="kolo8">8.kolo</option>
			   <option value="kolo9">9.kolo</option>
			   <option value="kolo10">10.kolo</option>
			   <option value="kolo11">11.kolo</option>
			   <option value="kolo12">12.kolo</option>
			   <option value="kolo13">13.kolo</option>
			   <option value="kolo14" selected>14.kolo</option>
			   <option value="kolo15">15.kolo</option>
			   <option value="kolo16">16.kolo</option>
			   <option value="kolo17">17.kolo</option>
			   <option value="kolo18">18.kolo</option>
			   <option value="kolo19">19.kolo</option>
			   <option value="kolo20">20.kolo</option>
			   <option value="kolo21">21.kolo</option>
			   <option value="kolo22">22.kolo</option>
			   <option value="kolo23">23.kolo</option>
			   <option value="kolo24">24.kolo</option>
			   <option value="kolo25">25.kolo</option>
			   <option value="kolo26">26.kolo</option>
			</Select>
			<div id="kolo1" class="tabela" style="display:none"><img src="images\tabela\kolo1.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo1.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo2" class="tabela" style="display:none"><img src="images\tabela\kolo2.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo2.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo3" class="tabela" style="display:none"><img src="images\tabela\kolo2.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo3.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo4" class="tabela" style="display:none"><img src="images\tabela\kolo3.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo4.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo5" class="tabela" style="display:none"><img src="images\tabela\kolo4.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo5.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo6" class="tabela" style="display:none"><img src="images\tabela\kolo5.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo6.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo7" class="tabela" style="display:none"><img src="images\tabela\kolo6.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo7.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo8" class="tabela" style="display:none"><img src="images\tabela\kolo7.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo8.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo9" class="tabela" style="display:none"><img src="images\tabela\kolo8.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo9.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo10" class="tabela" style="display:none"><img src="images\tabela\kolo9.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo10.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo11" class="tabela" style="display:none"><img src="images\tabela\kolo10.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo11.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo12" class="tabela" style="display:none"><img src="images\tabela\kolo11.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo12.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo13" class="tabela" style="display:none"><img src="images\tabela\kolo12.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo13.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo14" class="tabela"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo14.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo15" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo15.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo16" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo16.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo17" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo17.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo18" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo18.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo19" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo19.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo20" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo20.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo21" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo21.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo22" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo22.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo23" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo23.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo24" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo24.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo25" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo25.png" class="img-fluid" alt="Responsive image"></div>
			<div id="kolo26" class="tabela" style="display:none"><img src="images\tabela\kolo13.png" class="img-fluid" alt="Responsive image">
			<img src="images\tabela\koloo26.png" class="img-fluid" alt="Responsive image"></div>
			<script>
			$(function() {
        $('#koloselector').change(function(){
            $('.tabela').hide();
            $('#' + $(this).val()).show();
        });
    });
	</script>
		</div>
		<div class="col-md-2">
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
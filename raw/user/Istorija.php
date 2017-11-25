<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Istorija</title>
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
			<li  class="active"><a href="Istorija.php">ISTORIJA</a></li>
			<li><a href="Rezultati.php">REZULTATI</a></li>
			<li><a href="Tim.php">TIM</a></li>
			<li><a href="Rezervacija.php">REZERVACIJA</a></li>
			<li><a href="Kontakt.php">KONTAKT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	</header>
	<!--History-->
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="Istorija"><font face="Bernard MT Condensed" size="6">ISTORIJA</font></div><br>
				<div class="col-sm-6">
					<font face="Arial" size="3">Priča Fudbalskog kluba “Pobeda“ započinje u proleće 1964… Dok se svet spremao za rat romantičarski zaneseni novosadski učenici Srpske pravoslavne gimnazije, jureći za loptom na poljančetu kod „Četiri krajcare“ (na kraju sadašnje 'Velikotrnavske' ulice) odlučili su da osnuju fudbalsko društvo kao pandam FK „NAK“ i FK „UTK“ koji su, pre svega, okupljali mađarsku, pomađarenojevrejsku i nemačku omladinu.

rat je (u)činio svoje… Godinu nakon njegovog završetka, piroćanci su ponovo počeli da se okupljaju u Ljubojevićevoj kafani i štrikerskoj radionici Save Šijakova, čiji je sin Milenko postao prvi sekretar, Živko Bajazetov izabran za prvog predsenika kluba.

S obzirom na to da je većina prvotimaca studirala u glavnom gradu Čehoslovačke, iz Praga je doneta prva garnitura crveno-belih dresova Slavije po kojim je 'Pobeda' prepoznatljiva i dan danas.

Želeći da ojača, da se uključi u redovno takmičenje 'Pobeda' se fuzionisala sa FK „Omladinac“, koji je u svojim redovima okupljao uglavnom trgovačku omladinu, pa je novi klub dobio ime Omladinski sport klub Pobeda.</font>
				</div>
				<div class="col-sm-6">
					<img src="images\historypic1.jpg" class="img-fluid" alt="Responsive image" height="300px" width="500px">
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-12">
					<font face="Arial" size="3">U tri navrata 1975/76., 1976/77. i 1995/96. Pobeda je bio na domak plasmana u Prvu saveznu ligu. U tim sezonama Pobeda je osvajala treće mesto u prvenstvu, a u elitu su ispred njega odlazili Vardar Skoplje, Priština i Napredak Kruševac. U najmasovnijem takmičenju, Kupu Jugoslavije, 1975/76. stigli su do četvrtfinala gde su poraženi od Dinama iz Zagreba. Pre toga u osmini finala „beli“ su pobedili veliku Crvenu zvezdu rezultatom 4:2. U sezoni 2004/05. Pobeda je stigla do četvrtfinala Kupa Srbije i Crne Gore, kada je u Pirotu poražena od beogradskog Rada sa 1:0.</font>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-6">
					<img src="images\historypic2.jpg"  class="img-fluid" alt="Responsive image"  height="300px" width="500px">
				</div>
				<div class="col-sm-6">
					<font face="Arial" size="3">Ono što je možda i značajnije je da su boje kluba nosili mnogi sjajni pojedinci. Dres sa državnim grbom oblačili su: Jovan Anđelković, Jovan Stanković i Radivoje Manić. U dresu Pobede najviše je pružio Miroljub Đorđević, koji je za svoj tim odigrao 408 zvaničnih utakmica i postigao 150 golova, taj njegov rekord još dugo neće biti dostignut. 1995. godine povodom proslave pedesetogodišnjice kluba proglašen je za najboljeg igrača „Pobede“ svih vremena. Takođe je mnogo velikih asova koji su sa strane dolazili u Pirot i ovde započinjali sjajne karijere poput: Slobodana Janjuša, Ljube Stevanovića, Milana Radovića, Mateje Kežmana, Nenada Jestrovića, Milijana Tupajića, Vladimira Petkovića, Ivana Gvozdenovića.</font>
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
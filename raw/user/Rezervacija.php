<?php
    session_start();
    include 'print.php';
?>
<html>
<head>
	<title>Zvanicni sajt FK Pobeda - Rezervacija</title>
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
    <?php if( isset($_SESSION['ime']) )
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
			<li class="active"><a href="Rezervacija.php">REZERVACIJA</a></li>
			<li><a href="Kontakt.php">KONTAKT</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
	</header>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="Rezervacija"><font face="Bernard MT Condensed" size="6">REZERVACIJA KARATA</font></div><br>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar1">
                            <ul class="nav navbar-nav">
                                <li><a class="w33" onclick="currentDiv(1)">Predstojece utakmica</a></li>
                                <li><a class="w33" onclick="currentDiv(2)">Vasa korpa</a></li>
                                <li><a class="w33" onclick="currentDiv(3)">Plan sedista</a></li>
                                <li><a class="w33" onclick="currentDiv(4)">Radno vreme</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
				<div class="logo123">
					<div class="w33-content">
						<div class="MojSlajder1">
							<div class="container">
							  <hr>
								<button type="button" class="dugme1" data-toggle="collapse" data-target="#demo1">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[0])."  ".print_r($sat[0]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[0]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[0])." VS ".print_r($gost[0]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[0]);?>" height="70px" width="70px">
                                    </div>
								</button>
							  <div id="demo1" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php print_r($datum[0])."  ".print_r($sat[0]); ?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[0]);?>" height="135px" width="135px">
											<font class="slovo2" class="text-uppercase"><?php  print_r($domacin[0])." VS ".print_r($gost[0]);?></font>
											<img src="<?php print_r($grbgost[0]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem1" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem1" class="collapse">
                                                <div class="grass2"><br>
                                                    <div class="col-sm-10">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[0]);?> din</h4>
                                                        <h4>Jug: <?php print_r($cena[1]);?> din</h4>
                                                        <h4>Zapad: <?php print_r($cena[2]);?> din</h4>
                                                        <h4>Istok: <?php print_r($cena[3]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti na biletarnici stadiona do dana <?php print_r($datum[0]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div>
                                            </div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option2" autocomplete="off" value="jug" checked>Jug
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option3" autocomplete="off" value="zapad" checked>Zapad
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option4" autocomplete="off" value="istok" checked>Istok
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
							     <button type="button" class="dugme2" data-toggle="collapse" data-target="#demo2">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[1])."  ".print_r($sat[1]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[1]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[1])." VS ".print_r($gost[1]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[1]);?>" height="70px" width="70px">
                                    </div>
								</button>
								<div id="demo2" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php print_r($datum[1])." ".print_r($sat[1]); ?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[1]);?>" height="135px" width="135px">
											<font class="slovo2"><?php print_r($domacin[1])." VS ".print_r($gost[1]);?></font>
											<img src="<?php print_r($grbgost[1]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem2" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem2" class="collapse">
											<div class="grass2"><br>
                                                    <div class="col-sm-9">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[4]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti do dana <?php print_r($datum[1]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div>
                                            </div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
								<button type="button" class="dugme1" data-toggle="collapse" data-target="#demo3">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[2])."  ".print_r($sat[2]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[2]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[2])." VS ".print_r($gost[2]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[2]);?>" height="70px" width="70px">
                                    </div>
								</button>
							  <div id="demo3" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php  print_r($datum[2])."  ".print_r($sat[2]);?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[2]);?>" height="135px" width="135px">
											<font class="slovo2"><?php  print_r($domacin[2])." VS ".print_r($gost[2]);?></font>
											<img src="<?php print_r($grbgost[2]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem3" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem3" class="collapse">
											<div class="grass2"><br>
                                                    <div class="col-sm-10">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[5]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti na biletarnici stadiona do dana <?php print_r($datum[2]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
							  <button type="button" class="dugme2" data-toggle="collapse" data-target="#demo4">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[3])."  ".print_r($sat[3]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[3]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[3])." VS ".print_r($gost[3]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[3]);?>" height="70px" width="70px">
                                    </div>
								</button>
							  <div id="demo4" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php  print_r($datum[3])."  ".print_r($sat[3]); ?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[3]);?>" height="135px" width="135px">
											<font class="slovo2"><?php  print_r($domacin[3])." VS ".print_r($gost[3]); ?></font>
											<img src="<?php  print_r($grbgost[3]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem4" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem4" class="collapse">
											<div class="grass2"><br>
                                                    <div class="col-sm-10">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[6]);?> din</h4>
                                                        <h4>Jug: <?php print_r($cena[7]);?> din</h4>
                                                        <h4>Zapad: <?php print_r($cena[8]);?> din</h4>
                                                        <h4>Istok: <?php print_r($cena[9]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti na biletarnici stadiona do dana <?php  print_r($datum[3]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option2" autocomplete="off" value="jug" checked>Jug
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option3" autocomplete="off" value="zapad" checked>Zapad
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option4" autocomplete="off" value="istok" checked>Istok
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
							  <button type="button" class="dugme1" data-toggle="collapse" data-target="#demo5">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[4])."  ".print_r($sat[4]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[4]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[4])." VS ".print_r($gost[4]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[4]);?>" height="70px" width="70px">
                                    </div>
								</button>
							  <div id="demo5" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php print_r($datum[4])."  ".print_r($sat[4]);?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[4]);?>" height="135px" width="135px">
											<font class="slovo2"><?php  print_r($domacin[4])." VS ".print_r($gost[4]); ?></font>
											<img src="<?php print_r($grbgost[4]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem5" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem5" class="collapse">
											<div class="grass2"><br>
                                                    <div class="col-sm-10">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[10]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti na biletarnici stadiona do dana <?php  print_r($datum[4]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
							  <button type="button" class="dugme2" data-toggle="collapse" data-target="#demo6">
                                    <div class="col-sm-3 col-sm-offset-1">	
                                        <font class="fontf"><?php print_r($datum[5])."  ".print_r($sat[5]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
                                        <img src="<?php print_r($grbdomacin[5]);?>" height="70px" width="70px">
                                    </div>
                                    <div class="col-sm-4" class="align-middle">
									   <font  class="fontf"><?php  print_r($domacin[5])." VS ".print_r($gost[5]); ?></font>
                                    </div>
                                    <div class="col-sm-2">
									   <img src="<?php print_r($grbgost[5]);?>" height="70px" width="70px">
                                    </div>
								</button>
							  <div id="demo6" class="collapse">
								<div class="col-sm-8">
									<div class="grass3">
										<div class="col-sm-7 col-sm-offset-5">
											<font class="slovo1"><?php  print_r($datum[5])."  ".print_r($sat[5]);  ?></font>
										</div>
										<div class="col-sm-12" style="text-align: center">
											<img src="<?php print_r($grbdomacin[5]);?>" height="135px" width="135px">
											<font class="slovo2"><?php  print_r($domacin[5])." VS ".print_r($gost[5]); ?></font>
											<img src="<?php print_r($grbgost[5]);?>" height="135px" width="135px">
										</div>
										<div class="col-sm-11">
											<font  type="button" class="dug" data-toggle="collapse" data-target="#dem6" color="white">+Sve informacija o prodaji karata</font>
											<div id="dem6" class="collapse">
											<div class="grass2"><br>
                                                    <div class="col-sm-10">
                                                        <h3>Cena karata po sektorima</h3>
                                                        <h4>Sever: <?php print_r($cena[11]);?> din</h4>
                                                        <h4>Jug: <?php print_r($cena[12]);?> din</h4>
                                                        <h4>Zapad: <?php print_r($cena[13]);?> din</h4>
                                                        <h4>Istok: <?php print_r($cena[14]);?> din</h4>
                                                    
                                                        <h3>Informacije o preuzimanju karata</h3>
                                                        <h4>Karte mozete preuzeti na biletarnici stadiona do dana <?php print_r($datum[5]); ?> tri sata pre pocetka utakmice. </h4>
                                                    </div>
                                                </div></div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="grass4">
										<div class="col-sm-12">
											<div class="col-sm-9 col-sm-offset-3">
												<br><br><font color="white" class="slovo3">Vrsta ulaznice</font>
											</div><br><br>
												<div class="col-sm-11 col-sm-offset-1">
													<form action="Prijava1.php">
                                                        <font class="slovo4">Sektor:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-info active">
                                                                <input type="radio" name="Sektor" id="option1" autocomplete="off" value="sever" checked>Sever
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option2" autocomplete="off" value="jug" checked>Jug
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option3" autocomplete="off" value="zapad" checked>Zapad
                                                            </label>
                                                            <label class="btn btn-info">
                                                                <input type="radio" name="Sektor" id="option4" autocomplete="off" value="istok" checked>Istok
                                                            </label>
                                                        </div>
														<br><font class="slovo4">Broj karata:</font><br>
														<div class="btn-group btn-group-justified" data-toggle="buttons">
                                                            <label class="btn btn-primary active">
                                                                <input type="radio" name="Broj" id="option1" autocomplete="off" value="1" checked>Jedna
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option2" autocomplete="off" value="2" checked>Dve
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option3" autocomplete="off" value="3" checked>Tri
                                                            </label>
                                                            <label class="btn btn-primary">
                                                                <input type="radio" name="Broj" id="option4" autocomplete="off" value="4" checked>Cetiri
                                                            </label>
                                                        </div><br>
                                                        <br><input type="submit" class="btn btn-danger btn-sm btn-block" value="Kupi kartu">
													</form>
												</div>
										</div>
									</div>
								</div>
							  </div><br>
							</div>
						</div>
						<div class="MojSlajder1">
							<div class="container">
								<div class="row">
								<h2>Predstojece</h2>
								  <p>Za vise informacija kliknite na utakmicu.</p>
								  <hr>
								</div>
							</div>
						</div>
						<div class="MojSlajder1">
						<div class="container">
								<div class="row">
								<h2>Plan sedista</h2>
								  
								  <hr>
								  <img src="../../public/user/images/planstadion.jpg" width="100%">
								</div>
						</div>
						<div class="MojSlajder1">M4</div>
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
								  var x = document.getElementsByClassName("MojSlajder1");
								  var dots = document.getElementsByClassName("demo");
								  if (n > x.length) {slideIndex = 1}
								  if (n < 1) {slideIndex = x.length}
								  for (i = 0; i < x.length; i++) {
									 x[i].style.display = "none";
								  }
								  for (i = 0; i < dots.length; i++) {
									 dots[i].className = dots[i].className.replace(" w33-red", "");
								  }
								  x[slideIndex-1].style.display = "block";
								  dots[slideIndex-1].className += " w33-red";
								}
								</script>
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

	
			<div align="center">
			<div class="footer">
				<img src="images\s1.png">
				<p><font size="4" color="black">Copyright&copy; 2016-2017 FK Pobeda</font></p>
			</div>
		</div>
</body>
</html>
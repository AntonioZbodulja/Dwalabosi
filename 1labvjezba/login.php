<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hr" lang="hr" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
    <title>Početna</title>
<link href="stil.css" rel="stylesheet" type="text/css" />
<link href="grid.css" rel="stylesheet" type="text/css" />
</head>
<body>
        <div class="header">
        <?php echo'Pozdrav ' . $_GET["username"] . '. Tvoja lozinka je ' . $_GET["password"]. '.'; ?>
            </div>

        <div class="content">

		<div class="row">
		
		<div class="column column-3">
		<img src="images/logo.png" width="180"><br />
		</div>
		
		<div class="korisnik column column-8">
		<?php echo'Pozdrav ' . $_GET["username"]; ?> <button onclick="location.href='login.html'">
     Odjava</button>
		</div>
		
		</div>
		
		<div class="row">
		<div class="navigation column column-3">
		<a href="#osobni-podaci">Osobni podaci</a><br />
		<a href="#skolovanje">Školovanje</a><br />
		<a href="#radno-iskustvo">Radno iskustvo</a><br />
		<a href="#znanja-i-vjestine">Znanja i vještine</a><br />
		</div>
		
		
		<div class="column column-8">
<h3><a name="osobni-podaci">Osobni podaci</a></h3>
Antonio Zbodulja, 23.04.1991. Zagreb

<hr>
<h3><a name="skolovanje">Podaci o školovanju</a></h3>
Osnovna škola Malešnica, X. Gimnazija, Tehničko veleučilište u Zagrebu

<hr>
<h3><a name="radno-iskustvo">Podaci o radnom iskustvu</a></h3>
Rad preko student servisa

<hr>
<h3><a name="znanja-i-vjestine">Znanja i vještine</a></h3>
Izrada web stranica

<hr>
</div>
</div>
            </div>

    <div class="footer">Copyright ZKD, 2014</div>
   
</body>
</html>
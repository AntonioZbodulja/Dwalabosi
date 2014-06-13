
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
        Dobrodošli
            </div>

        <div class="content">

		<div class="row">
		
		<div class="column column-3">
		<img src="images/logo.png" width="180"><br />
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
		
		<?php 
		echo'Ime: ' . $_POST["ime"].'<br />';
		echo'Prezime: ' . $_POST["prezime"].'<br />';
		echo'Spol: ' . $_POST["spol"].'<br />';
		echo'Datum rođenja: ' . $_POST["datum"].'<br />';
		echo'Mjesto rođenja: ' . $_POST["mjesto"].'<br />';
		echo'Adresa i mjesto stanovanja: ' . $_POST["adresa"].'<br />';
		echo'Krvna grupa: ' . $_POST["krvnagrupa"].' ' . $_POST["krvnagrupaposneg"].'<br />';
		echo'Ima li prijašnjih medicinskih tegoba (srčane tegobe, tlak, virusne bolesti (Hepatits, HIV)): ' . $_POST["tegobe"].'<br />';
		echo'Koje tegobe osoba ima: ' . $_POST["kojetegobe"].'<br />';
		echo'Je li osoba alergična na lijekove: ' . $_POST["alergija"].'<br />';
		echo'Na koje lijekove je osoba alergična: ' . $_POST["lijekovialergija"].'<br />';
		?>


</div>
</div>
            </div>

    <div class="footer">Copyright ZKD, 2014</div>
   
</body>
</html>
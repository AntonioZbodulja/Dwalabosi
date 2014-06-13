
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hr" lang="hr" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
    <title>Početna</title>
<link href="stil.css" rel="stylesheet" type="text/css" />
<link href="grid.css" rel="stylesheet" type="text/css" />
<!--Twitter bootstrap-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
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
		
		
		$con=mysqli_connect("localhost","root","","dwa") or die ("Neuspjesno spajanje na server"); 

mysql_query("SET CHARACTER SET utf8");
mysqli_set_charset($con, "utf8"); //da upis radi i sa utf-8 znakovima
//link, user, pass, baza
if (mysqli_connect_errno())
  {
  echo '<span class="label label-warning">Neuspješno dodano</span> '. mysqli_connect_error().'';
  }
  
/*Sql injection*/
$ime = $_POST["ime"];
$safe_ime = mysql_real_escape_string($ime);
$prezime = $_POST["prezime"];
$safe_prezime = mysql_real_escape_string($prezime);
$spol = $_POST["spol"];
$safe_spol = mysql_real_escape_string($spol);
$datum = $_POST["datum"];
$safe_datum = mysql_real_escape_string($datum);
$mjesto = $_POST["mjesto"];
$safe_mjesto = mysql_real_escape_string($mjesto);
$adresa = $_POST["adresa"];
$safe_adresa = mysql_real_escape_string($adresa);
$krvnagrupa = $_POST["krvnagrupa"];
$safe_krvnagrupa = mysql_real_escape_string($krvnagrupa);
$krvnagrupaposneg = $_POST["krvnagrupaposneg"];
$safe_krvnagrupaposneg = mysql_real_escape_string($krvnagrupaposneg);
$tegobe = $_POST["tegobe"];
$safe_tegobe = mysql_real_escape_string($tegobe);
$kojetegobe = $_POST["kojetegobe"];
$safe_kojetegobe = mysql_real_escape_string($kojetegobe);
$alergija = $_POST["alergija"];
$safe_alergija = mysql_real_escape_string($alergija);
$lijekovialergija = $_POST["lijekovialergija"];
$safe_lijekovialergija = mysql_real_escape_string($lijekovialergija);
  
$sql="INSERT INTO podacipacijenti (ime, prezime, spol, datumrodenja, mjestorodenja, adresamjestostanovanja, krvnagrupa, imategobe, kojetegobe, alergicanlijekovi, kojilijekovialergija) VALUES 
('" . $safe_ime . "','" . $safe_prezime . "','" . $safe_spol . "','" . $safe_datum . "','" . $safe_mjesto . "','" . $safe_adresa . "','" . $safe_krvnagrupa ." ". $safe_krvnagrupaposneg. "','" . $safe_tegobe . "','" . $safe_kojetegobe . "','" . $safe_alergija . "','" . $safe_lijekovialergija . "')";

/*Ako nije izvrsen upit*/
if (!mysqli_query($con,$sql))
  {
  die('<span class="label label-warning">Error:</span> ' . mysqli_error($con));
  }
  /*Izvrsen upit*/
  else{
echo '<span class="label label-success">Uspješno dodano</span> '. mysqli_connect_error().'';
}
mysqli_close($con);

echo'<br /><a href="podaci-o-pacijentu.html">
   <button class="btn btn-primary">Povratak na unos</button>
</a>';
?>
		

</div>
</div>
            </div>

    <div class="footer">Copyright ZKD, 2014</div>
   
</body>
</html>
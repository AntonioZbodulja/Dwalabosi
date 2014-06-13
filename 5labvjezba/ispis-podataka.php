<?php

echo'
<form action="ispis-podataka.php" method="get">
Ime: <input type="text" name="ime"><br />
Prezime: <input type="text" name="prezime">
<input type="submit" value="Submit">
</form>
';
function writeMsg($person_a) {
	echo "ID: " .$person_a['id']. "<br>";
	echo "Područni ured: " .$person_a['podrucni_ured']. "<br>";
	echo "Šifra ustanove: " .$person_a['sifra_ustanove']. "<br>";
	echo "Naziv ustanove: " .$person_a['naziv_ustanove']. "<br>";
	echo "Id broj: " .$person_a['id_broj']. "<br>";
	echo "Prezime: " .$person_a['prezime']. "<br>";
	echo "Ime: " .$person_a['ime']. "<br>";
	echo "Broj osiguranika: " .$person_a['broj_osiguranika']. "<br>";
	echo "Broj pošte: " .$person_a['broj_poste']. "<br>";
	echo "Naziv pošte: " .$person_a['naziv_poste']. "<br>";
	echo "Ulica: " .$person_a['ulica']. "<br>";
	echo "Kućni broj: " .$person_a['kucni_broj']. "<br>";
	echo "Grad: " .$person_a['grad']. "<br>";
	echo "<br><br>";
}
	
if (isset($_GET['ime'],$_GET['prezime'])){

$ime=$_GET["ime"];

$prezime=$_GET["prezime"];


$string = file_get_contents("http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php");

$json_a = json_decode($string, true);

foreach ($json_a as $person_name => $person_a) {

if(strlen($ime)>0 && strlen($prezime)>0){

if(strtolower($person_a['ime']) == strtolower($ime) AND strtolower($person_a['prezime']) == strtolower($prezime))
    { 
	writeMsg($person_a);
    }
}else{
if(strtolower($person_a['ime']) == strtolower($ime) OR strtolower($person_a['prezime']) == strtolower($prezime))
    {
        writeMsg($person_a);
    }
}
}
}else{
echo"Unesite podatke";
}
?>
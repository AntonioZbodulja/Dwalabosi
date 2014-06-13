﻿<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hr" lang="hr" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
    <title>Početna</title>
<link href="stil.css" rel="stylesheet" type="text/css" />
<link href="grid.css" rel="stylesheet" type="text/css" />

<!--Pretrazivanje tablice-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

<!--Twitter bootstrap-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

</head>
<body>


        <div class="header">
        Dobrodošli 
		<?php 
		
		//ako user nije logiran
		session_start();
		if (!isset($_SESSION['username'])){
		header("Location: login.html");
		die();
		}
		if (empty($_SESSION['username'])){
		header("Location: login.html");
		}		
		echo $_SESSION['username'];
		?> 
		<a href="logout.php"><img src="images/logout.png"></a>
            </div>

			
        <div class="content">
<div class="row">
		<div class="column column-3">
		<img src="images/logo.png" width="180"><br />
		Dominica sancta, quid remediis sunt.
		</div>
		
		<div class="column column-9">

		<!--Ispis pacijenata tablica-->
		<input type="text" id="search" placeholder="Pretraži tablicu" >
<table id="table">
<tr>
  <th>Ime</th>
  <th>Prezime</th>		
  <th>Spol</th>
  <th>Datum rođenja</th>
  <th>Mobitel</th>
  <th>Adresa</th>
  <th>Mjesto</th>
</tr>
<tr>
  <td>Brankica</td>
  <td>Ostojić</td>		
  <td>Ž</td>
  <td>17.3.1937</td>
  <td>091/7121688</td>		
  <td>Redovka 9</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Ivan</td>
  <td>Kušan</td>		
  <td>M</td>
  <td>19.7.1979</td>
  <td>098/1667148</td>		
  <td>Marinovečka 12</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Hrvoje</td>
  <td>Radić</td>		
  <td>M</td>
  <td>6.6.1944</td>
  <td>098/7317883</td>		
  <td>Dore Pejačević 28</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Vjeran</td>
  <td>Delić</td>		
  <td>M</td>
  <td>2.3.1978</td>
  <td>022/4672651</td>		
  <td>Banovski Put 11</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Filip</td>
  <td>Pavlović</td>		
  <td>M</td>
  <td>28.3.1939</td>
  <td>092/6058667</td>		
  <td>Sitnice 24</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Elena</td>
  <td>Mandić</td>		
  <td>Ž</td>
  <td>25.9.1992</td>
  <td>098/6248116</td>		
  <td>Rebrovac 23</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Dinko</td>
  <td>Kovačević</td>		
  <td>M</td>
  <td>13.11.1940</td>
  <td>021/2727852</td>		
  <td>Martinci 28</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Vjeran</td>
  <td>Kušec</td>		
  <td>M</td>
  <td>13.3.1978</td>
  <td>01/9155118</td>		
  <td>Donadinieva 30</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Marina</td>
  <td>Milinović</td>		
  <td>Ž</td>
  <td>12.12.1961</td>
  <td>099/6669101</td>		
  <td>Raosa, Ivana 4</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Katarina</td>
  <td>Cindrić</td>		
  <td>Ž</td>
  <td>9.7.1991</td>
  <td>022/4547668</td>		
  <td>Ratarska 11</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Josip</td>
  <td>Bošnjak</td>		
  <td>M</td>
  <td>25.4.1951</td>
  <td>099/2720846</td>		
  <td>Andraševečka 8</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Ivana</td>
  <td>Mandić</td>		
  <td>Ž</td>
  <td>27.8.1980</td>
  <td>01/73442610</td>		
  <td>Severi 4</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Katarina</td>
  <td>Grgić</td>		
  <td>Ž</td>
  <td>16.5.1943</td>
  <td>098/6539595</td>		
  <td>Ravnice 25</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Vjeran</td>
  <td>Rukavina</td>		
  <td>M</td>
  <td>27.5.1959</td>
  <td>031/6298645</td>		
  <td>Remetinec 11</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Štefica</td>
  <td>Radić</td>		
  <td>Ž</td>
  <td>21.3.1955</td>
  <td>021/3197918</td>		
  <td>Dragozetićka 2</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Mirka</td>
  <td>Špoljarić</td>		
  <td>Ž</td>
  <td>11.6.1957</td>
  <td>031/2887741</td>		
  <td>Doneca Ivana 4</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Goran</td>
  <td>Milinović</td>		
  <td>M</td>
  <td>4.9.1954</td>
  <td>042/1331138</td>		
  <td>Martićeva 12</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Lino</td>
  <td>Kučić</td>		
  <td>M</td>
  <td>10.5.1960</td>
  <td>021/4133537</td>		
  <td>Ribnjak 27</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Kristina</td>
  <td>Novosel</td>		
  <td>Ž</td>
  <td>21.6.1937</td>
  <td>031/5618736</td>		
  <td>Sakačeva 31</td>
  <td>Zagreb</td>
  </tr>
<tr>
  <td>Saša</td>
  <td>Lučić</td>		
  <td>M</td>
  <td>8.6.1974</td>
  <td>022/7612321</td>		
  <td>Markovićev Brijeg 21</td>
  <td>Zagreb</td>
  </tr>
</table>
			
			<script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});</script>	
			
</div>
            </div>
</div>
    <div class="footer">Copyright ZKD, 2014</div>
   
   

</body>
</html>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hr" lang="hr" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
    <title>Početna</title>
<link href="stil.css" rel="stylesheet" type="text/css" />
<link href="grid.css" rel="stylesheet" type="text/css" />

<!--Sakri lekramu-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $(".reklama").hide();
  });
});
</script>

</head>
<body>
        <div class="header">
        <?php echo'Pozdrav ' . $_GET["username"] . '. Tvoja lozinka je ' . $_GET["password"]. '.'; ?>
            </div>

        <div class="content">

		<div class="row">
		
		<div class="column column-3 reklama">
		<button id="hide">X</button>
		<img src="images/reklama.jpg" width="500">
		</div>
		
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
		
		<!--<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>-->
		
<h3><a name="osobni-podaci" id="podaci-prikazi">Osobni podaci</a></h3>
<div id="podaci">Antonio Zbodulja, 23.04.1991. Zagreb</div>

<hr>
<h3><a name="skolovanje" id="skolovanje-prikazi">Podaci o školovanju</a></h3>
<div id="skolovanje">Osnovna škola Malešnica, X. Gimnazija, Tehničko veleučilište u Zagrebu</div>

<hr>
<h3><a name="radno-iskustvo" id="iskustvo-prikazi">Podaci o radnom iskustvu</a></h3>
<div id="iskustvo">Rad preko student servisa</div>

<hr>
<h3><a name="znanja-i-vjestine" id="vjestine-prikazi">Znanja i vještine</a></h3>
<div id="vjestine">Izrada web stranica</div>

<hr>
<!--<script>
		$("div").hide();
          // Show chosen div, and hide all others
        $("a").click(function (e) 
        {
            //e.preventDefault();
            $("#" + $(this).attr("class")).show().siblings('div').hide();
        });
		</script>-->


</div>
</div>
            </div>

    <div class="footer">Copyright ZKD, 2014</div>
   
</body>
</html>
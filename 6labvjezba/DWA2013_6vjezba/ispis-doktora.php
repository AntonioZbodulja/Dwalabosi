<?php

//Podaci za spajanje na bazu
$user_name = "root";
$password = "";
$database = "dwa";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {
mysql_query("set names 'utf8'");

$fetch = mysql_query("SELECT * FROM podacipacijenti");

}
$return_arr = array();

while ($row = mysql_fetch_array($fetch, MYSQL_ASSOC)) {
    $row_array['ime'] = $row['ime'];
    $row_array['prezime'] = $row['prezime'];
    $row_array['krvnagrupa'] = $row['krvnagrupa'];

    array_push($return_arr,$row_array);
}

//echo json_encode($return_arr);

$popisdoktora = json_encode($return_arr);

$json_a = json_decode($popisdoktora, true);

//echo $popisdoktora;

?>

<!--Prebacivanje json_encode u javascript varijablu-->
<script>var b=JSON.parse('<?php echo $popisdoktora; ?>')</script>

<button id="sljedeci">Sljedeci</button>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>

<?PHP
echo'<script>


var i = -1;

$( "#sljedeci" ).click(function() {

i++;
    
var a = JSON.parse(\'[ {"ime":"Mirko","prezime":"Mirki\u0107","krvnagrupa":"B +"},{"ime":"Matija","prezime":"Matiji\u0107","krvnagrupa":"A +"},{"ime":"Mirela","prezime":"Doboli","krvnagrupa":"B -"},{"ime":"Ivan","prezime":"Ivan\u010di\u0107","krvnagrupa":"B +"},{"ime":"Matija","prezime":"Matkovi\u0107","krvnagrupa":"A -"},{"ime":"Mirko","prezime":"Mirk","krvnagrupa":"AB +"},{"ime":"Ivan","prezime":"Ivi\u0107","krvnagrupa":"0 -"},{"ime":"Milivoj","prezime":"Lulek","krvnagrupa":"A +"},{"ime":"andro","prezime":"zubi\u0107","krvnagrupa":"A -"},{"ime":"ibrica","prezime":"\u0107usi\u0107","krvnagrupa":"B +"},{"ime":"Fernando","prezime":"Giotto","krvnagrupa":"B -"},{"ime":"Silvana","prezime":"Romi\u0107","krvnagrupa":"AB +"},{"ime":"Ivica","prezime":"Loki\u0107","krvnagrupa":"AB -"},{"ime":"Marija","prezime":"Bani\u010devi\u0107","krvnagrupa":"0 +"},{"ime":"Marko","prezime":"Kaba\u0161i","krvnagrupa":"0 -"},{"ime":"Robert","prezime":"Kumerle","krvnagrupa":"AB +"},{"ime":"Mile","prezime":"Kekin","krvnagrupa":"B -"},{"ime":"Vatroslav","prezime":"Lizinski","krvnagrupa":"B +"},{"ime":"Slavica","prezime":"Juki\u0107","krvnagrupa":"B +"},{"ime":"Branimir","prezime":"Ivkovi\u0107","krvnagrupa":"A -"},{"ime":"Mario","prezime":"Mari\u0107","krvnagrupa":"A +"},{"ime":"Ingrid","prezime":"Anti\u010devi\u0107","krvnagrupa":"AB +"},{"ime":"Davorka","prezime":"Peki\u0107","krvnagrupa":"0 -"},{"ime":"Miroslav","prezime":"Kurtovi\u0107","krvnagrupa":"AB +"},{"ime":"Ivanka","prezime":"Boljkovi\u0107","krvnagrupa":"0 +"},{"ime":"Luka","prezime":"Marti\u0107","krvnagrupa":"A -"},{"ime":"Damir","prezime":"Cerovi\u0107","krvnagrupa":"B +"},{"ime":"Mirko","prezime":"Mirkovi\u0107","krvnagrupa":"0 +"} ]\');

//alert(a[4].ime);

document.getElementById("ime").innerHTML="Ime: " + b[i].ime;
document.getElementById("prezime").innerHTML="Prezime: " + b[i].prezime;
document.getElementById("krvnagrupa").innerHTML="Krvna grupa: " + b[i].krvnagrupa;



});
</script>';


echo'<p id="ime"></p>
<p id="prezime"></p>
<p id="krvnagrupa"></p>

<script>


var a = "<?php Print($json_a); ?>";

var i = 1;

obj = JSON.parse(a);

alert(obj.count);

function sljedeci(){
alert("I am an alert box!");
document.getElementById("ime").innerHTML = "";
	document.getElementById("prezime").innerHTML = "Ovo je prezime";
	document.getElementById("krvnagrupa").innerHTML = "Krvna grupa";
}

var b=JSON.parse(a);

JSON.parse("<?php echo $phpArray; ?>";);

    document.getElementById("ime").innerHTML = "";
	document.getElementById("prezime").innerHTML = "Ovo je prezime";
	document.getElementById("krvnagrupa").innerHTML = "Krvna grupa";
}
</script>';

?>
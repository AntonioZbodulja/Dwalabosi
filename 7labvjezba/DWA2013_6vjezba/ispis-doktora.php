﻿<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<button id="sljedeci">Sljedeci</button>
<button id="ucitaj">Učitaj</button>

<script>

$(document).ready(function() {
    $("#ucitaj").click(function() {
        $.ajax({
            url : "podaci.txt",
            dataType: "text",
            success : function (data) {
			window.b = JSON.parse(data);
            }
        });
    });
}); 

</script>

<script>
	
var i = 1; //-1


$( "#sljedeci" ).click(function() {

i++;
    
//var a = JSON.parse(\'[ {"ime":"Mirko","prezime":"Mirki\u0107","krvnagrupa":"B +"},{"ime":"Matija","prezime":"Matiji\u0107","krvnagrupa":"A +"},{"ime":"Mirela","prezime":"Doboli","krvnagrupa":"B -"},{"ime":"Ivan","prezime":"Ivan\u010di\u0107","krvnagrupa":"B +"},{"ime":"Matija","prezime":"Matkovi\u0107","krvnagrupa":"A -"},{"ime":"Mirko","prezime":"Mirk","krvnagrupa":"AB +"},{"ime":"Ivan","prezime":"Ivi\u0107","krvnagrupa":"0 -"},{"ime":"Milivoj","prezime":"Lulek","krvnagrupa":"A +"},{"ime":"andro","prezime":"zubi\u0107","krvnagrupa":"A -"},{"ime":"ibrica","prezime":"\u0107usi\u0107","krvnagrupa":"B +"},{"ime":"Fernando","prezime":"Giotto","krvnagrupa":"B -"},{"ime":"Silvana","prezime":"Romi\u0107","krvnagrupa":"AB +"},{"ime":"Ivica","prezime":"Loki\u0107","krvnagrupa":"AB -"},{"ime":"Marija","prezime":"Bani\u010devi\u0107","krvnagrupa":"0 +"},{"ime":"Marko","prezime":"Kaba\u0161i","krvnagrupa":"0 -"},{"ime":"Robert","prezime":"Kumerle","krvnagrupa":"AB +"},{"ime":"Mile","prezime":"Kekin","krvnagrupa":"B -"},{"ime":"Vatroslav","prezime":"Lizinski","krvnagrupa":"B +"},{"ime":"Slavica","prezime":"Juki\u0107","krvnagrupa":"B +"},{"ime":"Branimir","prezime":"Ivkovi\u0107","krvnagrupa":"A -"},{"ime":"Mario","prezime":"Mari\u0107","krvnagrupa":"A +"},{"ime":"Ingrid","prezime":"Anti\u010devi\u0107","krvnagrupa":"AB +"},{"ime":"Davorka","prezime":"Peki\u0107","krvnagrupa":"0 -"},{"ime":"Miroslav","prezime":"Kurtovi\u0107","krvnagrupa":"AB +"},{"ime":"Ivanka","prezime":"Boljkovi\u0107","krvnagrupa":"0 +"},{"ime":"Luka","prezime":"Marti\u0107","krvnagrupa":"A -"},{"ime":"Damir","prezime":"Cerovi\u0107","krvnagrupa":"B +"},{"ime":"Mirko","prezime":"Mirkovi\u0107","krvnagrupa":"0 +"} ]\');


document.getElementById("ime").innerHTML="Ime: " + b[i].ime;
document.getElementById("prezime").innerHTML="Prezime: " + b[i].prezime;
document.getElementById("krvnagrupa").innerHTML="Krvna grupa: " + b[i].krvnagrupa;



});
</script>

<?PHP

echo'<p id="ime"></p>
<p id="prezime"></p>
<p id="krvnagrupa"></p>';


?>
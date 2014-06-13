     
<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv='content-type' content='text/html; charset=utf-8'>
    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' rel='stylesheet' media='screen'>
    <link href='css/variables.css' rel='stylesheet' media='screen'>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js' type='text/javascript'>
    </script>
    <!--script(src="js/jquery.js")-->
    <script src='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js'>
    </script>
    <title>
      DWA2013
    </title>
  </head>
  <body>
    <div class='navbar navbar-fixed-top'>
      <div class='navbar-inner'>
        <div class='container-fluid'>
          <a href='#' class='brand'>
            DWA2013
          </a>
          <ul class='nav'>
            <li class='active'>
              <a href='#'>
                Početak
              </a>
            </li>
          </ul>
          <p class='navbar-text pull-right'>
            Dobrodošao
            <a href='#'>
              <?php echo htmlspecialchars($user) ?>
            </a>
            <a href='logout'>
              <button type='submit' data-toggle='button' style='position:relative; top:-4px' class='btn'>
                Odspoji me
              </button>
            </a>
          </p>
        </div>
      </div>
    </div>
    <div class='container-fluid'>
      <div class='row-fluid'>
        <div class='span12'>
          <div class='hero-unit'>
            <h1>
              Primjer PHP frameworka + ne-HTML templatea + ORM-a 
            </h1>
            <p>
              Ove stranice u primjer PHP frameworka (Slim framework), neHTML baziranog templatea (Jade), ORM-a (Idiorm) i sve je začinjeno time što se koristi Twitter bootstrap framework za izradu stranica.
            </p>
            <p>
              O svim ovim tehnologijama potražite više informacija na stranicama njihovih autora:
              <ul>
                <li>
                   
                  <a href='http://www.slimframework.com/'>
                    Slim framework
                  </a>
                </li>
                <li>
                   
                  <a href='http://jade-lang.com/'>
                    Jade 
                  </a>
                  (odnosno 
                  <a href='https://github.com/everzet/jade.php/'>
                    Jade.php
                  </a>
                  - obavezno pogledati i 
                  <a href='https://github.com/lukegb/jade.php'>
                    drugu verziju
                  </a>
                  )
                </li>
                <li>
                   
                  <a href='http://j4mie.github.io/idiormandparis/'>
                    Idiorm
                  </a>
                </li>
                <li>
                   
                  <a href='http://twitter.github.io/bootstrap/‎'>
                    Twitter bootstrap
                  </a>
                </li>
              </ul>
            </p>
          </div>
           
          <div class='row-fluid'>
                       
					   <h3>Formular za upis pacijenata</h3>
		
			<form action="podaci-o-pacijentu.php" method="post" >
Ime: <input type="text" name="ime" required="required"><br />
Prezime: <input type="text" name="prezime" required="required"><br />
Spol: <input type="radio" name="spol" value="musko" required value="1">M <input type="radio" name="spol" value="zensko">Ž<br />
Datum rođenja: <input type="date" name="datum" required="required"><br />
Mjesto rođenja: <input type="text" name="mjesto" required="required"><br />
Adresa i mjesto stanovanja: <input type="text" name="adresa" required="required"><br />
Krvna grupa:
<input type="radio" name="krvnagrupa" value="A" required value="1">A 
<input type="radio" name="krvnagrupa" value="B">B
<input type="radio" name="krvnagrupa" value="AB">AB
<input type="radio" name="krvnagrupa" value="0">0<br />

<input type="radio" name="krvnagrupaposneg" value="+" required value="1">+ (pos)
<input type="radio" name="krvnagrupaposneg" value="-">- (neg)<br />

Ima li prijašnjih medicinskih tegoba (srčane tegobe, tlak, virusne bolesti (Hepatits, HIV)):<br />
<input type="radio" name="tegobe" value="da" required value="1">Da <input type="radio" name="tegobe" value="ne">Ne<br />

Ako je odgovor na prijašnje pitanje "Da" popuniti:<br />
Koje tegobe osoba ima
<input type="text" name="kojetegobe" ><br />

Je li osoba alergična na lijekove:<br />
<input type="radio" name="alergija" value="Da" required value="1">Da
<input type="radio" name="alergija" value="Ne">Ne
<input type="radio" name="alergija" value="Ne zna">Ne zna<br />

Ako je odgovor na prijašnje pitanje "Da" popuniti:<br />
Na koje lijekove je osoba alergična 
<input type="text" name="lijekovialergija"><br />
<input type="submit" class="btn" value="Pošalji">
</form>
					   
					   
            <!--<div class='span1'>
              <h2>
                Mali blok
              </h2>
              <p>
                Blok širine 1
              </p>
            </div>
            <div class='span3'>
              <h2>
                Nešto veći blok
              </h2>
              <p>
                 Blok širine 3, interesantan jer je širina gornjih blokova jednaka 4, a lijevi i ovaj su 1+3 = 4, pa sve ispada lijepo centrirano.
              </p>
            </div>
            <div class='span8'>
              <h2>
                Velik blok
              </h2>
              <p>
                Puno veći blok (blok širine 8). Ukupna širina je 1 + 3 + 8 = 12. No ono što je zanimljivo je što se događa ako uvećavate ili smanjujete prozor vašeg pretraživača.
              </p>
            </div>-->
          </div>
        </div>
      </div>
    </div>
    <hr>
    <footer>
      <p class='text-center'>
         &copy; TVZ 2013
      </p>
    </footer>
  </body>
  <script type="text/javascript"> window.history.forward();
 
 
 
</script>
</html>

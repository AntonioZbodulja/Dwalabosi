     
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

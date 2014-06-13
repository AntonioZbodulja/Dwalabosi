<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
        <title>Mobilna verzija</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="lib/jquery-1.6.4.js"></script>
        <script src="lib/jquery.mobile-1.1.0.js"></script>
        <link href="src/css/jquery.mobile.structure-1.1.0.css" rel="stylesheet"
        />
        <link href="src/css/jquery.mobile.theme-1.1.0.css" rel="stylesheet" />
    </head>
    
    <body>
	
	
        <div data-role="page" id="page1">
            <div data-role="header">
                <h1>Header</h1>
            </div>
            <div data-role="content">
			
			<form action="index.php" method="get">
			<div data-role="fieldcontain">
                    <label for="ime">Ime</label>
                    <input type="text" id="ime" name="ime"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="prezime">Prezime</label>
                    <input type="text" id="prezime" name="prezime"/>
                </div>
                <input type="submit" value="Submit">
				</form>
								
			
			<?php
			if (isset($_GET['ime'],$_GET['prezime'])){

$ime=$_GET["ime"];

$prezime=$_GET["prezime"];

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

if($row['ime']==$_GET['ime'] OR $row['prezime']==$_GET['prezime']){
echo $row['ime'];
echo "<br />";
echo $row['prezime'];
}
    $row_array['ime'] = $row['ime'];
    $row_array['prezime'] = $row['prezime'];
    $row_array['krvnagrupa'] = $row['krvnagrupa'];

}

}
?>
			
            </div>
            <div data-role="footer">
                <h1>Footer</h1>
            </div>
        </div>
    </body>

</html>
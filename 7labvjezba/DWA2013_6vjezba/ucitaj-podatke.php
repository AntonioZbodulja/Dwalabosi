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
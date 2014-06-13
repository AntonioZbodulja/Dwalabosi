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
        Dobrodošli
            </div>

        <div class="content">

		<div class="row">
		
		<!--<div class="column column-3 reklama">
		<button id="hide">X</button>
		<img src="images/reklama.jpg" width="500">
		</div>
		-->
		<div class="column column-3">
		<img src="images/logo.png" width="180"><br />
		</div>
		
		
		
		</div>
		
		<div class="row">
		<div class="navigation column column-3">
		
		</div>
		
		
		<div class="column column-8">
		
		<?php

ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dwa"; // Database name 
$tbl_name="korisnici"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("Nije se moguće spojiti"); 
mysql_select_db("$db_name")or die("Nije moguće pronaći bazu");

// Define $myusername and $mypassword 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE korisnickoime='$username' and lozinka='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $username, $password and redirect to file "login-success.php"
//session_register("username");
//session_register("password");
session_start(); 
$_SESSION['username']= "$username";
$_SESSION['password']= "$password";
header("location:login-success.php");
}
else {
echo "Pogrešno ime i/ili lozinka";
}
ob_end_flush();
?>

<hr>


</div>
</div>
            </div>

    <div class="footer">Copyright ZKD, 2014</div>
   
</body>
</html>
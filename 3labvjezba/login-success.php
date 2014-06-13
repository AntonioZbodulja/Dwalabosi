<?php
// Check if session is not registered, redirect back to main page. 
session_start();
if (!isset($_SESSION['username'])){
header("location:login.html");
}
?>

<html>
<head>
<meta http-equiv="refresh" content="0; url=pacijenti.php" />
</head>
<body>
Uspješno ste prijavljeni
</body>
</html>
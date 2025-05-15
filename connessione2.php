<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "formula1_news";
$connessione2 = mysqli_connect ($host, $user, $pass, $db)
or die("Connessione non riuscita " . mysqli_connect_error());
?>
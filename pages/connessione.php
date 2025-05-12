<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "formula1";
$connessione = mysqli_connect ($host, $user, $pass, $db)
or die("Connessione non riuscita " . mysqli_connect_error());
?>
<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "utenti_f1";
$connessione_utenti = mysqli_connect ($host, $user, $pass, $db)
or die("Connessione non riuscita " . mysqli_connect_error());
?>
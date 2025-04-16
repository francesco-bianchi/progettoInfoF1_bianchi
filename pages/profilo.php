<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("connessione.php");
        $query = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
        INNER JOIN Scuderie s ON cp.scuderia_id = s.id
        WHERE p.id = $_GET[id]";
        $result = mysqli_query($connessione, $query)
        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
        $resultset = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultset[] = $row;
        }
    ?>

    <?php if (isset($resultset[0])): ?>
        <div>
            <p>
                <?= $resultset[0]['nome'] ?>
                <?= $resultset[0]['cognome'] ?>
            </p>
            <img src="<?= $resultset[0]['immagine'] ?>">
        </div>
    <?php endif; ?>
        

</body>
</html>
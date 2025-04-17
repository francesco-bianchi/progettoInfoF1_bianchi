<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
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
        $resultQueryPiloti = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultQueryPiloti[] = $row;
        }

        $queryScuderie = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
        INNER JOIN Scuderie s ON cp.scuderia_id = s.id
        WHERE p.id = $_GET[id]";
        $resultScuderie = mysqli_query($connessione, $queryScuderie)
        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
        $resultQueryScuderie = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultQueryScuderie[] = $row;
        }
    ?>

    <?php if (isset($resultQueryPiloti[0])): ?>
    <div class="row">
		<div class="container col-12 text-center">
            <p class="fw-bold fs-4">
                <?= $resultQueryPiloti[0]['nome'] ?>
                <?= $resultQueryPiloti[0]['cognome'] ?>
                <span id="nazionalita_id"><?= $resultQueryPiloti[0]['nazionalita'] ?></span>
            </p>
            <img src="<?= $resultQueryPiloti[0]['immagine'] ?>" class="dim_imm_piloti">
		<p class="fixed-bottom">Torna alla <a href="../index.php" class="link-opacity-50-hover link-underline-danger link-offset-2 visited text-black">Home</a></p>
	</div>
    <?php endif; ?>
       
<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
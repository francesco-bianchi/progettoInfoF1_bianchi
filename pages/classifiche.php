<html>
    <head>
    <title>Classifiche</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>
<body class="bg-body-pagine">
<?php 
    session_start();
?>
<nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
            <img src="../images/f1_logo_footer.svg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link active visited text-white" aria-current="page" href="../index.php">Home</a>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Albo
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2020">Classifica 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2021">Classifica 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2022">Classifica 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2023">Classifica 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2024">Classifica 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piste
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2020">Piste del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2021">Piste del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2022">Piste del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2023">Piste del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2024">Piste del 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piloti
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2020">Piloti del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2021">Piloti del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2022">Piloti del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2023">Piloti del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2024">Piloti del 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    2025
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2025">Classifica</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2025">Piloti</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2025">Piste</a></li>
                    </ul>
                    </li>
                <li class="nav-item position-absolute top-50 start-100 pe-5 translate-middle pe-2">
                    <?php
                        if(isset($_SESSION["utenti"])){
                            echo "<a href='./pages/personale.php' class='nav-link active visited text-white' aria-label='Account'>
                                    <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                                        <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                                        <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                                    </svg>
                                  </a>";
                        }
                        else{
                          echo "<a href='./pages/accedi.php' class='nav-link active visited text-white' aria-label='Account'>
                                    <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                                        <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                                        <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                                    </svg>
                                </a>";
                        }
                    ?>
                    
                  </li>
            </ul>
          </div>
        </div>
      </nav><br>

        <div class="container">
            <?php
            include("connessione.php");
            if(isset($_GET["id"])){
                $queryPiloti = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                INNER JOIN Scuderie s ON cp.scuderia_id = s.id
                WHERE p.id = $_GET[id]";
                $resultPiloti = mysqli_query($connessione, $queryPiloti)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                $resultQueryPiloti = [];
                while ($row = mysqli_fetch_array($resultPiloti, MYSQLI_ASSOC)) {
                    $resultQueryPiloti[] = $row;
                }

                $queryPilScuderie = "SELECT p.*, s.* FROM Piloti_Scuderie p inner join Piloti pi ON p.pilota_id = pi.id 
                inner join Scuderie s ON s.id = p.scuderia_id 
                WHERE pi.id = $_GET[id]
                ORDER BY p.anno_inizio";
                $resultPilScuderie = mysqli_query($connessione, $queryPilScuderie)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                $resultQueryPilScuderie = [];
                while ($row = mysqli_fetch_array($resultPilScuderie, MYSQLI_ASSOC)) {
                    $resultQueryPilScuderie[] = $row;
                }
            }

            if(isset($_GET["id_scuderia"])){

                $queryScuderie = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                INNER JOIN Scuderie s ON cp.scuderia_id = s.id
                WHERE s.id = $_GET[id_scuderia]";
                $resultScuderie = mysqli_query($connessione, $queryScuderie)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                $resultQueryScuderie = [];
                while ($row = mysqli_fetch_array($resultScuderie, MYSQLI_ASSOC)) {
                    $resultQueryScuderie[] = $row;
                }
            }
            ?>
            <!-- MODAL (inizialmente nascosto finché una riga non viene cliccata) per i piloti -->
            <?php if (isset($resultQueryPiloti[0])): ?>
                <div class="modal fade" id="modalPilota" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header row">
                                <div class="col-6 text-start ps-4">
                                    <h5 class="modal-title" id="modalPilotaLabel"><?= $resultQueryPiloti[0]['nome'] ?> <?= $resultQueryPiloti[0]['cognome']   ?>
                                    <span class="nazionalita_id"><?= $resultQueryPiloti[0]['nazionalita'] ?></span></h5>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="./classifiche.php"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></a>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <img src="<?= $resultQueryPiloti[0]['immagine'] ?>" alt="Immagine Pilota" class="img-fluid mt-3 dim_imm_piloti"><br>
                                    </div>
                                    <div class="col-6">
                                        <p class="fw-bold">Statistiche:</p>
                                        <p>Vittorie in carriera: <?= $resultQueryPiloti[0]['vittorie']?></p>
                                        <p>Gare: <?= $resultQueryPiloti[0]['gare_svolte']?></p>
                                        <p>Podi: <?= $resultQueryPiloti[0]['podi']?></p>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">Anno</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="fw-bold">Team</p>
                                    </div>
                                </div>
                                <?php foreach($resultQueryPilScuderie as $annoPil): ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <p><?= $annoPil['anno_inizio'] .' - '. $annoPil['anno_fine'] ?></p>
                                        </div>
                                        <div class="col-6">
                                            <p><?= $annoPil['nome_scuderia']?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                
                            </div>
                            <div class="modal-footer">
                            <a href="./classifiche.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button></a>
                            </div>
                        </div>
                    </div>
            <?php endif; ?>
        </div>
        <div class="container">
        <?php    
                if(isset($_GET["anno"])){
                    $anno = $_GET["anno"];
                    $_SESSION["anno"] = $anno;
                }
                else{
                    $anno = $_SESSION["anno"];

                }
                $counter =0;

                $query = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id
                WHERE c.anno = '$anno' ORDER BY cp.punteggio_totale DESC";
                $result = mysqli_query($connessione, $query)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                echo"<h1 class='mx-auto text-center'> Classifica piloti </h1><br>";
                echo"<div class='row'>
		                <div class='col-12'>";
                            echo "<table class='text-center mx-auto rounded-3'>";
                            echo"<thead>";
                                echo"<tr>";
                                    echo"<td class='px-3 cell'>Posizione</td>";
                                    echo"<td class='px-3 cell'>Nome pilota</td>";
                                    echo"<td class='px-3 cell'>Cognome pilota</td>";
                                    echo"<td class='px-3 cell'>Punteggio totale</td>";
                                    echo"<td class='px-3 cell'>Nome scuderia</td>";
                                echo"</tr>";
                            echo"</thead>";
                            echo"<tbody>";
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) //solo associativo
                            {
                                $counter++;
                                echo"<tr onclick="."window.location.href='?id=$row[pilota_id]' style='cursor: pointer;''>";
                                    if($counter == 1){
                                        echo"<td class='text-warning fw-bold px-3'>$counter</td>";
                                    }
                                    else if($counter == 2){
                                        echo"<td class='text-secondary fw-bold px-3'>$counter</td>";
                                    }
                                    else if($counter == 3){
                                        echo"<td class='text-brown-css fw-bold px-3'>$counter</td>";
                                    }
                                    else{
                                        echo"<td class='text-black px-3'>$counter</td>";
                                    }
                                    echo"<td class='px-3'>$row[nome]</td>";
                                    echo"<td class='px-3'>$row[cognome]</td>";
                                    echo"<td class='px-3'>$row[punteggio_totale]</td>";
                                    echo"<td class='px-3'>$row[nome_scuderia]</td>";
                                echo"</tr>";
                            }
                            echo"</tbody>";
                            echo"</table>";
                        echo"</div>";
                    echo"</div><br><br>";
                    ?>
    </div>
<div class="container">
<!--MODAL scuderie -->
<?php if (isset($resultQueryScuderie[0])): ?>
    <div class="modal fade" id="modalScuderia" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header row">
                    <div class="col-6 text-start ps-4">
                        <h5 class="modal-title" id="modalScuderiaLabel"><?= $resultQueryScuderie[0]['nome_scuderia'] ?>
                        <span class="nazionalita_id"><?= $resultQueryScuderie[0]['nazionalita_scuderia'] ?></span></h5>
                    </div>
                    <div class="col-6 text-end">
                        <a href="./classifiche.php"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></a>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <img src="<?= $resultQueryScuderie[0]['immagine_scuderia'] ?>" alt="Immagine Pilota" class="img-fluid mt-3 dim_imm_scuderie"><br>
                        </div>
                        <div class="col-6">
                            <p class="fw-bold">Statistiche:</p>
                            <p>Podi: <?= $resultQueryScuderie[0]['podi'] ?></p>
                            <p>Vittorie: <?= $resultQueryScuderie[0]['vittorie'] ?></p>
                            <p>Campionati: <?= $resultQueryScuderie[0]['campionati_vinti'] ?></p>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12 text-start px-4">
                            <p class="fw-bold">Informazioni sul team:</p>
                            <p>Presidente: <?= $resultQueryScuderie[0]['presidente'] ?></p>
                            <p>Direttore: <?= $resultQueryScuderie[0]['direttore'] ?></p>
                            <p>Manager tecnico: <?= $resultQueryScuderie[0]['manager_tecnico'] ?></p>
                        </div>
                    </div><br>
                    
                </div>
                <div class="modal-footer">
                <a href="./classifiche.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button></a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
</div>
<div class="container">                           
        <?php
            $counterScuderie=0;
                $query_scuderie = "SELECT * FROM Classifiche_Costruttori cc INNER JOIN Scuderie s ON cc.scuderia_id = s.id 
                INNER JOIN Campionati c ON cc.campionati_id = c.id WHERE c.anno = '$anno' ORDER BY cc.punteggio_totale DESC";
                $result_scuderie = mysqli_query($connessione, $query_scuderie)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                
                echo"<h1 class='mx-auto text-center'> Classifica costruttori </h1><br>";
                echo"<div class='row'>";
                echo"<div class='container col-12'>";
                    echo "<table class='text-center table-css mx-auto'>";
                    echo"<thead>";
                        echo"<tr class='table-header'>";
                            echo"<td class='px-3 cell'>Posizione</td>";
                            echo"<td class='px-3 cell'>Nome scuderia</td>";
                            echo"<td class='px-3 cell'>Punteggio totale</td>";
                        echo"</tr>";
                        echo"</thead>";
                        echo"<tbody>";
                    while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC)) //solo associativo
                    {
                        $counterScuderie++;
                        echo"<tr onclick="."window.location.href='?id_scuderia=$row[scuderia_id]' style='cursor: pointer;''>";
                        if($counterScuderie == 1){
                            echo"<td class='text-warning fw-bold px-3'>$counterScuderie</td>";
                        }
                        else if($counterScuderie == 2){
                            echo"<td class='text-secondary fw-bold px-3'>$counterScuderie</td>";
                        }
                        else if($counterScuderie == 3){
                            echo"<td class='text-brown-css fw-bold px-3'>$counterScuderie</td>";
                        }
                        else{
                            echo"<td class='text-black px-3'>$counterScuderie</td>";
                        }
                            echo"<td class='px-3'>$row[nome_scuderia]</td>";
                            echo"<td class='px-3'>$row[punteggio_totale]</td>";
                        echo"</tr>";
                    }
                    echo"</tbody>";
                    echo"</table><br><br>";
                echo"</div>"; 

                if($anno == 2025 && isset($_SESSION["utenti"])){
                    if($_SESSION["utenti"]["email"] == "fralu06@gmail.com"){
                        echo"<span class='mx-auto text-center'>Accedi alla <a href='./paginaAmministratore.php?indice=cla' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'> pagina amministratore</a></span><br><br>";
                    }
                }
                
                echo "<span class='mx-auto text-center'>Torna alla <a href='../index.php' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'>home</a></span><br><br>";
                echo "<span></span>";
            echo"</div>";

        ?>
</div>


<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
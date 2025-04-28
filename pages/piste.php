<html>
    <head>
    <title>Piste</title>
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

            if(isset($_GET["id_circuito"])){

                $queryScuderie = "SELECT * FROM Circuiti c INNER JOIN Gare g ON c.id = g.circuito_id INNER JOIN Piloti p ON g.vincitore_id = p.id
                WHERE c.id = $_GET[id_circuito]";
                $resultScuderie = mysqli_query($connessione, $queryScuderie)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                $resultQueryPiste = [];
                while ($row = mysqli_fetch_array($resultScuderie, MYSQLI_ASSOC)) {
                    $resultQueryPiste[] = $row;
                }
            }
        ?>
        <!-- MODAL (inizialmente nascosto finché una riga non viene cliccata) per le piste -->
        <?php if (isset($resultQueryPiste[0])): ?>
                <div class="modal fade" id="modalPista" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header row">
                                <div class="col-10 text-start ps-2">
                                    <h5 class="modal-title" id="modalPilotaLabel"><?= $resultQueryPiste[0]['nome_circuito'] ?>
                                    <span class="nazionalita_id"><?= $resultQueryPiste[0]['paese'] ?></span></h5>
                                </div>
                                <div class="col-2 text-end">
                                    <a href="./piste.php"><button type="button" class="btn-close" data-bs-dismiss="modal"></button></a>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-7 my-auto">
                                        <img src="<?= $resultQueryPiste[0]['immagine_circuito'] ?>" alt="Immagine Pilota" class="img-fluid w-100"><br>
                                    </div>
                                    <div class="col-5">
                                    <p class="fw-bold text-center">Vincitori:</p>
                                        <?php foreach($resultQueryPiste as $dataPiste): ?>
                                        <?php
                                            $annoData = new DateTime($dataPiste['data']);
                                            $annoCircuito = $annoData->format('Y');
                                        ?>
                                            <p><span class="fw-bold"><?= $annoCircuito?></span>: <?= $dataPiste['nome'] ?> <?= $dataPiste['cognome'] ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div><br>
                                
                            </div>
                            <div class="modal-footer">
                            <a href="./piste.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button></a>
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

            $query = "SELECT * FROM Gare g INNER JOIN Circuiti c ON g.circuito_id = c.id 
                INNER JOIN Campionati ca ON g.campionato_id = ca.id WHERE ca.anno = '$anno' ORDER BY g.data ASC";
            $result = mysqli_query($connessione, $query)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
            echo"<h1 class='mx-auto text-center'> Gare $anno</h1><br>";
            echo"<div class='row'>
                    <div class='col-12'>";
                        echo "<table class='text-center mx-auto'>";
                        echo"<thead>";
                            echo"<tr class='table-header'>";
                                echo"<td class='px-3 cell'>Nome gara</td>";
                                echo"<td class='px-3 cell'>Lunghezza (in km)</td>";
                                echo"<td class='px-3 cell'>Tipo circuito</td>";
                                echo"<td class='px-3 cell'>Data</td>";
                            echo"</tr>";
                            echo"</thead>";
                            echo"<tbody>";
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) //solo associativo
                        {
                            echo"<tr onclick="."window.location.href='?id_circuito=$row[circuito_id]' style='cursor: pointer;''>";
                                echo"<td class='px-3'>$row[nome_circuito]</td>";
                                echo"<td class='px-3'>$row[lunghezza_km]</td>";
                                echo"<td class='px-3'>$row[tipo_circuito]</td>";
                                echo"<td class='px-3'>$row[data]</td>";
                            echo"</tr>";
                        }
                        echo"</tbody>";
                        echo"</table>";
                    echo"</div>";
                echo"</div><br><br>";
                if($anno == 2025 && isset($_SESSION["utenti"])){
                    if($_SESSION["utenti"]["email"] == "fralu06@gmail.com"){
                        echo"<div class='row'>
                                <span class='mx-auto text-center'>Accedi alla <a href='./paginaAmministratore.php?indice=piste' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'> pagina amministratore</a></span><br><br>
                            </div>";
                    }
                }
                echo"<br><div class='row'>";
                    echo "<span class='mx-auto text-center'>Torna alla <a href='../index.php' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'>home</a></span><br><br>";
                    echo "<span></span>";
                echo"</div>";

        ?>
        </div>


<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
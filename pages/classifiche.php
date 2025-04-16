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
                    Classifiche
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2020">Classifica 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2021">Classifica 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2022">Classifica 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2023">Classifica 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2024">Classifica 2024</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./classifiche.php?anno=2024">Classifica 2025</a></li>
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
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=2025"> Piste del 2025</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piste.php?anno=all">Visualizza tutte</a></li>
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
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=2025"> Piloti del 2025</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./piloti.php?anno=all">Visualizza tutti</a></li>
                    </ul>
                </li>
            </ul>
          </div>
          <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                        if(isset($_SESSION["utenti"])){
                            echo "<a href='./personale.php' class='nav-link active visited text-white' aria-label='Account'>
                                    <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                                        <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                                        <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                                    </svg>
                                  </a>";
                        }
                        else{
                          echo "<a href='./accedi.php' class='nav-link active visited text-white' aria-label='Account'>
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
            

                $query = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id WHERE c.anno = '$_GET[anno]' ORDER BY cp.punteggio_totale DESC";
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
                                echo"<tr class='clickable-row' data-href='./profilo.php?id=$row[pilota_id]'>";
                                    if($row["posizione"] == 1){
                                        echo"<td class='text-warning fw-bold px-3'>$row[posizione]</td>";
                                    }
                                    else if($row["posizione"] == 2){
                                        echo"<td class='text-secondary fw-bold px-3'>$row[posizione]</td>";
                                    }
                                    else if($row["posizione"] == 3){
                                        echo"<td class='text-brown-css fw-bold px-3'>$row[posizione]</td>";
                                    }
                                    else{
                                        echo"<td class='text-black px-3'>$row[posizione]</td>";
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

                        $query_scuderie = "SELECT * FROM Classifiche_Costruttori cc INNER JOIN Scuderie s ON cc.scuderia_id = s.id INNER JOIN Campionati c ON cc.campionati_id = c.id WHERE c.anno = '$_GET[anno]' ORDER BY cc.punteggio_totale DESC";
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
                                echo"<tr>";
                                if($row["posizione"] == 1){
                                    echo"<td class='text-warning fw-bold px-3'>$row[posizione]</td>";
                                }
                                else if($row["posizione"] == 2){
                                    echo"<td class='text-secondary fw-bold px-3'>$row[posizione]</td>";
                                }
                                else if($row["posizione"] == 3){
                                    echo"<td class='text-brown-css fw-bold px-3'>$row[posizione]</td>";
                                }
                                else{
                                    echo"<td class='text-black px-3'>$row[posizione]</td>";
                                }
                                    echo"<td class='px-3'>$row[nome_scuderia]</td>";
                                    echo"<td class='px-3'>$row[punteggio_totale]</td>";
                                echo"</tr>";
                            }
                            echo"</tbody>";
                            echo"</table><br><br>";
                        echo"</div>";
                        echo "<span class='mx-auto text-center'>Torna alla <a href='../index.php' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'>home</a></span><br><br>";
                        echo "<span></span>";
                    echo"</div>";

        ?>
        </div>


<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
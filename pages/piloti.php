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
        $anno = $_GET["anno"];
        include("connessione.php");
        if($anno == "all"){
            $query = "SELECT * FROM Piloti_Scuderie p inner join Piloti pi ON p.pilota_id = pi.id inner join Scuderie s ON s.id = p.scuderia_id
            ORDER BY pi.nome, p.anno_inizio";
        }
        else{
            $query = "SELECT p1.*, pi.*, s.*
                        FROM Piloti_Scuderie p1 INNER JOIN Piloti pi ON p1.pilota_id = pi.id
                        INNER JOIN Scuderie s ON s.id = p1.scuderia_id
                        WHERE p1.anno_inizio <= $anno
                        AND (p1.anno_fine IS NULL OR p1.anno_fine >= $anno)
                        AND NOT EXISTS (
                            SELECT 1
                            FROM Piloti_Scuderie p2
                            WHERE p2.pilota_id = p1.pilota_id
                                AND p2.anno_inizio > p1.anno_inizio
                                AND p2.anno_inizio <= $anno
                                AND (p2.anno_fine IS NULL OR p2.anno_fine >= $anno)
                        )";
        }
        $result = mysqli_query($connessione, $query)
        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
        echo"<h1 class='mx-auto text-center'> Gare </h1><br>";
        echo"<div class='row'>
                <div class='col-12'>";
                    echo "<table class='text-center mx-auto'>";
                    echo"<thead>";
                        echo"<tr class='table-header'>";
                            echo"<td class='px-3 cell'>Nome pilota</td>";
                            echo"<td class='px-3 cell'>Cognome pilota</td>";
                            echo"<td class='px-3 cell'>Nazionalità pilota</td>";
                            echo"<td class='px-3 cell'>Nome scuderia</td>";
                            echo"<td class='px-3 cell'>Anni</td>";
                            echo"<td class='px-3 cell'>Nazionalita scuderia</td>";
                        echo"</tr>";
                        echo"</thead>";
                        echo"<tbody>";
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) //solo associativo
                    {
                        echo"<tr>";
                            echo"<td class='px-3'>$row[nome]</td>";
                            echo"<td class='px-3'>$row[cognome]</td>";
                            echo"<td class='px-3'>$row[nazionalita]</td>";
                            echo"<td class='px-3'>$row[anno_inizio]";
                            if($row["anno_fine"] != NULL){
                                echo"- $row[anno_fine]</td>";
                            }
                            else{
                                echo"</td>";
                            }
                            echo"<td class='px-3'>$row[nome_scuderia]</td>";
                            echo"<td class='px-3'>$row[nazionalita_scuderia]</td>";
                        echo"</tr>";
                    }
                    echo"</tbody>";
                    echo"</table>";
                echo"</div>";
            echo"</div><br><br>";
            echo"<div class='row'>";
                echo "<span class='mx-auto text-center'>Torna alla <a href='../index.php' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'>home</a></span><br><br>";
                echo "<span></span>";
            echo"</div>";

        ?>
        </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
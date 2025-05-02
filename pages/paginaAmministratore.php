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
            <h3 class="text-center">Bentornato nella pagina amministratore</h3><br><br>
            <?php
            include("connessione.php");
            $query_scuderie = "SELECT * FROM Classifiche_Costruttori cc INNER JOIN Scuderie s ON cc.scuderia_id = s.id 
                                INNER JOIN Campionati c ON cc.campionati_id = c.id WHERE c.anno = '2025'";
            $result_scuderie = mysqli_query($connessione, $query_scuderie)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

            if(isset($_GET["indice"])){
                echo"<div class='row'>";
                //classifiche
                if($_GET["indice"]=="cla"){
                    echo"<div class='col-sm-12 col-lg-4 ps-5'>
                        <h6>Inserisci pilota nella classifica</h6>";
                        if(isset($_GET["successoIns"])){
                            echo"<p class='text-success'>Inserimento avvenuto correttamente</p>";
                        }
                        else if(isset($_GET["erroreIns"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché pilota inesistente</p>";
                        }
                        else if(isset($_GET["erroreInsCla"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché pilota già presente in classifica</p>";
                        }
                        echo"<form action='controlloAmm.php?indiceForm=claIns' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='scuderia'>Nome scuderia:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>";
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                }
                            echo"</select><br><br>
                            <input type='submit' class='bg-success text-white rounded-2 border-1 border-success' value='Inserisci'>
                        </form><br><br>
                    </div>";
                    echo"<div class='col-sm-12 col-lg-4 ps-5'>
                        <h6>Modifica pilota nella classifica</h6>";
                        if(isset($_GET["successoUp"])){
                            echo"<p class='text-success'>Modifica avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreUpCla"])){
                            echo"<p class='text-danger'>Modifiche non applicate perché pilota presente in una scuderia diversa</p>";
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo"<p class='text-danger'>Modifiche non applicate perché pilota non presente</p>";
                        }
                        echo"<form action='controlloAmm.php?indiceForm=claUp' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='punteggio'>Punteggio da aggiungere:</label><br>
                            <input type='text' name='punteggio' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='scuderia'>Nome scuderia:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>";
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                }
                            echo"</select><br><br>
                            <input type='submit' class='bg-primary text-white rounded-2 border-1 border-primary' value='Modifica'>
                        </form><br><br>
                    </div>";
                    echo"<div class='col-sm-12 col-lg-4 ps-5'>
                        <h6>Rimozione pilota nella classifica</h6>";
                        if(isset($_GET["successoRim"])){
                            echo"<p class='text-success'>Rimozione avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreRimCla"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché pilota presente in una scuderia diversa</p>";
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché pilota non presente</p>";
                        }
                        echo"
                        <form action='controlloAmm.php?indiceForm=claRim' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='scuderia'>Nome scuderia:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>";
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                }
                            echo"</select><br><br>
                            <input type='submit' class='bg-danger text-white rounded-2 border-1 border-danger' value='Rimuovi'>
                        </form><br><br>
                    </div>";
                }
                //piste
                else if($_GET["indice"]=="piste") {
                    echo"<div class='col-4'>
                    <h6>Inserisci pista</h6>";
                        if(isset($_GET["successoPiste"])){
                            echo"<p class='text-success'>Inserimento avvenuto correttamente</p>";
                        }
                        else if(isset($_GET["erroreInsPiste"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché pista già presente nella data selezionata</p>";
                        }
                        else if(isset($_GET["errorePiste"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché circuito non presente in archivio</p>"; // mettere la possibilità di inserire circuito e scuderia
                        }
                        echo"
                    <form action='controlloAmm.php?indiceForm=pisteIns' method='POST'>
                        <label for='nome_pista'>Nome pista:</label><br>
                        <input type='text' name='nome_pista' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                        <label for='data'>Data:</label><br>
                        <input type='date' name='data' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                        <input type='submit' class='bg-success text-white rounded-2 border-1 border-success' value='Inserisci'>
                    </form><br><br>
                </div>";
                echo"<div class='col-4'>
                    <h6>Modifica pista</h6>";
                        if(isset($_GET["successoUp"])){
                            echo"<p class='text-success'>Modifica avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreUpPisteDati"])){
                            echo"<p class='text-danger'>Modifiche non applicate perché dati non inseriti correttamente</p>";
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo"<p class='text-danger'>Modifiche non applicate perché gara non presente</p>";
                        }
                        echo"
                    <form action='controlloAmm.php?indiceForm=pisteUp' method='POST'>
                        <label for='nome_pista'>Nome pista:</label><br>
                        <input type='text' name='nome_pista' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                        <label for='data'>Data:</label><br>
                        <input type='date' name='data' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                        <label for='nome_vincitore'>Nome vincitore:</label><br>
                        <input type='text' name='nome_vincitore' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                        <label for='cognome_vincitore'>Cognome vincitore:</label><br>
                        <input type='text' name='cognome_vincitore' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                        <input type='submit' class='bg-primary text-white rounded-2 border-1 border-primary' value='Modifica'>
                    </form><br><br>
                </div>";
                echo"<div class='col-4'>
                    <h6>Elimina pista</h6>";
                        if(isset($_GET["successoRim"])){
                            echo"<p class='text-success'>Rimozione avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreRimPiste"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché gara presente in una data diversa</p>";
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché pilota non presente</p>";
                        }
                        echo"
                    <form action='controlloAmm.php?indiceForm=pisteRim' method='POST'>
                        <label for='nome_pista'>Nome pista:</label><br>
                        <input type='text' name='nome_pista' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                        <label for='data'>Data:</label><br>
                        <input type='date' name='data' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                        <input type='submit' class='bg-danger text-white rounded-2 border-1 border-danger' value='Rimuovi'>
                    </form><br><br>
                </div>";
                }
                else if($_GET["indice"]=="piloti"){
                    echo"<div class='col-4'>
                        <h6>Inserisci pilota</h6>";
                        if(isset($_GET["successoInsScud"])){
                            echo"<p class='text-success'>Inserimento avvenuto correttamente</p>";
                        }
                        else if(isset($_GET["erroreInsPres"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché pilota già presente nell'archivio</p>";
                        }
                        else if(isset($_GET["erroreInsScud"])){
                            echo"<p class='text-danger'>Inserimento non avvenuto perché pilota già presente nella scuderia</p>"; // mettere la possibilità di inserire circuito e scuderia
                        }
                        echo"
                        <form action='controlloAmm.php?indiceForm=pilotaIns' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                            <label for='nazionalita'>Nazionalita:</label><br>
                            <input type='text' name='nazionalita' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='scuderia'>Scuderia attuale:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>";
                                    // Azzera l'indice del risultato per riutilizzarlo
                                    $result_scuderie->data_seek(0);
                                    while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                    {
                                        echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                    }
                            echo"</select><br><br>
                            <input type='submit' class='bg-success text-white rounded-2 border-1 border-success' value='Inserisci'>
                        </form><br><br>
                    </div>";
                    echo"<div class='col-4'>
                        <h6>Modifica pilota</h6>";
                        if(isset($_GET["successoUp"])){
                            echo"<p class='text-success'>Modifica avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo"<p class='text-danger'>Modifiche non applicate perché pilota non presente in archivio</p>";
                        }
                        echo"
                        <form action='controlloAmm.php?indiceForm=pilotaUp' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='nazionalita'>Nazionalita:</label><br>
                            <input type='text' name='nazionalita' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='vittorie'>Vittorie:</label><br>
                            <input type='number' name='vittorie' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='gare'>Gare svolte:</label><br>
                            <input type='number' name='gare' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='podi'>Podi:</label><br>
                            <input type='number' name='podi' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='scuderia'>Scuderia attuale:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>
                            <option value='' selected></option>";
                                    // Azzera l'indice del risultato per riutilizzarlo
                                    $result_scuderie->data_seek(0);
                                    while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                    {
                                        echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                    }
                                echo"</select><br><br>
                            <label for='anno_inizio'>Anno di inizio:</label><br>
                            <input type='number' name='anno_inizio' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='anno_fine'>Anno di fine:</label><br>
                            <input type='number' name='anno_fine' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <input type='submit' class='bg-primary text-white rounded-2 border-1 border-primary' value='Modifica'>
                        </form><br><br>
                    </div>";
                    echo"<div class='col-4'>
                        <h6>Elimina pilota</h6>";
                        if(isset($_GET["successoRim"])){
                            echo"<p class='text-success'>Rimozione avvenuta correttamente</p>";
                        }
                        else if(isset($_GET["erroreRimScud"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché pilota non presente in nella scuderia selezionata</p>";
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo"<p class='text-danger'>Rimozione non avvenuta perché pilota non presente</p>";
                        }
                        echo"
                        <form action='controlloAmm.php?indiceForm=pilotaRim' method='POST'>
                            <label for='nome'>Nome pilota:</label><br>
                            <input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input'><br><br>
                            <label for='cognome'>Cognome pilota:</label><br>
                            <input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input' required><br><br>
                            <label for='scuderia'>Scuderia:</label><br>
                            <select name='scuderia' class='border-2 border-black rounded-2 col-9 height_input'>";
                                    // Azzera l'indice del risultato per riutilizzarlo
                                    $result_scuderie->data_seek(0);
                                    while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                    {
                                        echo"<option value='$row[scuderia_id]'>$row[nome_scuderia]</option>";
                                    }
                                echo"</select><br><br>
                            <input type='submit' class='bg-danger text-white rounded-2 border-1 border-danger' value='Rimuovi'>
                        </form><br><br>
                    </div>";
                    }
                echo"</div>";

            }
            else{
                header("Location: ../index.php");
            }
            ?>
        </div>


<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
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
<nav class="navbar navbar-expand-sm bg-black">
  <div class="container-fluid">
    <img src="../images/f1_logo_footer.svg" alt="Logo" width="100" height="50" class="d-inline-block align-text-top mx-2">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item px-2">
          <a class="nav-link active text-white" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Albo
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2020">Classifica 2020</a></li>
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2021">Classifica 2021</a></li>
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2022">Classifica 2022</a></li>
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2023">Classifica 2023</a></li>
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2024">Classifica 2024</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Piste
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2020">Piste del 2020</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2021">Piste del 2021</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2022">Piste del 2022</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2023">Piste del 2023</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2024">Piste del 2024</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Piloti
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2020">Piloti del 2020</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2021">Piloti del 2021</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2022">Piloti del 2022</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2023">Piloti del 2023</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2024">Piloti del 2024</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            2025
          </a>
          <ul class="dropdown-menu bg-black">
            <li><a class="dropdown-item dropdown-link" href="./classifiche.php?anno=2025">Classifica</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piloti.php?anno=2025">Piloti</a></li>
            <li><a class="dropdown-item dropdown-link" href="./piste.php?anno=2025">Piste</a></li>
          </ul>
        </li>
      </ul>
      <div class="navbar-nav">
        <?php
          if(isset($_SESSION["utenti"])){
            echo "<a href='./personale.php' class='nav-link active text-white' aria-label='Account'>
                  <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                    <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                    <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                  </svg>
                </a>";
          }
          else{
            echo "<a href='./accedi.php' class='nav-link active text-white' aria-label='Account'>
                  <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                    <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                    <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                  </svg>
                </a>";
          }
        ?>
      </div>
    </div>
  </div>
</nav><br>
      
    <div class="container">
        <div class="admin-header text-center">
            <h3>Bentornato nella pagina amministratore</h3>
        </div>
        <?php
        include("connessione.php");
        $nazionalità_piloti = [
            'Olandese',
            'Messicano',
            'Britannico',
            'Australiano',
            'Thailandese',
            'Neozelandese',
            'Finlandese',
            'Italiano',
            'Monegasco',
            'Spagnolo',
            'Tedesco',
            'Francese',
            'Canadese',
            'Russo',
            'Giapponese',
            'Danese',
            'Americano',
            'Brasiliano',
            'Cinese',
            'Argentino'
        ];
        $query_scuderie = "SELECT * FROM Classifiche_Costruttori cc INNER JOIN Scuderie s ON cc.scuderia_id = s.id 
                            INNER JOIN Campionati c ON cc.campionati_id = c.id WHERE c.anno = '2025'";
        $result_scuderie = mysqli_query($connessione, $query_scuderie)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

        if(isset($_GET["indice"])){
            echo '<div class="admin-tabs">';
            echo '<a href="?indice=cla" class="admin-tab '.($_GET["indice"]=="cla" ? "active" : "").'"><i class="fas fa-trophy admin-icon"></i>Classifiche</a>';
            echo '<a href="?indice=piste" class="admin-tab '.($_GET["indice"]=="piste" ? "active" : "").'"><i class="fas fa-flag-checkered admin-icon"></i>Piste</a>';
            echo '<a href="?indice=piloti" class="admin-tab '.($_GET["indice"]=="piloti" ? "active" : "").'"><i class="fas fa-user admin-icon"></i>Piloti</a>';
            echo '</div>';
            
            echo '<div class="row">';
            //classifiche
            if($_GET["indice"]=="cla"){
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-plus-circle admin-icon"></i>Inserisci pilota nella classifica</h6>';
                        if(isset($_GET["successoIns"])){
                            echo '<div class="alert-custom alert-success-custom">Inserimento avvenuto correttamente</div>';
                        }
                        else if(isset($_GET["erroreIns"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché pilota inesistente</div>';
                        }
                        else if(isset($_GET["erroreInsCla"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché pilota già presente in classifica</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=claIns" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control" required>
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="scuderia">Nome scuderia:</label>
                            <select name="scuderia" class="form-select">';
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <button type="submit" class="btn-admin-green"><i class="fas fa-check admin-icon"></i>Inserisci</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-edit admin-icon"></i>Modifica pilota nella classifica</h6>';
                        if(isset($_GET["successoUp"])){
                            echo '<div class="alert-custom alert-success-custom">Modifica avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreUpCla"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché pilota presente in una scuderia diversa</div>';
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché pilota non presente</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=claUp" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control" required>
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="punteggio">Punteggio da aggiungere:</label>
                            <input type="text" name="punteggio" class="form-control" required>
                            <label for="scuderia">Nome scuderia:</label>
                            <select name="scuderia" class="form-select">';
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <button type="submit" class="btn-admin-blue"><i class="fas fa-sync-alt admin-icon"></i>Modifica</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-trash-alt admin-icon"></i>Rimozione pilota nella classifica</h6>';
                        if(isset($_GET["successoRim"])){
                            echo '<div class="alert-custom alert-success-custom">Rimozione avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreRimCla"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché pilota presente in una scuderia diversa</div>';
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché pilota non presente</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=claRim" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control" required>
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="scuderia">Nome scuderia:</label>
                            <select name="scuderia" class="form-select">';
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <button type="submit" class="btn-admin-red"><i class="fas fa-times admin-icon"></i>Rimuovi</button>
                        </form>
                    </div>
                </div>';
            }
            //piste
            else if($_GET["indice"]=="piste") {
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-plus-circle admin-icon"></i>Inserisci pista</h6>';
                        if(isset($_GET["successoPiste"])){
                            echo '<div class="alert-custom alert-success-custom">Inserimento avvenuto correttamente</div>';
                        }
                        else if(isset($_GET["erroreInsPiste"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché pista già presente nella data selezionata</div>';
                        }
                        else if(isset($_GET["errorePiste"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché circuito non presente in archivio</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pisteIns" method="POST" class="admin-form">
                            <label for="nome_pista">Nome pista:</label>
                            <input type="text" name="nome_pista" class="form-control" required>
                            <label for="data">Data:</label>
                            <input type="date" name="data" class="form-control" required>
                            <button type="submit" class="btn-admin-green"><i class="fas fa-check admin-icon"></i>Inserisci</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-edit admin-icon"></i>Modifica pista</h6>';
                        if(isset($_GET["successoUp"])){
                            echo '<div class="alert-custom alert-success-custom">Modifica avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreUpPisteDati"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché dati non inseriti correttamente</div>';
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché gara non presente</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pisteUp" method="POST" class="admin-form">
                            <label for="nome_pista">Nome pista:</label>
                            <input type="text" name="nome_pista" class="form-control" required>
                            <label for="data">Data:</label>
                            <input type="date" name="data" class="form-control" required>
                            <label for="nome_vincitore">Nome vincitore:</label>
                            <input type="text" name="nome_vincitore" class="form-control">
                            <label for="cognome_vincitore">Cognome vincitore:</label>
                            <input type="text" name="cognome_vincitore" class="form-control">
                            <button type="submit" class="btn-admin-blue"><i class="fas fa-sync-alt admin-icon"></i>Modifica</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-trash-alt admin-icon"></i>Elimina pista</h6>';
                        if(isset($_GET["successoRim"])){
                            echo '<div class="alert-custom alert-success-custom">Rimozione avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreRimPiste"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché gara presente in una data diversa</div>';
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché pilota non presente</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pisteRim" method="POST" class="admin-form">
                            <label for="nome_pista">Nome pista:</label>
                            <input type="text" name="nome_pista" class="form-control" required>
                            <label for="data">Data:</label>
                            <input type="date" name="data" class="form-control" required>
                            <button type="submit" class="btn-admin-red"><i class="fas fa-times admin-icon"></i>Rimuovi</button>
                        </form>
                    </div>
                </div>';
            }
            else if($_GET["indice"]=="piloti"){
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-plus-circle admin-icon"></i>Inserisci pilota</h6>';
                        if(isset($_GET["successoInsScud"])){
                            echo '<div class="alert-custom alert-success-custom">Inserimento avvenuto correttamente</div>';
                        }
                        else if(isset($_GET["erroreInsPres"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché pilota già presente nell\'archivio</div>';
                        }
                        else if(isset($_GET["erroreInsScud"])){
                            echo '<div class="alert-custom alert-danger-custom">Inserimento non avvenuto perché pilota già presente nella scuderia</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pilotaIns" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control" required>
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="nazionalita">Nazionalita:</label>
                            <input type="text" name="nazionalita" class="form-control">
                            <label for="scuderia">Scuderia attuale:</label>
                            <select name="scuderia" class="form-select">';
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <button type="submit" class="btn-admin-green"><i class="fas fa-check admin-icon"></i>Inserisci</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-edit admin-icon"></i>Modifica pilota</h6>';
                        if(isset($_GET["successoUp"])){
                            echo '<div class="alert-custom alert-success-custom">Modifica avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreUp"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché pilota non presente in archivio</div>';
                        }
                        else if(isset($_GET["erroreUpDati"])){
                            echo '<div class="alert-custom alert-danger-custom">Modifiche non applicate perché numero vittorie superiore ai podi o alle gare</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pilotaUp" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control" required>
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="nazionalita">Nazionalita:</label>
                            <select name="nazionalita" class="form-control">
                                <option></option>';
                            
                            for ($i=0; $i<count($nazionalità_piloti); $i++)
                            {
                                
                                echo '<option value="'.$nazionalità_piloti[$i].'">'.$nazionalità_piloti[$i].'</option>';
                            }
                            echo'</select>
                            <label for="vittorie">Vittorie:</label>
                            <input type="number" name="vittorie" class="form-control">
                            <label for="gare">Gare svolte:</label>
                            <input type="number" name="gare" class="form-control">
                            <label for="podi">Podi:</label>
                            <input type="number" name="podi" class="form-control">
                            <label for="scuderia">Scuderia attuale:</label>
                            <select name="scuderia" class="form-select">
                                <option value="" selected></option>';
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <label for="anno_inizio">Anno di inizio:</label>
                            <input type="number" name="anno_inizio" class="form-control">
                            <label for="anno_fine">Anno di fine:</label>
                            <input type="number" name="anno_fine" class="form-control">
                            <button type="submit" class="btn-admin-blue"><i class="fas fa-sync-alt admin-icon"></i>Modifica</button>
                        </form>
                    </div>
                </div>';
                
                echo '<div class="col-sm-12 col-lg-4 mb-4">
                    <div class="admin-card">
                        <h6><i class="fas fa-trash-alt admin-icon"></i>Elimina pilota</h6>';
                        if(isset($_GET["successoRim"])){
                            echo '<div class="alert-custom alert-success-custom">Rimozione avvenuta correttamente</div>';
                        }
                        else if(isset($_GET["erroreRimScud"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché pilota non presente in nella scuderia selezionata</div>';
                        }
                        else if(isset($_GET["erroreRim"])){
                            echo '<div class="alert-custom alert-danger-custom">Rimozione non avvenuta perché pilota non presente</div>';
                        }
                        echo '<form action="controlloAmm.php?indiceForm=pilotaRim" method="POST" class="admin-form">
                            <label for="nome">Nome pilota:</label>
                            <input type="text" name="nome" class="form-control">
                            <label for="cognome">Cognome pilota:</label>
                            <input type="text" name="cognome" class="form-control" required>
                            <label for="scuderia">Scuderia:</label>
                            <select name="scuderia" class="form-select">';
                                // Azzera l'indice del risultato per riutilizzarlo
                                $result_scuderie->data_seek(0);
                                while ($row = mysqli_fetch_array($result_scuderie, MYSQLI_ASSOC))
                                {
                                    echo '<option value="'.$row['scuderia_id'].'">'.$row['nome_scuderia'].'</option>';
                                }
                            echo '</select>
                            <button type="submit" class="btn-admin-red"><i class="fas fa-times admin-icon"></i>Rimuovi</button>
                        </form>
                    </div>
                </div>';
            }
            echo '</div>';
        }
        else{
            header("Location: ../index.php");
        }
        ?>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<script src="../script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
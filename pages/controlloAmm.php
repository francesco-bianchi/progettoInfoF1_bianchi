<?php
    include("connessione.php");

    if(isset($_GET["indiceForm"])){


        //inserimento classifica
        if($_GET["indiceForm"] == "claIns"){ //da fare dopo l'inserimwnto di un piolta
            //query per ottenere l'id del pilota selezionato
            $query_pilota = "SELECT p.id FROM Piloti p WHERE p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]'";
            $result_pilota = mysqli_query($connessione, $query_pilota)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
    
            //query per controllare se presente in classifica
            $query_claIns = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                                            INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id
                                            WHERE c.anno = '2025' AND p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]' AND s.id = $_POST[scuderia]";
            
            $result_claIns = mysqli_query($connessione, $query_claIns)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
            
            if(mysqli_num_rows($result_pilota) > 0){
                
                while ($row = mysqli_fetch_array($result_pilota)) {
                    $id = $row;
                }
                
                if(mysqli_num_rows($result_claIns) > 0){
                    header("Location: ./paginaAmministratore.php?indice=cla&erroreInsCla=true");
                }
                else{
                    $query = "INSERT INTO Classifiche_piloti (campionati_id, pilota_id, punteggio_totale, scuderia_id) 
                                        VALUES(6, $id[0], 0, $_POST[scuderia])";
                    $result = mysqli_query($connessione, $query)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                    header("Location: ./paginaAmministratore.php?indice=cla&successoIns=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=cla&erroreIns=true");
            }
        }
        //modifica classifica
        if($_GET["indiceForm"] == "claUp"){
            $query_pilota = "SELECT p.id FROM Piloti p WHERE p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]'";
            $result_pilota = mysqli_query($connessione, $query_pilota)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
    
            //query per controllare se presente in classifica
            $query_claIns = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                                            INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id
                                            WHERE c.anno = '2025' AND p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]' AND s.id = $_POST[scuderia]";
            
            $result_claIns = mysqli_query($connessione, $query_claIns)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
            
            if(mysqli_num_rows($result_pilota) > 0){
                
                while ($row = mysqli_fetch_array($result_pilota)) {
                    $id = $row;
                }
                
                if(mysqli_num_rows($result_claIns) > 0){
                    if($_POST["punteggio"]==null){
                        $punteggio = 0;
                    }
                    else{
                        $punteggio = $_POST["punteggio"];
                    }

                    $query = " UPDATE Classifiche_piloti
                    SET punteggio_totale = punteggio_totale + $punteggio
                    WHERE pilota_id = $id[0]";

                    $result = mysqli_query($connessione, $query)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                    header("Location: ./paginaAmministratore.php?indice=cla&successoIns=true");
                }
                else{
                    header("Location: ./paginaAmministratore.php?indice=cla&erroreInsCla=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=cla&erroreIns=true");
            }
        }
        //rimozione classifica
        if($_GET["indiceForm"] == "claRim"){
            $query_pilota = "SELECT p.id FROM Piloti p WHERE p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]'";
            $result_pilota = mysqli_query($connessione, $query_pilota)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
    
            //query per controllare se presente in classifica
            $query_claIns = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                                            INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id
                                            WHERE c.anno = '2025' AND p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]' AND s.id = $_POST[scuderia]";
            
            $result_claIns = mysqli_query($connessione, $query_claIns)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
            
            if(mysqli_num_rows($result_pilota) > 0){
                
                while ($row = mysqli_fetch_array($result_pilota)) {
                    $id = $row;
                }
                
                if(mysqli_num_rows($result_claIns) > 0){

                    $query = " DELETE FROM Classifiche_piloti
                    WHERE pilota_id = $id[0]";

                    $result = mysqli_query($connessione, $query)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                    header("Location: ./paginaAmministratore.php?indice=cla&successoIns=true");
                }
                else{
                    header("Location: ./paginaAmministratore.php?indice=cla&erroreInsCla=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=cla&erroreIns=true");
            }
        }

        //inserimento pista
        if($_GET["indiceForm"] == "pisteIns"){ //da fare dopo l'inserimwnto di un piolta
            
        //query per ottenere l'id della pista selezionata
        $query_pista = "SELECT c.id FROM Circuiti c WHERE c.nome_circuito = '$_POST[nome_pista]'";
        $result_pista = mysqli_query($connessione, $query_pista)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
        
        //query per controllare se presente in gare con la stessa data
        $query_gare = "SELECT * FROM Gare g INNER JOIN Circuiti c ON g.circuito_id = c.id
                                        INNER JOIN Campionati ca ON g.campionato_id = ca.id
                                        WHERE ca.anno = '2025' AND g.data = $_POST[data]";
        $result_gare = mysqli_query($connessione, $query_gare)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
            
            if(mysqli_num_rows($result_pista) > 0){
                
                while ($row = mysqli_fetch_array($result_pista)) {
                    $id_pista = $row;
                }
                
                if(mysqli_num_rows($result_gare) > 0){
                    header("Location: ./paginaAmministratore.php?indice=piste&erroreInsPiste=true");
                }
                else{
                    $query = "INSERT INTO Gare (campionato_id, circuito_id, data, vincitore_id) 
                                        VALUES(6, $id_pista[0], '$_POST[data]', NULL)";
                    $result = mysqli_query($connessione, $query)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                    header("Location: ./paginaAmministratore.php?indice=piste&successoPiste=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=piste&errorePiste=true");
            }
        }
        //modifica pista
        if($_GET["indiceForm"] == "pisteUp"){
            $query_pista = "SELECT c.id FROM Circuiti c WHERE c.nome_circuito = '$_POST[nome_pista]'";
            $result_pista = mysqli_query($connessione, $query_pista)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

            if(mysqli_num_rows($result_pista) > 0){
                
                while ($row = mysqli_fetch_array($result_pista)) {
                    $id = $row;
                }
                
                //query per controllare se presente in gare
                $query_gare = "SELECT g.id FROM Gare g INNER JOIN Circuiti c ON g.circuito_id = c.id
                INNER JOIN Campionati ca ON g.campionato_id = ca.id
                WHERE ca.anno = '2025' AND g.circuito_id = $id[0]";
                $result_gare = mysqli_query($connessione, $query_gare)
                    or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                
                if(mysqli_num_rows($result_gare) > 0){
                    
                    $query_pilota = "SELECT p.id FROM Piloti p WHERE p.nome = '$_POST[nome_vincitore]' AND p.cognome='$_POST[cognome_vincitore]'";
                    $result_pilota = mysqli_query($connessione, $query_pilota)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                     
                    while ($row = mysqli_fetch_array($result_gare)) {
                        $gara_id = $row;
                    }

                    if(mysqli_num_rows($result_pilota) > 0 || $_POST["data"]!=NULL){
                        $query_gareUp = " UPDATE Gare SET ";
                        if(mysqli_num_rows($result_pilota) > 0){
                            while ($row = mysqli_fetch_array($result_pilota)) {
                                $id_vincitore = $row;
                            }
                            $query_gareUp = $query_gareUp . "vincitore_id = $id_vincitore[0]";
                        }
                        if(mysqli_num_rows($result_pilota) > 0 && $_POST["data"]!=NULL){
                            $query_gareUp = $query_gareUp . ", ";
                        }
                        if($_POST["data"]!=NULL){
                            $query_gareUp = $query_gareUp . "data = '$_POST[data]'";
                        }
                        $query_gareUp = $query_gareUp . " WHERE id = $gara_id[0]";

                        $result_gareUp = mysqli_query($connessione, $query_gareUp)
                            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                        header("Location: ./paginaAmministratore.php?indice=piste&successoUp=true");
                    }
                    else{
                        header("Location: ./paginaAmministratore.php?indice=piste&erroreUpPisteDati=true");
                    }
                }
                else{
                    header("Location: ./paginaAmministratore.php?indice=piste&erroreUpPiste=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=piste&erroreUp=true");
            }
        }
        //rimozione pista
        if($_GET["indiceForm"] == "pisteRim"){
            $query_pista = "SELECT c.id FROM Circuiti c INNER JOIN Gare g ON g.circuito_id = c.id WHERE c.nome_circuito = '$_POST[nome_pista]' AND g.data = '$_POST[data]'";
            $result_pista = mysqli_query($connessione, $query_pista)
                or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

            if(mysqli_num_rows($result_pista) > 0){
                
                while ($row = mysqli_fetch_array($result_pista)) {
                    $id_circuito = $row;
                }
                
                //query per controllare se presente in gare con la stessa data
                $query_gare = "SELECT g.id FROM Gare g INNER JOIN Circuiti c ON g.circuito_id = c.id
                                INNER JOIN Campionati ca ON g.campionato_id = ca.id
                                WHERE ca.anno = '2025' AND g.circuito_id = $id_circuito[0] AND g.data = '$_POST[data]'";
                $result_gare = mysqli_query($connessione, $query_gare)
                    or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                
                if(mysqli_num_rows($result_gare) > 0){
                    while ($row = mysqli_fetch_array($result_gare)) {
                        $id_gara = $row;
                    }

                    $query = " DELETE FROM Gare
                    WHERE id = $id_gara[0] AND data = '$_POST[data]'";

                    $result = mysqli_query($connessione, $query)
                        or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));
                    
                    header("Location: ./paginaAmministratore.php?indice=piste&successoRim=true");
                }
                else{
                    header("Location: ./paginaAmministratore.php?indice=piste&erroreRimPiste=true");
                }
            }
            else{
                
                header("Location: ./paginaAmministratore.php?indice=piste&erroreRim=true");
            }
        }
    }
    else{
        header("Location: ../index.php");
    }

?>
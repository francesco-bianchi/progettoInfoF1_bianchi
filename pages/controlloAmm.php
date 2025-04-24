<?php
    include("connessione.php");

    if(isset($_GET["indiceForm"])){

        $query_pilota = "SELECT p.id FROM Piloti p WHERE p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]'";
        $result_pilota = mysqli_query($connessione, $query_pilota)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

        $query_claIns = "SELECT * FROM Classifiche_Piloti cp INNER JOIN Piloti p ON cp.pilota_id = p.id 
                                        INNER JOIN Scuderie s ON cp.scuderia_id = s.id INNER JOIN Campionati c ON cp.campionati_id = c.id
                                        WHERE c.anno = '2025' AND p.nome = '$_POST[nome]' AND p.cognome='$_POST[cognome]' AND s.id = $_POST[scuderia]";
        $result_claIns = mysqli_query($connessione, $query_claIns)
            or die ("<br>Errore di chiusura" . mysqli_error($connessione) . " ". mysqli_errno($connessione));

        if($_GET["indiceForm"] == "claIns"){ //da fare dopo l'inserimwnto di un piolta
            
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
        if($_GET["indiceForm"] == "claUp"){
            if(mysqli_num_rows($result_pilota) > 0){
                
                while ($row = mysqli_fetch_array($result_pilota)) {
                    $id = $row;
                }
                
                if(mysqli_num_rows($result_claIns) > 0){

                    $query = " UPDATE Classifiche_piloti
                    SET punteggio_totale = punteggio_totale + $_POST[punteggio], scuderia_id = $_POST[scuderia]
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
    }
    else{
        header("Location: ../index.php");
    }

?>
<html>
    <head>
    <title>Registrazione</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
    <?php
    session_start();
        include("connessione.php");
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM utenti u INNER JOIN passwordUtenti p ON u.Email = p.Email WHERE u.Email = '$email' and p.password = '$password'";

        $result = mysqli_query($connessione_utenti, $query)
        or die ("<br>Errore di chiusura" . mysqli_error($connessione_utenti) . " ". mysqli_errno($connessione_utenti));

        if(mysqli_num_rows($result) > 0){
            $_SESSION["utenti"] = [
                "email" => $_POST['email'], "password" => $_POST['password']
            ];
            header("Location: ../index.php");
        }else{
            header("Location: accedi.php?negato=true");
        }
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
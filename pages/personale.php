<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body class="bg-body-accesso">
	<nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
            <img src="../images/f1_logo_footer.svg" alt="Logo" width="100" height="90" class="d-inline-block align-text-top">
        </div>
		<div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="../index.php" class="nav-link active visited text-white" aria-label="Account">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-houses" viewBox="0 0 16 16">
						<path d="M5.793 1a1 1 0 0 1 1.414 0l.647.646a.5.5 0 1 1-.708.708L6.5 1.707 2 6.207V12.5a.5.5 0 0 0 .5.5.5.5 0 0 1 0 1A1.5 1.5 0 0 1 1 12.5V7.207l-.146.147a.5.5 0 0 1-.708-.708zm3 1a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708zm.707.707L5 7.207V13.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V7.207z"/>
					</svg>
                    </a>
                  </li>
            </ul>
          </div>
    </nav><br>

	
    <?php
        session_start();
        include("connessione.php");
        
        $email = $_SESSION['utenti']['email'];
        $password = $_SESSION['utenti']['password'];

        $query = "SELECT u.* FROM utenti u INNER JOIN passwordUtenti p ON u.Email = p.Email WHERE p.Email = '$email' AND p.Password = '$password'";

        $result = mysqli_query($connessione_utenti, $query)
        or die ("<br>Errore di chiusura" . mysqli_error($connessione_utenti) . " ". mysqli_errno($connessione_utenti));

        echo"<div class='row'>
		        <span class='col-3'></span>
		        <div class='container col-9 text-start'>
		            <h4 class='border_accesso col-9'>Fai parte del team di Formula1</h4><br>";

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) //solo associativo
        {
            echo"<label for='nome'>Nome:</label><br>";
            echo "<input type='text' name='nome' class='border-2 border-black rounded-2 col-9 height_input bg-white' value='$row[Nome]' disabled><br><br>";
            echo"<label for='cognome'>Cognome:</label><br>";
            echo "<input type='text' name='cognome' class='border-2 border-black rounded-2 col-9 height_input bg-white' value='$row[Cognome]' disabled><br><br>";
            echo"<label for='sesso'>Sesso:</label><br>";
            echo "<input type='text' name='sesso' class='border-2 border-black rounded-2 col-9 height_input bg-white' value='$row[Sesso]' disabled><br><br>";
            echo"<label for='nazione'>Nazione:</label><br>";
            echo "<input type='text' name='nazione' class='border-2 border-black rounded-2 col-9 height_input bg-white' value='$row[Nazione]' disabled><br><br>";
            echo"<label for='email'>Email:</label><br>";
            echo "<input type='email' name='email' class='border-2 border-black rounded-2 col-9 height_input bg-white' value='$row[Email]' disabled><br><br>";
        }

        echo "<form action='logout.php' method='POST'>
                <input type='submit' class='bg-danger text-white rounded-2 border-1 border-danger' value='Logout'>
              </form><br><br>";

        echo "<span>Torna alla <a href='../index.php' class='link-opacity-50-hover link-underline-danger link-offset-2 visited text-black'>home</a></span>
        </div>
        </div><br><br>";
    ?>
<br><br>

    

    

<!-- footer -->
<footer class="racing-footer">
  <div class="racing-stripe"></div>
  
  <div class="footer-content">
    <div class="footer-section footer-brand">
      <img src="../images/f1_logo_footer.svg" alt="F1 Logo" class="footer-logo">
      <p class="copyright">© 2003–2025 Formula One World Championship Ltd.</p>
    </div>

    <div class="footer-section footer-links">
      <h4>Esplora</h4>
      <ul>
        <li><a href="#">Calendario Gare</a></li>
        <li><a href="#">Piloti</a></li>
        <li><a href="#">Team</a></li>
        <li><a href="#">Classifiche</a></li>
      </ul>
    </div>

    <div class="footer-section footer-support">
      <h4>Supporto</h4>
      <ul>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Termini d'Uso</a></li>
        <li><a href="#">Cookies Policy</a></li>
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>

    <div class="footer-section footer-social">
      <h4>Connettiti</h4>
      <div class="social-icons">
        <a href="#" aria-label="Instagram" class="social-icon instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
            </svg>
        </a>
        <a href="#" aria-label="Twitter" class="social-icon twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
            </svg>
        </a>
        <a href="#" aria-label="YouTube" class="social-icon youtube">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
            </svg>
        </a>
        <a href="#" aria-label="Facebook" class="social-icon facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
        </a>
      </div>
      <div class="newsletter">
        <h5>Newsletter</h5>
        <form class="newsletter-form">
          <input type="email" placeholder="La tua email" required>
          <button type="submit" aria-label="Subscribe">
            <i class="bi bi-arrow-right"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="footer-bottom-content">
      <p>Realizzato a scopo didattico per gli amanti della F1</p>
      <a href="#" class="back-to-top">
        Torna su <i class="bi bi-chevron-up"></i>
      </a>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
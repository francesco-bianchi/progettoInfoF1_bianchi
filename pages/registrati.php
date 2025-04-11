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
		if(isset($_GET["negato"])){
			$message = "Aaccount già presente";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>
	<div class="row">
		<span class="col-3"></span>
		<div class="container col-9 text-start">
		<h4 class="border_accesso col-9">Entra a far parte del team di Formula1</h4>
		<form action="controlloRegistrazione.php" method="POST">
            <label for="nome">Nome:</label><br>
			<input type="text" name="nome" class="border-2 border-black rounded-2 col-9 height_input" placeholder="Inserisci nome"><br><br>
			<label for="cognome">Cognome:</label><br>
			<input type="text" name="cognome" class="border-2 border-black rounded-2 col-9 height_input" placeholder="Inserisci cognome"><br><br>
            <label for="nazione">Nazione:</label><br>
			<input type="text" name="nazione" class="border-2 border-black rounded-2 col-9 height_input" placeholder="Inserisci la tua nazionalità"><br><br>
			<label for="sesso">Sesso:</label><br>
            <select name="sesso" class="border-2 border-black rounded-2 col-9 height_input">
                <option value="uomo">Uomo</option>
                <option value="donna">Donna</option>
                <option value="altro">Altro</option>
            </select><br><br>
			<label for="email">Email:</label><br>
			<input type="email" name="email" class="border-2 border-black rounded-2 col-9 height_input" placeholder="Inserisci email"><br><br>
			<label for="password">Password:</label><br>
			<input type="password" name="password" class="border-2 border-black rounded-2 col-9 height_input" placeholder="Inserisci password"><br><br>
			<input type="submit" class="bg-danger text-white rounded-2 border-1 border-danger" value="Registrati">
		</form><br><br>
		<span>Hai già effettuato l'accesso? <a href="./accedi.php" class="link-opacity-50-hover link-underline-danger link-offset-2 visited text-black">Accedi</a></span>
	</div>
	</div><br><br>

	  <!-- footer -->
      <footer>
	    <div class="footerWrapper sticky-bottom h-25">
	        <div class="row footerNav">
	            <div class="logo col-4 text-start">
	                    <img src="../images/f1_logo_footer.svg" alt="Formula1" class="w-50 h-50">
	            </div>
	            <div class="col-8 text-center">
	                <ul class="row">
	                    <li class="col-4">Privacy Policy</li>
	                    <li class="col-4">Subscription</li>
	                    <li class="col-4">Terms Of Use</li>
	                </ul><br>
	                <ul class="row">
	                    <li class="col-4">FAQs</li>
	                    <li class="col-4">Cookies Policy</li>
	                    <li class="col-4">Preferences</li>
	                </ul>
				</div>
	        </div>
	        <div class="row">
	            <span class="col-12 text-center">©2003-2025 Formula One World Championship Limited</span>
	        </div>
	    </div>
	</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
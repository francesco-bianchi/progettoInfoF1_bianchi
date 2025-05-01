<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="bg-body-pagine">
    <?php session_start(); include("connessione2.php");?>
    <!-- navbar -->
    <nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
            <img src="./images/f1_logo_footer.svg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link active visited text-white" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item dropdown px-md-2 px-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Albo
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2020">Classifica 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2021">Classifica 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2022">Classifica 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2023">Classifica 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2024">Classifica 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-md-2 px-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piste
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2020">Piste del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2021">Piste del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2022">Piste del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2023">Piste del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2024">Piste del 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-md-2 px-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piloti
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2020">Piloti del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2021">Piloti del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2022">Piloti del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2023">Piloti del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2024">Piloti del 2024</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-md-2 px-1">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    2025
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2025">Classifica</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2025">Piloti</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2025">Piste</a></li>
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

      <!--notizie-->
    
      <?php
    $query = "SELECT * FROM Card";
    $result = mysqli_query($connessione2, $query)
        or die("<br>Errore nella query: " . mysqli_error($connessione2) . " " . mysqli_errno($connessione2));

    $resultset = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $resultset[] = $row;
    }

    // Array immagini statiche (una per ogni notizia, ordine importante)
    $immagini = [
        './images/tsunoda.jpeg',
        './images/piastri_barhain.jpg',
        './images/vittoria_max.jpeg',
        './images/piastri_vince_cina.avif',
        './images/norris_vince.avif',
        './images/hamilton_bar.avif',
        './images/yuky_giappone.avif',
        './images/Antonelli.avif',
        './images/norris_giorno.avif'
    ];
    ?>

    <h2 class="text-danger fw-bold ms-4">Ultime notizie</h2>
    <div class="container-fluid text-center m-auto">
        <div class="row">
            <!-- Prima notizia grande -->
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                    <?php if (isset($resultset[0])): ?>
                        <img src="<?= $immagini[0] ?>" class="border rounded-1 w-100">
                        <div class="card-body h-50">
                            <p class="card-text">
                                <span class="fw-bold"><?= $resultset[0]['Titolo'] ?></span><br>
                                <?= $resultset[0]['Descrizione'] ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Due notizie medie a destra -->
            <div class="col-12 col-md-12 col-lg-6">
                <div class="row">
                    <?php for ($i = 1; $i <= 2; $i++): ?>
                        <?php if (isset($resultset[$i])): ?>
                            <div class="col-sm-6 mb-3">
                                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                                    <img src="<?= $immagini[$i] ?>" class="w-100 border rounded-1">
                                    <div class="card-body h-50">
                                        <p class="card-text">
                                            <span class="fw-bold"><?= $resultset[$i]['Titolo'] ?></span><br>
                                            <?= $resultset[$i]['Descrizione'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>

                <div class="row">
                    <?php for ($i = 3; $i <= 4; $i++): ?>
                        <?php if (isset($resultset[$i])): ?>
                            <div class="col-sm-6 mb-3">
                                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                                    <img src="<?= $immagini[$i] ?>" class="w-100 border rounded-1">
                                    <div class="card-body h-50">
                                        <p class="card-text">
                                            <span class="fw-bold"><?= $resultset[$i]['Titolo'] ?></span><br>
                                            <?= $resultset[$i]['Descrizione'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Seconda riga completa, 4 card piccole -->
            <div class="container">
                <div class="row">
                    <?php for ($i = 5; $i <= 8; $i++): ?>
                        <?php if (isset($resultset[$i])): ?>
                            <div class="col-sm-6 col-lg-3 mb-3">
                                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                                    <img src="<?= $immagini[$i] ?>" class="w-100 border rounded-1">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <span class="fw-bold"><?= $resultset[$i]['Titolo'] ?></span><br>
                                            <?= $resultset[$i]['Descrizione'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="racing-footer">
  <div class="racing-stripe"></div>
  
  <div class="footer-content">
    <div class="footer-section footer-brand">
      <img src="./images/f1_logo_footer.svg" alt="F1 Logo" class="footer-logo">
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
          <i class="bi bi-instagram"></i>
        </a>
        <a href="#" aria-label="Twitter" class="social-icon twitter">
          <i class="bi bi-twitter-x"></i>
        </a>
        <a href="#" aria-label="YouTube" class="social-icon youtube">
          <i class="bi bi-youtube"></i>
        </a>
        <a href="#" aria-label="Facebook" class="social-icon facebook">
          <i class="bi bi-facebook"></i>
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
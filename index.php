<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body class="bg-body-pagine">
    <?php session_start(); include("connessione2.php");?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm bg-black">
        <div class="container-fluid">
            <img src="./images/f1_logo_footer.svg" alt="Logo" width="100" height="50"
                class="d-inline-block align-text-top mx-2">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-white" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Albo
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2020">Classifica 2020</a></li>
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2021">Classifica 2021</a></li>
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2022">Classifica 2022</a></li>
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2023">Classifica 2023</a></li>
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2024">Classifica 2024</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Piste
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2020">Piste del
                                    2020</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2021">Piste del
                                    2021</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2022">Piste del
                                    2022</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2023">Piste del
                                    2023</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2024">Piste del
                                    2024</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Piloti
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2020">Piloti del
                                    2020</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2021">Piloti del
                                    2021</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2022">Piloti del
                                    2022</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2023">Piloti del
                                    2023</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2024">Piloti del
                                    2024</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown px-2">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            2025
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item dropdown-link"
                                    href="./pages/classifiche.php?anno=2025">Classifica</a></li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piloti.php?anno=2025">Piloti</a>
                            </li>
                            <li><a class="dropdown-item dropdown-link" href="./pages/piste.php?anno=2025">Piste</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-nav">
                    <?php
          if(isset($_SESSION["utenti"])){
            echo "<a href='./pages/personale.php' class='nav-link active text-white' aria-label='Account'>
                  <svg role='presentation' stroke-width='2' focusable='false' width='25' height='25' class='icon icon-account' viewBox='0 0 22 22'>
                    <circle cx='11' cy='7' r='4' fill='none' stroke='currentColor'></circle>
                    <path d='M3.5 19c1.421-2.974 4.247-5 7.5-5s6.079 2.026 7.5 5' fill='none' stroke='currentColor' stroke-linecap='round'></path>
                  </svg>
                </a>";
          }
          else{
            echo "<a href='./pages/accedi.php' class='nav-link active text-white' aria-label='Account'>
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


    <div class="container mb-3 ">
        <div class="row">
            <div class="col-12
             mx-auto">
                <iframe class="w-100 height_video" src="https://www.youtube.com/embed/HzZEWyjO_D8"
                    title="Nuova F1 intro per il 2025 🎥🏎️" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <!--notizie-->

    <?php

      
    $query_grande = "SELECT * FROM Card WHERE id = 1";
    $result_grande = mysqli_query($connessione2, $query_grande)
        or die("<br>Errore nella query: " . mysqli_error($connessione2) . " " . mysqli_errno($connessione2));
    
    $ris_grande = [];
    while ($row = mysqli_fetch_array($result_grande, MYSQLI_ASSOC)) {
        $ris_grande[] = $row;
    }

    $query = "SELECT * FROM Card ORDER BY id DESC";
    $result = mysqli_query($connessione2, $query)
        or die("<br>Errore nella query: " . mysqli_error($connessione2) . " " . mysqli_errno($connessione2));

    $resultset = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $resultset[] = $row;
    }
    ?>

    <h2 class="text-danger fw-bold ms-4">Ultime notizie</h2>
    <div class="container-fluid text-center m-auto">
        <div class="row">
            <!-- Prima notizia grande -->
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                 <?php for ($i = 0; $i <= count($resultset)-1; $i++): ?>
                    <?php if ($resultset[$i]['id']==1): ?>
                    <img src="<?= $resultset[$i]['Immagine_news'] ?>" class="border rounded-1 w-100">
                    <div class="card-body h-50">
                        <p class="card-text">
                            <span class="fw-bold"><?= $resultset[$i]['Titolo'] ?></span><br>
                            <?= $resultset[$i]['Descrizione'] ?>
                        </p>
                    </div>
                    <?php endif; ?>
                 <?php endfor; ?>
                </div>
            </div>

            <!-- Due notizie medie a destra -->
            <div class="col-12 col-md-12 col-lg-6">
                <div class="row">
                    <?php for ($i = 0; $i <= 3; $i++): ?>
                    <?php if (isset($resultset[$i])): ?>
                    <div class="col-sm-6 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                            <img src="<?= $resultset[$i]['Immagine_news'] ?>" class="w-100 border rounded-1">
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
                    <?php for ($i = 4; $i <= 7; $i++): ?>
                    <?php if (isset($resultset[$i])): ?>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                            <img src="<?= $resultset[$i]['Immagine_news'] ?>" class="w-100 border rounded-1">
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

            
            <div>
                <button id="clickExtra" class="btn btn-danger text-white rounded px-3 py-2 border border-danger">Mostra
                    altro <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1" />
                    </svg></button>
            </div>

            <?php
              $lunghezza_ris = count($resultset) -2;
            ?>
            <div id="extraContainer" class="container d-none">
                <div class="row">
                    <?php for ($i = 8; $i <= $lunghezza_ris; $i++): ?>
                    <?php if (isset($resultset[$i])): ?>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 w-100 h-100">
                            <img src="<?= $resultset[$i]['Immagine_news'] ?>" class="w-100 border rounded-1">
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="social-icon twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="YouTube" class="social-icon youtube">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-youtube" viewBox="0 0 16 16">
                            <path
                                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook" class="social-icon facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
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





    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
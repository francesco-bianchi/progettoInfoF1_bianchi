<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="bg-body-pagine">
    <?php session_start(); ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand bg-black">
        <div class="container-fluid">
            <img src="./images/f1_logo_footer.svg" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item px-2">
                    <a class="nav-link active visited text-white" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Classifiche
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2020">Classifica 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2021">Classifica 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2022">Classifica 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2023">Classifica 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2024">Classifica 2024</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/classifiche.php?anno=2024">Classifica 2025</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piste
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2020">Piste del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2021">Piste del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2022">Piste del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2023">Piste del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2024">Piste del 2024</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=2025"> Piste del 2025</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piste.php?anno=all">Visualizza tutte</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Piloti
                    </a>
                    <ul class="dropdown-menu bg-black">
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2020">Piloti del 2020</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2021">Piloti del 2021</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2022">Piloti del 2022</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2023">Piloti del 2023</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2024">Piloti del 2024</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=2025"> Piloti del 2025</a></li>
                        <li><a class="dropdown-item visited dropdown-link" href="./pages/piloti.php?anno=all">Visualizza tutti</a></li>
                    </ul>
                </li>
            </ul>
          </div>
          <div>
            <ul class="navbar-nav">
                <li class="nav-item">
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
        <h2 class="text-danger fw-bold ms-4">Ultime notizie</h2>
      <div class="container-fluid text-center m-auto">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-3">
                <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                    <img src="./images/tsunoda.jpeg" class="border rounded-1">
                    <div class="card-body">
                      <p class="card-text"><span class="fw-bold">Tsunoda in Red Bull è ufficiale!</span><br>La Red Bull ha deciso di agire rapidamente dopo il difficile inizio di stagione 2025 di Liam Lawson, declassandolo alla Racing Bulls e promuovendo Yuki Tsunoda al team senior insieme al campione del mondo in carica Max Verstappen. <br>
                        È un compito che ora attende Yuki Tsunoda, con il 24enne pronto a correre al fianco di Verstappen alla Red Bull a partire dal Gran Premio di casa del Giappone! Come se la caverà rispetto a coloro che hanno assunto quel ruolo prima di lui?</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                            <img src="./images/piastri_vince_cina.avif" class="w-100 border rounded-1" >
                            <div class="card-body">
                              <p class="card-text"><span class="fw-bold">Oscar Piastri vince il GP della Cina!</span><br>Un super Piastri riesce a imporsi anche sul compagno di squadra e vince il suo terzo GP <br> Grande inizio per la McLaren che si riconferma la prima forza del campionato con un bellissimo 1-2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                            <img src="./images/Antonelli.avif" class="w-100 border rounded-1" >
                            <div class="card-body">
                              <p class="card-text"><span class="fw-bold">Pilota del giorno!</span><br>Importante traguardo per Antonelli che nel GP della Cina riesce a ottenere un grande risultato (P5 per lui)</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                            <img src="./images/norris_giorno.avif" class="w-100 border rounded-1" >
                            <div class="card-body">
                              <p class="card-text"><span class="fw-bold">Pilota del giorno!</span><br>Dopo una stupenda e dominante vittoria, Lando viene premiato dal pubblico. <br> Grande inizio per lui, dimostrando che sta maturando e migliorando sempre di più.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                            <img src="./images/norris_vince.avif" class="w-100 border rounded-1" >
                            <div class="card-body">
                              <p class="card-text"><span class="fw-bold">Laaando Norris vince!</span><br>La McLaren rinizia a vincere subito con un grandissimo Lando Norris in Australia. <br> Che sia la sua stagione?</p>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>

            

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p>Verstappen vince il Gp di Giappone!</p>
                    </div>
                    <div class="col-6">
                        <img alt="Verstappen crosses the line to take his first victory of the season" src="https://media.formula1.com/image/upload/f_auto,c_limit,q_auto,w_640,t_16by9Centre/fom-website/2025/Promo atom images/Max_win_japan_06042025" class="f1-c-image w-full h-full rounded-r-lg">
                    </div>
                </div>
            </div>



            <!-- seconda riga-->
            <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                        <img src="./images/tsunoda.jpeg" class="border rounded-1">
                        <div class="card-body">
                            <p class="card-text"><span class="fw-bold">Tsunoda in Red Bull è ufficiale!</span><br>La Red Bull ha deciso di agire rapidamente dopo il difficile inizio di stagione 2025 di Liam Lawson, declassandolo alla Racing Bulls e promuovendo Yuki Tsunoda al team senior insieme al campione del mondo in carica Max Verstappen. <br>
                            È un compito che ora attende Yuki Tsunoda, con il 24enne pronto a correre al fianco di Verstappen alla Red Bull a partire dal Gran Premio di casa del Giappone! Come se la caverà rispetto a coloro che hanno assunto quel ruolo prima di lui?</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                        <img src="./images/piastri_vince_cina.avif" class="w-100 border rounded-1" >
                        <div class="card-body">
                            <p class="card-text"><span class="fw-bold">Oscar Piastri vince il GP della Cina!</span><br>Un super Piastri riesce a imporsi anche sul compagno di squadra e vince il suo terzo GP <br> Grande inizio per la McLaren che si riconferma la prima forza del campionato con un bellissimo 1-2</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                        <img src="./images/Antonelli.avif" class="w-100 border rounded-1" >
                        <div class="card-body">
                            <p class="card-text"><span class="fw-bold">Pilota del giorno!</span><br>Importante traguardo per Antonelli che nel GP della Cina riesce a ottenere un grande risultato (P5 per lui)</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-3">
                    <div class="card border-2 border-start-0 border-top-0 border-danger rounded-1 card-img-top pt-2 w-100 h-100">
                        <img src="./images/norris_giorno.avif" class="w-100 border rounded-1" >
                        <div class="card-body">
                            <p class="card-text"><span class="fw-bold">Pilota del giorno!</span><br>Dopo una stupenda e dominante vittoria, Lando viene premiato dal pubblico. <br> Grande inizio per lui, dimostrando che sta maturando e migliorando sempre di più.</p>
                        </div>
                    </div>
                </div>
                
            </div>
            </div>
            
          
        </div>
      </div>
      </div>
    

     <!-- footer -->
     <footer>
	    <div class="footerWrapper sticky-bottom h-25">
	        <div class="row footerNav">
	            <div class="logo col-4 text-start">
	                    <img src="./images/f1_logo_footer.svg" alt="Formula1" class="w-50 h-50">
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
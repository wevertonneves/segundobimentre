<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Academic 2</title>
    <meta name="description" content="Games,">
    <meta name="keywords" content="games, jogos, lançamentos">

    <base href="http://techforge2.free.nf/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playwrite+MX:wght@100..400&family=Playwrite+NG+Modern:wght@100..400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/s.css">

    <link rel="shortcut icon" href="images/icone.png">
</head>

<body>
    <?php
        
        $url = "http://techforge2.free.nf/api/games.php";  /* local da  grid com os jogos*/
        
        $dadosApi = file_get_contents($url);
        
        $dadosJogos = json_decode($dadosApi);

      
    ?>
    
    <nav class="navbar navbar-expand-lg w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Stem">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipe">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                                foreach($dadosJogos as $dados) {
                                    echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                                }
                            ?>
                        </ul>
                    </li>
                </ul>
                
    
          <div class="d-flex up ">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Jogar agora
           <i class="fa-solid fa-gamepad"></i>
          </a>
          <ul class="dropdown-menu">
          
            <li><a class="dropdown-item" href="http://techforge2.free.nf/FlapBurnes/" target="_blank" >flapburnes</a></li>
            <li><a class="dropdown-item" href="http://techforge2.free.nf/Fujadascobras/"target="_blank">Fuja das cobras</a></li>
            <li><a class="dropdown-item" href="http://techforge2.free.nf/splasck/"target="_blank">splasck</a></li>
           
          </ul>
        </li>
                        
                  
                </div>
            </div>
        </div>
    </nav>
                            </header>
    <main>
        <?php
            
            $pagina = "home";
           
            if (isset($_GET["pagina"])) {
                $pagina = $_GET["pagina"] ?? "home";
                
                $pagina = explode("/", $pagina);
                
                $codigo = $pagina[1] ?? NULL;
                $pagina = $pagina[0] ?? "home";
            }

            $pagina = "pages/{$pagina}.php";

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include "pages/erro.php";
            }
        ?>
    </main>


    <footer class="footer" data-aos="fade">
        <p class="text-center">
            <strong>TechAcademic2: Todos os Direito Reservados.</strong>
        </p>
        <p class="text-center">
            Entre em contato através das nossas redes sociais.
        </p>
        <p class="text-center logo">
        <a href="https://www.facebook.com/weverton.thiago.165" title="facebook" class="buttonawe" >
            
            <i class="fa-brands fa-facebook" ></i> 
        </a>
        <a href="https://www.instagram.com/weverton.thiago.165/" title="Instagram" class="buttonawe">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://x.com/WevertonThiag16?t=yzN8XMKJSxEzH0oQxKaWYQ&s=09" title="twitter" class="buttonawe">
            <i class="fa-brands fa-x-twitter"></i>
</a>
</div>
    </footer>



    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
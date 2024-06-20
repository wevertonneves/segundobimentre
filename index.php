<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Games</title>
    <meta name="decription" content="loja de games desenvolvida segundo bimestre tads">
    <meta name="keywords" content="games, jogos , stem">
<base href="http://localhost/stem/">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/css.aos.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="shortcut icon" href="images/icone.png">
</head>
<body>
<?php
$url = "https://professorburnes.com.br/stem/api/games.php";
$dadosApi = file_get_contents($url);
$dadosjogos = json_decode($dadosApi);



?>









<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="gambygames">
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
          <a class="nav-link" href="quem-somos">Quem Somos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Menu de games
          </a>
          <ul class="dropdown-menu">
            <?php   
foreach($dadosjogos as $dados){echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a></li>";

}
            ?>
            
          </ul>
        </li>
        
      </ul>
      <div class="d-flex">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Baixar Games
           <i class="fas fa-download"></i>
          </a>
          <ul class="dropdown-menu">
          
            <li><a class="dropdown-item" href="game1.zip">flapburnes</a></li>
            <li><a class="dropdown-item" href="game2.zip">teste2</a></li>
            <li><a class="dropdown-item" href="game3.zip">teste3</a></li>
           
          </ul>
        </li>

    </div>
  </div>
</nav>
<main>
    <?php
$pagina = "home";
if (isset($_GET["pagina"])){
    $pagina = $_GET["pagina"] ?? "home";
    $pagina = explode("/", $pagina);
    $codigo = $pagina[1] ?? NULL;
    $pagina = $pagina[0] ?? "home";
 }
 $pagina = "pages/{$pagina}.php";
 if(file_exists($pagina)){
    include $pagina;
 }else {
    include "pages/erro.php";
 }

    ?>
</main>



    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
</body>
</html>
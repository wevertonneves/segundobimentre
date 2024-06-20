<?php
$url = "https://professorburnes.com.br/stem/api/banners.php";
$dadosApi = file_get_contents($url);
$dadosBanner = json_decode($dadosApi);

?>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

  <?php   
foreach($dadosBanner as $dados){echo "<a carousel-item active' href='game/{$dados->id_game}'>{$dados->nome}</a>";

}



</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
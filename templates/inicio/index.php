<?php include 'navbar.php' ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>BOLÃO COPA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>

<body>



<div class="img-fundo">
  <img class="img-fluid" src="./img/bg.png" alt="">
</div>

<section class="container-fluid up2">
  <div style="text-decoration: " class="main-text">
    <h1>O MELHOR SITE PARA CRIAR</h1>
    <span>seu bolão da copa do mundo 2022</span>
    <button><a style="text-decoration: solid;" href="index.php?r=palpites&tipo=FINAL">PALPITES</a></button>
    <button><a style="text-decoration: solid;" href="index.php?r=tabelas">TABELAS</a></button>
  </div>
  <div class="main-img">
  <img class="img" src="./img/fundo.png" alt="">
  </div>
</section>

<section class="top-card"> 
  <div class="rodadas jogador1" style="                 
     background-image: url(./img/jogador1.svg);
     background-repeat: no-repeat, no-repeat;
     background-size: cover;"><br>
        <button>Entrar</button>
  </div>

  <div class="rodadas jogador2" style="                 
     background-image: url(./img/jogador2.svg);
     background-repeat: no-repeat, no-repeat;
     background-size: cover;"><br>
        <button>Entrar</button>
  </div>

  <div class="rodadas" style="                 
     background-image: url(./img/jogador3.svg);
     background-repeat: no-repeat, no-repeat;
     background-size: cover;"><br>
        <button>Entrar</button>
  </div>
</section>


<!-- PROXIMOS JOGOS -->
<section class="container up3">
  <h1 class="text-prox">ÚLTIMAS NOTÍCIAS</h1>
  <div class="main3">
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Z-DEOw3JN2s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen ></iframe>
  </div>
</section>






</body>

</html>


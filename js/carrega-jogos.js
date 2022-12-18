window.addEventListener("load", () => {
  const _container = document.querySelector("div#container");

  console.log(_container);
  getListJogos();
});

function getListJogos() {
    fetch('?ajax=jogos-acertos.php')
    .then(_data => {
        if (_data) {
          console.log(_data)
        }
    })
  }

let html = `<h1>JOGOS QUE ACERTOU</h1>
<div class="rodadas" style=" 
    background-image: url(./img/selecao/grupo1.svg);
    background-repeat: no-repeat, no-repeat;
    background-size: cover;">
  <div class="col-12">
    <div class="rodadas-text">
      Data do Jogo:
      <span id="jogo-data"></span> <br>
      Hora do Jogo:
      <span id="jogo-horario"></span> <br>
      Estadio:
      <span id="jogo-local"></span> <br>
    </div>
    <div class="rodadas-img">
      <img src="" id="jogo-image">
      <span id="jogo-timea"></span>
      <input type="text" class="form-control" width="20px" name="timea" id="jogo-time1">
      <span>X</span>
      <input type="text" class="form-control" width="20px" name="timeb" id="jogo-time2">
      <span id="jogo-timeb"></span>
      <img src="" id="jogo-timeb"><br>
    </div>
  </div>
</div>
`;

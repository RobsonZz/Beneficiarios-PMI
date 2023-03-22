<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Avalie seu atendimento</title>
    <link rel="stylesheet" href="../assets/css/avaliar.css"/>
  </head>
  <body>
    <header>
      <div class="logo">
          <img src="../assets/images/italogo.jpg">
          <div class="logo-info"><p>Prefeitura Municipal de Itapemirim</p>
              Secretaria Municipal de Assistência Social e Cidadania
          </div>
      </div>
    </header>
<hr/>
<div class="container">
          <div><h1>PESQUISA DE SATISFAÇÃO SEMASCI</h1></div>
          <div class="emogi">
                  <div class="emogi-item">
                        <img src="../assets/icon/emogi1.png">
                  </div>
                  <div class="emogi-item">
                        <img src="../assets/icon/emogi2.png">
                  </div>
                  <div class="emogi-item">
                        <img src="../assets/icon/emogi3.png">
                  </div>
                  <div class="emogi-item">
                        <img src="../assets/icon/emogi4.png">
                  </div>
                  <div class="emogi-item">
                        <img src="../assets/icon/emogi5.png">
                  </div>
          </div>
        <div class="questbox">
          <h3>Avalie de 1 a 10 o atendimento realizado, sendo 1 muito insatisfeito e 10 muito satisfeito<hr/></h3>
          <div class="box">
            Como você avalia o atendimento recebido na recepção.<br/>
          <form method="post" action="recebedor.php">
            <input type="checkbox" name="quest1" value="1">1
            <input type="checkbox" name="quest1" value="1">2
            <input type="checkbox" name="quest1" value="1">3
            <input type="checkbox" name="quest1" value="1">4
            <input type="checkbox" name="quest1" value="1">5
            <input type="checkbox" name="quest1" value="1">6
            <input type="checkbox" name="quest1" value="1">7
            <input type="checkbox" name="quest1" value="1">8
            <input type="checkbox" name="quest1" value="1">9
            <input type="checkbox" name="quest1" value="1">10
          </div>
          <div class="box">
            Como você avalia o atendimento do assistente social.<br/>
            <input type="checkbox">1
            <input type="checkbox">2
            <input type="checkbox">3
            <input type="checkbox">4
            <input type="checkbox">5
            <input type="checkbox">6
            <input type="checkbox">7
            <input type="checkbox">8
            <input type="checkbox">9
            <input type="checkbox">10
          </div>
          <div class="box">
            Como você avalia o tempo que levou para ser atendido.<br/>
            <input type="checkbox">1
            <input type="checkbox">2
            <input type="checkbox">3
            <input type="checkbox">4
            <input type="checkbox">5
            <input type="checkbox">6
            <input type="checkbox">7
            <input type="checkbox">8
            <input type="checkbox">9
            <input type="checkbox">10
          </div>
          <div class="box">
            Avalie de 0 a 10 o que você buscava foi atendido.<br/>
            <input type="checkbox">1
            <input type="checkbox">2
            <input type="checkbox">3
            <input type="checkbox">4
            <input type="checkbox">5
            <input type="checkbox">6
            <input type="checkbox">7
            <input type="checkbox">8
            <input type="checkbox">9
            <input type="checkbox">10
          </div>
          <div class="box">
            Avalie de 0 a 10 a estrutura fisica deste local.<br/>
            <input type="checkbox">1
            <input type="checkbox">2
            <input type="checkbox">3
            <input type="checkbox">4
            <input type="checkbox">5
            <input type="checkbox">6
            <input type="checkbox">7
            <input type="checkbox">8
            <input type="checkbox">9
            <input type="checkbox">10
          </div>
        </div>
        <div class="questextra">
          <h3>Oque você veio procurar nesta secretaria?<hr/></h3>
          <div>
          <input type="checkbox">Benefício<br/>
          <input type="checkbox">Grupo<br/>
          <input type="checkbox">Informação<br/>
          <input type="checkbox">Documento<br/>
          <input type="checkbox">Encaminhamentos<br/>
          <input type="checkbox">Outros<br/>
        </div>
              <fieldset>
                <legend>Avaliação Geral</legend>
                <textarea style="width:100%; height:100px"></textarea>
              </fieldset>
        </div>
        <input type="submit"  value="Salvar" method="POST" action="planilha.html" id="botao">
      </form>
</div>
  <script src="assets/js/script.js"></script>
  </body>
</html>

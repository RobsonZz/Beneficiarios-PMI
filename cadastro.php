<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/template.css"/>
  </head>
  <body>
    <header class="logo"></header>
          <div class="container">
            <?php if(!empty($_SESSION['flash'])): ?>
                   <?=$_SESSION['flash'];?>
                   <?php $_SESSION['flash'] = ''; ?>
                  <?php endif; ?>
            <form method="post" action="<?=$base;?>/inserir_cadastro.php">
                    <label>
                          Nome:
                          <input type="text" name="name" require><hr/>
                    </label>
                    <label>
                          CPF:
                          <input type="text" name="cpf" require><hr/>
                    </label>
                    <label>
                          Email:
                          <input type="email" name="email"><hr/>
                    </label>
                    <label>
                          Data De Nascimento:
                    </label>
                      <input type="date" name="birthday" require><hr/>
                    <label>
                      <fieldset>
                            <legend>Descrição:</legend>
                            <textarea name="descricao" style= "width:100%; height:300px";></textarea>
                      </fieldset>
                    </label>
                      <input type="submit"  value="Enviar" id="botao"><a href="<?=$base;?>/index.php"><input type="button" value="Cancelar" id="botao"></a>
            </form>
          </div>
  <script src="assets/js/script.js"></script>
  </body>
</html>

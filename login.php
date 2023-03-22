<?php
require 'config.php';
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/template.css"/>
    <title>Página de login</title>
  </head>
  <body>
    <header>
      <div class="logo">
          <img src="assets/images/italogo.jpg">
          <div class="logo-info"><p>Prefeitura Municipal de Itapemirim</p>
              <p>Secretaria Municipal de Assistência Social e Cidadania</p>
              <h3>LOGIN DO SERVIDOR</h3>
          </div>
      </div>
    </header>
        <div class="login-formulario">
                 <?php if(!empty($_SESSION['flash'])): ?>
                   <?=$_SESSION['flash'];?>
                   <?php $_SESSION['flash'] = ''; ?>
                  <?php endif; ?>
                <form method="post" action="<?=$base;?>/login_action.php">
                    Nome:<br/>
                    <input type="text" name="name">
                    <br/>Senha:<br/>
                    <input type="password" name="password">
                    <br/><input type="submit" value="Login" id="bt-login">
                </form>
        </div>
    <!--- Secure Site Seal - DO NOT EDIT --->
<span id="ss_img_wrapper_115-55_image_en">
<a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html"
target="_blank" title="SSL Certificates">
<img alt="Wildcard SSL Certificates" border=0 id="ss_img"
src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif"
title="SSL Certificate">
</a>
</span>
<script type="text/javascript"
src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
<!--- Secure Site Seal - DO NOT EDIT --->
  </body>
</html>

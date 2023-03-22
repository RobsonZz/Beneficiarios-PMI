<?php
require_once 'config.php';
require 'models/Auth.php';

$auth = new Auth($pdo, $base);
$logado = $auth->checklogin();
$logadoUpletter = ucfirst($logado->name);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/tabela.css">
  </head>
  <body>
    <header>
      <div class="info-top">
        <div class="welcome"><h1>Bem Vindo! <font color="purple"><?= $logadoUpletter ?></font></h1></div>
        <div class="search-area">
        <form method="GET" >
          <input type="search" placeholder="Pesquisar" name="s"/>
        </form>
        </div>
        <a href="<?=$base?>/cadastro.php"><div class="botao-tab"> Cadastrar </div></a>
        <a href="<?=$base?>/partials/index_atend.php"><div class="botao-tab"> Atendimento  </div></a>
        <a href="<?=$base?>/logout.php"><div class="botao-tab"> Sair </div> </a>
        
      </div>
    </header>

<?php
    $sql = $pdo->query("SELECT * FROM cadastroatt");
    if($sql->rowCount() > 0){
      $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>
   <div class="Tabela">
    <table border="1" width="100%">
            <tr id="titulo-info">
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>EMAIL</th>
            <th>DATA DE NASCIMENTO</th>
            <th>DESCRIÇÃO</th>
            </tr>
            <?php foreach($lista as $beneficiados):?>
      <tr class="tabela-info">
        <th><?php echo $beneficiados['id'];?></th>
        <th><?php echo $beneficiados['name'];?></th>
        <th><?php echo $beneficiados['cpf'];?></th>
        <th><?php echo $beneficiados['email'];?></th>
        <th><?php echo $beneficiados['birthday'];?></th>
        <th><?php echo $beneficiados['descricao'];?></th>
      </tr>
            <?php endforeach; ?>
     </table>
   </div>
</body>
</html>

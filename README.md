# Beneficiarios-Prefeitura
Site criado para controle de beneficiários dos programas sociais das prefeituras.
Obs: Não esta responsivo para celular ainda.

A pagina de login foi criada para apenas servidores, por isso  o cadastro do servidor é feito atraves da substituição do codigo <form method="post" action="<?=$base;?>/login_action.php"> dentro do arquivo login.php, por <form method="post" action="<?=$base;?>/inserir_login.php">, para criar o usuario e senha, depois é só desfazer a substituição e acessar o site com o usuario criado. O site é usado para cadastrar as pessoas que utilizam beneficos de programas sociais da prefeitura é registrado os dados da pessoa e a descrição de qual beneficio a pessoa recebe e quando recebeu.





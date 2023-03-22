<?php
session_start();

$base = 'https://algumsite.com';

$db_name= 'nomedoservidor';
$db_host= 'ipdoservidor';
$db_user= 'nomedousuario';
$db_pass= 'senhadousuario';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);

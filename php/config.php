<?php
//Nome do Banco de Dados
define('DB_NAME', ' aqui ');
//Usuário Exemplo(root)
define('DB_USER', ' aqui ');
//Senha
define('DB_PASSWORD', ' aqui ');
//Host MySQL Exemplo(localhost)
define('DB_HOST', 'localhost');
$mysqli =  new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
?>
<?php


// Cabeçalho
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Content-Type: application/json; charset=UTF-8');


//Conexão com banco de dados
include "config.php";


//Buscando objeto em json
$postjson = json_decode(file_get_contents('php://input'), true);
//$postjson[nome do objeto enviado]

if($postjson['opc'] == "add_register") {

    $query = mysqli_query($mysqli, "INSERT INTO tabela SET 
    img       = '$postjson[img]',
    nome       = '$postjson[nome]',
    descricao        = '$postjson[descricao]'
  ");
  
   if($query) $result = json_encode(array('msg'=>'Cadastrado com sucesso'));
        echo $result;
          
}

?>
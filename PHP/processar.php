<?php

$connection = require("dbfactory.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];

$descricao = $_POST['description'];

if($result = $connection -> 
query(@"INSERT INTO pessoa (description) VALUES ('$nome,$cpf,$endereco');")){
    echo "Inserido com sucesso";
}
else{
    echo $connection->error;
}

$connection -> close();

?>
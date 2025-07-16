<?php

$connection = require("dbfactory.php");

$nome = $_POST['nome'];
$cpf = $_POST['CPF'];
$endereco = $_POST['endereco'];

$descricao = $_POST['description'];

if($result = $connection -> 
query(@"INSERT INTO todo (description) VALUES ('$descricao');")){
    echo "Inserido com sucesso";
}
else{
    echo $connection->error;
}

$connection -> close();

?>
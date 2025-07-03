<?php

$connection = require("dbfactory.php");

$descricao = $_POST['description'];

if($result = $mysqli -> 
query(@"INSERT INTO todo (description) VALUES ($descricao);")){
    echo "Inserido com sucesso";
}

$connection -> close();

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segundo troço ae</title>
</head>
<?php

$connection = require("dbfactory.php");

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
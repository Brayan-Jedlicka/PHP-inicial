<?php

$mysqli = new mysqli("localhost","root","root","programacao_2");


if($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: " . mysqli -> connect_errno;
    exit();
}

Somar($_POST['numero1'],$_POST['numero2']);
Dividir($_POST['numero1'],$_POST['numero2']);
Multiplicar($_POST['numero1'],$_POST['numero2']);
Subtrair($_POST['numero1'],$_POST['numero2']);


function Somar($numero1,$numero2){
    echo $numero1 + $numero2;
}
function Multiplicar($numero1,$numero2){
    echo $numero1 * $numero2;
}
function Dividir($numero1,$numero2){
    echo $numero1 / $numero2;

}function Subtrair($numero1,$numero2){
    echo $numero1 - $numero2;
}
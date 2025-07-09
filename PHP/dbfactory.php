<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>outro troço ae</title>
</head>
<?php
    $mysqli = new mysqli("localhost","root","root","programacao_2");

    if($mysqli -> connect_errno){
        echo "Failed to connect to MySQL:" . $mysqli -> connect_error;
    }
    return $mysqli;
?>

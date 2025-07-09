<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troço ae</title>
</head>
<body>
    <?php
    $connection = require("dbfactory.php");
    $sql = "SELECT idtodo, description FROM todo";

    $result = $mysqli->query($sql);

    echo "<table>";
    while ($row = $result -> fetch_assoc()){
            echo "<tr>" 
                    . "<td>".$row["idtodo"]."</td>"
                    . "<td>".$row["description"]."</td>"
                ."</tr>";
    }
    echo "</table>";
    ?>
    <form action = "processar.php" method = "post">
        <label for="todo-description">Digite algo</label>
        <input name="description" id="todo-description" type="text">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>
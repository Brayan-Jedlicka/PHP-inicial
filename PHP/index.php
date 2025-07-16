<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        function Salvar($pessoa){
            $connection = require("dbfactory.php");                        
            if ($connection -> 
                query(@"INSERT INTO pessoa (description) VALUES ('$pessoa');")) {                 
            }
            $connection -> close();
        }
        function Recuperar(){
            $connection = require("dbfactory.php");
            $sql = "SELECT idpessoa,nome,cpf,endereco description FROM pessoa";

            $result = $mysqli->query($sql);
            echo "<table>";
            while ($row = $result->fetch_assoc()) {            
                echo "<tr>" 
                        . "<td>".$row["idpessoa"]."</td>"
                        . "<td>".$row["nome"]."</td>"
                        . "<td>".$row["cpf"]."</td>"
                        . "<td>".$row["endereco"]."</td>"
                    ."</tr>";
            }
            echo "</table>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST['nome']); 
            if(!empty($nome)){
                Salvar($nome);
            }           
        }
        Recuperar();        
    ?>
    <form method="post">
        <label for = "name">nome</label>
        <input name = "nome" id = "nome" type = "text">
        <label for = "cpf">cpf</label>
        <input name = "cpf" id = "cpf" type = "text">
        <label for = "endereco">endereço</label>
        <input name = "endereco" id = "endereco" type = "text">
        <button type="submit">Salvar</button>
    </form> 
</body>
</html>
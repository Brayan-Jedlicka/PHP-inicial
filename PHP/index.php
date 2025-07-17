<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
        function Salvar($nome,$cpf,$endereco){
            $connection = require("dbfactory.php");                        
            if ($connection -> 
                query(@"INSERT INTO pessoa (nome,cpf,endereco) VALUES ('$nome','$cpf','$endereco');")) {                 
            }
            $connection -> close();
        }
        function Recuperar(){
            $connection = require("dbfactory.php");
            $sql = "SELECT idpessoa,nome,cpf,endereco  FROM pessoa";

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
            $cpf = htmlspecialchars($_POST['cpf']);
            $endereco = htmlspecialchars($_POST['endereco']);
            if(!empty($nome) && !empty($cpf) && !empty($endereco)) {
                
                Salvar($nome,$cpf,$endereco);
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
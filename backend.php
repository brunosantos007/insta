<?php

include_once("frontend.html");

$host = "localhost";
$db_name = "instagram";
$user = "root";
$pass = "";

$conexao = new PDO("mysql:host=$host;dbname=$db_name",$user,$pass);

?>
<?php
            $email = $_POST["email"];
            $nome = $_POST["nome"];
            $username = $_POST["username"];
            $senha = $_POST["senha"];

        if($email != "" && $nome != "" && $username != "" && $senha != ""){
    
            $stmt = $conexao->prepare("INSERT INTO usuario(email,nome,username,senha)
            VALUES (?,?,?,?)");
    
            $stmt->bindParam(1,$email);
            $stmt->bindParam(2,$nome);
            $stmt->bindParam(3,$username);
            $stmt->bindParam(4,$senha);
    
            $stmt->execute();
?>
<script>
    alert("Cadastrado com sucesso!");
</script>
    <?php }else{?>
    <script>
        alert("Erro ao enviar os dados!");
    </script>
    <?php
    }
    ?>
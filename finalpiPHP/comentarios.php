<?php

$bd_servidor = "localhost";
$bd_usuario = "vilelafinalpi";
$bd_senha = "vilelajonathan";
$bd_banco = "formulario";

// Verifica se os campos foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados dos campos
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    try {
        // Conecta ao banco de dados
        $conexao = new PDO("mysql:host=$bd_servidor;dbname=$bd_banco", $bd_usuario, $bd_senha);

        // Prepara a consulta SQL usando um prepared statement
        $sql = "INSERT INTO comentarios (nome, mensagem) VALUES (:nome, :mensagem)";
        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':mensagem', $mensagem);


        $stmt->execute();

    } catch (PDOException $erro) {
        echo "<h1>Erro: " . $erro->getMessage() . "</h1>";
    }
}

?>

<?php
include("conexao.php");

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];


$sql = "INSERT INTO usuarios (cpf, nome, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sss', $cpf, $nome, $senha);

    if ($stmt->execute()) {
        header("Location: cadastroUsuarios.php");
        exit(); 
    } else {
        echo "Erro ao cadastrar o usuário.";
    }
} else {
    echo "Erro ao preparar a consulta SQL.";
}
?>
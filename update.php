<?php

include('conexao.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$cpfANTIGO = $_POST['cpfANTIGO'];


$sql = "UPDATE usuarios SET nome = ?, senha = ?, cpf = ? WHERE cpf = ?";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('ssss', $nome, $senha, $cpf, $cpfANTIGO); 

    if ($stmt->execute()) {
        header("Location: updateUsuarios.php");
        exit();
    } else {
        echo "Erro na atualização do usuário.";
    }
} else {
    echo "Erro ao preparar a consulta SQL.";
}

?>
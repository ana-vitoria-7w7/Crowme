<?php
include("conexao.php");

$nome = $_POST["nome"];
$ano = $_POST["ano"];
$genero = $_POST["genero"];


$sql = "INSERT INTO filmes (nome, ano, genero) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param('sss', $nome, $ano, $genero);

    if ($stmt->execute()) {
        header("Location: cadastroFilmess.php");
        exit(); 
    } else {
        echo "Erro ao cadastrar o filme.";
    }
} else {
    echo "Erro ao preparar a consulta SQL.";
}
?>
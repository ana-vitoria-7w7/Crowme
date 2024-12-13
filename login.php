<?php

    include("conexao.php");

    $cpf=$_POST["cpf"];
    $senha=$_POST["senha"];

    function validar_cpf($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    $sql = "select * from usuarios where cpf= ? and senha= ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('ss', $cpf, $senha);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();

            if(isset($row) && $row['nome'] != ''){
                session_start();
                $_SESSION['cpf'] = $cpf;
                $_SESSION['senha'] = $senha;
                $_SESSION['nome'] = $row['nome'];
                header('Location: principal.php');

            }
        }else{
            echo "senha incorreta";
        }
    }

?>
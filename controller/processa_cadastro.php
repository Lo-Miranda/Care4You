<?php
session_start();
include '../model/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    $nomeCompleto = htmlspecialchars(strip_tags($_POST['nome_completo']));
    $dataNascimento = htmlspecialchars(strip_tags($_POST['data_nascimento']));
    $endereco = htmlspecialchars(strip_tags($_POST['endereco']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $senha = htmlspecialchars(strip_tags($_POST['senha'])); 

    $sql = "INSERT INTO paciente (nome_completo, data_nascimento, endereco, email, senha) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $connection->error);
    }

    $stmt->bind_param("sssss", $nomeCompleto, $dataNascimento, $endereco, $email, $senha);

    if ($stmt->execute()) {
        header("Location: ../view/cadastro.php?message=Paciente cadastrado com sucesso!");
        exit();
    } else {        
        header("Location: ../view/cadastro.php?message=Erro ao cadastrar paciente: " . $stmt->error);
        exit();
    }

    $stmt->close();
}
?>

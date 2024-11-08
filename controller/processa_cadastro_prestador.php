<?php
session_start();
include '../model/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {    
    $nome = htmlspecialchars(strip_tags($_POST['nome']));
    $dataNascimento = htmlspecialchars(strip_tags($_POST['data_nascimento']));
    $endereco = htmlspecialchars(strip_tags($_POST['endereco']));
    $especialidade = htmlspecialchars(strip_tags($_POST['especialidade']));
    $registro = htmlspecialchars(strip_tags($_POST['registro']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $senha = htmlspecialchars(strip_tags($_POST['senha'])); 

    $sql = "INSERT INTO prestador (nome, data_nascimento, endereco, especialidade, registro, email, senha) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    
    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $connection->error);
    }
    
    $stmt->bind_param("sssssss", $nome, $dataNascimento, $endereco, $especialidade, $registro, $email, $senha);

    if ($stmt->execute()) {       
        header("Location: ../view/cadastro_prestador.php?message=Prestador cadastrado com sucesso!");
        exit();
    } else {        
        header("Location: ../view/cadastro_prestador.php?message=Erro ao cadastrar prestador: " . $stmt->error);
        exit();
    }
    
    $stmt->close(); 
}
?>

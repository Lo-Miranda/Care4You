<?php
session_start();
include_once('../model/dbcon.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $connection->real_escape_string($_POST['user_id']);
    $nome = $connection->real_escape_string($_POST['nome']);
    $especialidade = $connection->real_escape_string($_POST['especialidade']);
    $email = $connection->real_escape_string($_POST['email']);
    $registro = $connection->real_escape_string($_POST['registro']);
    
    $sql = "UPDATE prestador SET nome='$nome', especialidade='$especialidade', email='$email', registro='$registro' WHERE id='$user_id'";

    if ($connection->query($sql) === TRUE) {
        $_SESSION['success'] = "Perfil atualizado com sucesso!";
        header("Location: ../view/perfil_medico.php");
    } else {
        $_SESSION['error'] = "Erro ao atualizar perfil: " . $connection->error;
        header("Location: ../view/editar_perfil.php");
    }

    $connection->close();
} else {
    header("Location: ../view/perfil_medico.php");
}
?>;

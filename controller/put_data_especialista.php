<?php
include_once('../model/dbcon.php'); 

if (isset($_POST['add_cadastro'])) {
    $id = intval($_POST['id']); 
    $nomeProfissional = mysqli_real_escape_string($connection, $_POST['NomeProfissional']); 

    if (!empty($nomeProfissional)) {
        
        $query = "UPDATE especialista SET NomeProfissional = '$nomeProfissional' WHERE id = $id";
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("Erro na atualização: " . mysqli_error($connection));
        } else {
           header('Location: ../view/index.php?update_msg=Atualização realizada com sucesso');
            exit();
        }
    } else {
        echo "Nome do profissional não pode estar vazio.";
    }
} else {
    echo "Ação não autorizada.";
}
?>

<?php
include_once('../model/dbcon.php');   

if (isset($_POST['add_cadastro'])) {    
    $idCalendario = intval($_POST['idCalendario']);
    $dataCalendar = mysqli_real_escape_string($connection, $_POST['dataCalendar']); 
   
    if (!empty($dataCalendar)) {        
        $query = "UPDATE calendario SET dia = '$dataCalendar' WHERE id = $idCalendario";

        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("Erro na atualização: " . mysqli_error($connection));
        } else {            
            header('Location: ../view/index.php?update_msg=Atualização realizada com sucesso');
            exit();
        }
    } else {
        echo "Data não pode estar vazia.";
    }
} else {
    echo "Ação não autorizada.";
}
?>

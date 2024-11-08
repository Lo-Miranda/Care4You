<?php include_once('..\model\dbcon.php')?>  

<?php
    $idEspecialidade = $_POST['idEspecialidade'];
    $idEspecialista = $_POST['idEspecialista'];
    $idCalendario = $_POST['idCalendario'];

    $query = "SELECT * FROM `especialidade` where id = ".$idEspecialidade;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $nomeEspecialidade = $row['Nome'];

    $query = "SELECT * FROM `especialista` where id = ".$idEspecialista;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $nomeEspecialista = $row['NomeProfissional'];


    $query = "SELECT * FROM `calendario` where id = ".$idCalendario;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $dia = $row['dia'];

?>
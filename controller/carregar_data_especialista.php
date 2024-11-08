<?php include_once('..\model\dbcon.php')?> 
<?php

    $rowEspecialista = null;

    if(isset($_POSTT['idEspecialista'])){
        $idEspecialista = $_POST['idEspecialista'];

        $query = "SELECT * from especialista WHERE id = '$idEspecialista'";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query Failed".mysqli_error($connection));
        }
        else{
            $rowEspecialista = mysqli_fetch_assoc($result);
            
        }
    }

    
?>
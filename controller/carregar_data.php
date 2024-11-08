<?php include_once('..\model\dbcon.php')?> 
<?php

    $row = null;

    if(isset($_POST['idEspecialidade'])){
        $idEspecialidade = $_POST['idEspecialidade'];

        $query = "SELECT * from especialidade WHERE id = '$idEspecialidade'";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query Failed".mysqli_error($connection));
        }
        else{
            $row = mysqli_fetch_assoc($result);
            
        }
    }

    
?>
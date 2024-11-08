<?php include_once('..\model\dbcon.php')?>   

<?php
    if(isset($_POST['add_cadastro'])){

        $idnew = $_REQUEST['id'];

        $name = $_POST['nome'];
        
        $query = "UPDATE especialidade SET 
        nome = '$name',        
        WHERE id = $idnew";       

        print_r($query);
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("query Failed".mysqli_error($connection));
        }           
        else {
            header('location:..\view\index.php?update_msg=Atualização realizada com sucesso');
        }

        
        
    }
    else {
        print_r('olá');
    }

   
?>

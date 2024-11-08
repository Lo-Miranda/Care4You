<?php include_once('..\model\dbcon.php')?> 
<?php

    $rowCalendar = null;

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * from calendario WHERE id = '$id'";
        
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query Failed".mysqli_error($connection));
        }
        else{
            $rowCalendar = mysqli_fetch_assoc($result);
            
        }
    }

    
?>
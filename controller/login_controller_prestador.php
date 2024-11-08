<?php

    session_start();

    require '..\model\dbcon.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
        $email = $connection->real_escape_string($_POST['email']);
        $senha = $connection->real_escape_string($_POST['senha']);
                
        $sql = "SELECT id, email FROM prestador WHERE email='$email' AND senha='$senha'";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {            
            $user = $result->fetch_assoc(); 
            $_SESSION['loggedin'] = true; 
            $_SESSION['email'] = $user['email']; 
            $_SESSION['user_id'] = $user['id'];
    
            header("Location: ../view/page_inicial_prestador.php");
            exit();
        } else {
            $_SESSION['error'] = "E-mail ou senha inválidos.";
            header("Location: ../view/login_prestador.php");
            }
  

        
        $connection->close();
    }
?>

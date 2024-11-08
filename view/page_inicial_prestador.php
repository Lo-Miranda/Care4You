<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>     

<div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">
        <h4 style="border-radius:20px; padding-bottom: 10px; font-size: 15px;">Seja bem-vindo(a)!</h4>    
        <h3 style="border-radius:20px; padding-bottom: 40px; font-size: 18px;">O que você gostaria de fazer hoje?</h3>

        <div style="text-align: center; padding-bottom: 10px; font-size: 18px;"> 
            <a class="btn btn-dark" href="perfil_medico.php" role="button">Visualizar e editar perfil</a>  
        </div> 
        <div style="text-align: center; padding-bottom: 150px; font-size: 18px;"> 
            <a class="btn btn-dark" href="gerenciar_consultas.php" role="button">Gerenciar consultas</a>  
        </div>         
        
        
        <div style="text-align: center;">
            <a class="btn btn-secondary" href="index.php" role="button">Voltar</a>                            
        </div>  
    </div>
</div>

<?php include('layout/footer.php'); ?>


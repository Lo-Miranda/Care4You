<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?>          
    
    <div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">     
    <h5 style= "border-radius:20px; padding-bottom: 34px;">Para quem será a consulta?</h5>

    <div style="text-align: center; padding-bottom: 10px;font-size: 18px;"> 
        <a class="btn btn-dark" href="especialidade.php" role="button">Para mim </a>  
    </div> 
    <div style="text-align: center; padding-bottom: 190px;font-size: 18px;"> 
    <a class="btn btn-dark" href="construcao.php" role="button">Para um dependente </a> <br>
    </div> 
   
    <div style="text-align: center; padding-bottom: 20px;">   
    <a class="btn btn-secondary" href="page_inicial.php" role="button">Voltar</a>
    </div>
                               
        
    <?php include('layout\footer.php'); ?> 
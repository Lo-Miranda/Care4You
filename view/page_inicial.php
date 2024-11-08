<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?>     


    <div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">
    <h4 style= "border-radius:20px; padding-bottom: 10px;font-size: 15px;">Seja bem-vindo! </h4>    
    <h5 style= "border-radius:20px; padding-bottom: 40px;">O que você gostaria de fazer hoje?</h5>

    <div style="text-align: center; padding-bottom: 10px;font-size: 18px;"> 
        <a class="btn btn-dark" href="pre_consulta.php" role="button">Agendar consulta </a>  
    </div> 
    <div style="text-align: center; padding-bottom: 150px;font-size: 18px;"> 
    <a class="btn btn-dark" href="lista_especialistas.php" role="button">Consultar rede de profissionais </a>   <br>
    </div> 
    
        
      <div style="text-align: center; padding-bottom: 13px;">
    <a class="btn btn-secondary" href="index.php" href="login.php" role="button">Voltar</a>                            
      </div>  
    <?php include('layout\footer.php'); ?> 

   
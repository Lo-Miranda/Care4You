<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php'); ?>     

<div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px; text-align: center;">
        <h5 >Escolha a especialidade:</h5>
    </div>   
    <div class="table-responsive">
        <table class="table-sm table-borderless" style="width: 90%; text-align: center;">
            <tbody>
                <?php include_once('..\controller\get_data.php'); ?>
            </tbody>
        </table>
    </div>

   
    <div class="pagination" style="text-align: center; padding: 10px;">
        <?php if ($pagina_atual > 1): ?>
            <a href="?pagina=<?php echo $pagina_atual - 1; ?>" class="btn btn-light">Anterior</a>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
            <a href="?pagina=<?php echo $i; ?>" class="btn btn-light <?php echo $i == $pagina_atual ? 'active' : ''; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>
        
        <?php if ($pagina_atual < $total_paginas): ?>
            <a href="?pagina=<?php echo $pagina_atual + 1; ?>" class="btn btn-light">Próximo</a>
        <?php endif; ?>
    </div>
    
    <div class="box1" >             
        <a class="btn btn-dark" href="pre_consulta.php" role="button" style="background-color: #524b4a">VOLTAR</a>    
    </div>  
</div>


<?php include('layout\footer.php'); ?>

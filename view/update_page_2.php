<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>
<?php include('../controller/carregar_visualizacao.php'); ?>


<div class="col-md-12">
    <form action="resumo.php" method="post">
        <h5 >Confirme suas escolhas: </h5>
        <div class="row">
            <div class="col-md-12" style="font-size: 20px; font-weight: 200; padding: 0px 20px 5px 20px;">
                <p>Especialidade escolhida:</p>
                <input type="text" name="especialidade" class="form-updatepage2" 
                value="<?php echo htmlspecialchars($nomeEspecialidade); ?>" readonly>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12" style="font-size: 12px; font-weight: 200; padding: 5px 20px;">
                        <p>Profissional escolhido:</p>
                        <input type="text" name="profissional" class="form-updatepage2"
                        value="<?php echo htmlspecialchars($nomeEspecialista); ?>" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="font-size: 12px; font-weight: 200; padding: 5px 20px;">
                        <p>Data escolhida:</p>
                        <input type="text" name="data" class="form-updatepage2"
                        value="<?php echo date_format(date_create($dia), "d/m/Y"); ?>" readonly>
                    </div>
                </div>
                
                <!-- Botões -->
                <div class="col-md-12" style="font-size: 12px; font-weight: 200; text-align: center; padding-bottom: 40px;">
                <a class="btn btn-dark" href="page_inicial.php" role="button" style="background-color: #524b4a">Cancelar</a>


                    <input type="submit" class="btn btn-dark" value="Confirmar">
                </div>
            </div>
        </div>
    </form>
</div>


<?php include('layout/footer.php'); ?>

<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>



<div class="container">
    <h5>Consulta agendada!</h5>
    <h6 style="color: red;">O profissional foi avisado e estará no seu endereço na data escolhida.</h6>

    <div class="row">
        <div class="col-md-12">
            <h5>Especialidade Escolhida:</h5>
            <p><?php echo htmlspecialchars($_POST['especialidade']); ?></p>
        </div>
        <div class="col-md-12">
            <h5>Profissional Escolhido:</h5>
            <p><?php echo htmlspecialchars($_POST['profissional']); ?></p>
        </div>
        <div class="col-md-12">
            <h5>Data Escolhida:</h5>
            <p><?php echo htmlspecialchars($_POST['data']); ?></p>
        </div>
    </div>

    <div class="text-center" style="padding-top: 20px; padding-bottom: 60px;">
        <a class="btn btn-dark" href="page_inicial.php" role="button">Novo agendamento</a>
        <button class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Deletar</button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cancelModalLabel">Cancelamento de Agendamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                Agendamento cancelado.
            </div>
            <div class="modal-footer" >
                <a class="btn btn-dark" href="page_inicial.php" role="button">Novo Agendamento</a>
                <a class="btn btn-secondary" href="index.php" role="button">Fechar</a>
            </div>
        </div>
    </div>
</div>


<?php include('layout/footer.php'); ?>


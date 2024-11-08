<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>

<style>
    /* Data */
    .containerData {
        width: 80%;
        margin: 0 auto;
        padding-top: 20px;
    }

    /* Estilo da Cabeçalho */
    .headerData h3 {
        text-align: center;
        font-size: 24px;
        padding-bottom: 40px;
        font-weight: bold;
    }

    /* Estilo da área do calendário com rolagem */
    .calendar-wrapper-data {
        max-height: 193px; /* Altura máxima da área de datas */
        overflow-y: auto;  /* Barra de rolagem quando necessário */
        border: 1px solid #ddd; /* Borda para visualização */
        border-radius: 10px;
        padding: 10px;
        margin-top: 20px;  /* Um pequeno espaçamento se necessário */
    }

    /* Estilo da tabela onde as datas são exibidas */
    .calendar-table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .calendar-table-data td {
        text-align: center;
        padding: 10px;
    }

    .calendar-table-data .expandable {
        cursor: pointer;
        color: grey;
        
    }

    .calendar-table-data .expandable:hover {
        color: #0056b3;
    }

    /* Estilo do botão Voltar */
    .footer-data {
        text-align: center;
        margin-top: 40px;
    }

    .footer-data a {
        background-color: #524b4a;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .footer-data a:hover {
        background-color: #3e3a39;
    }
</style>

<div class="containerData">
    <div class="headerData">
        <h5 style="border-radius:20px; padding-bottom: 40px;">Datas disponíveis para esse profissional:</h5>
    </div>

    <div class="calendar-wrapper-data">
        <form action="update_page_2.php" method="POST">
            <input type="hidden" name="idEspecialista" id="idEspecialista" value="<?php echo $_POST['idEspecialista']; ?>" />
            <input type="hidden" name="idEspecialidade" id="idEspecialidade" value="<?php echo $_POST['idEspecialidade']; ?>" />
            <input type="hidden" name="idCalendario" id="idCalendario" />
            
            <table class="calendar-table-data">
                <tbody>
                    <?php include_once('../controller/get_data_calendar.php'); ?>
                </tbody>
            </table>
        </form>
    </div>

    <div class="footer-data">
        <a class="btn btn-dark" href="especialista.php?idEspecialidade=<?php echo urlencode($_POST['idEspecialidade']); ?>" role="button">VOLTAR</a>
    </div>
</div>

<script>    
    function enviarFormulario(id) {
        document.getElementById("idCalendario").value = id;
        document.forms[0].submit();
    }
</script>

<?php include('layout/footer.php'); ?>

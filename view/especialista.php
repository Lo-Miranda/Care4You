<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>

<style>
    .especialista-card {
        border: 1px solid #ddd;          
                       
        border-radius: 6px;                  /* Bordas arredondadas */
        background-color: #fafafa;           /* Cor de fundo suave */
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);  /* Sombra sutil */
                    /* Espaço entre os cards */
        
        flex-direction: column;              /* Alinha o nome e a nota verticalmente */
        justify-content: center;             /* Centraliza o conteúdo no card */
        text-align: center;                  /* Alinha o texto no centro */
    }

    .especialista-card:hover {
        transform: scale(1.02);              /* Efeito de zoom suave ao passar o mouse */
    }

    .especialista-nome {
        font-weight: bold;                   /* Nome em negrito */
        font-size: 16px;                     /* Tamanho da fonte do nome */
        color: #333;                         /* Cor do texto */
                      /* Espaço entre o nome e a nota */
    }

    .especialista-nota {
        font-size: 10px;                     /* Tamanho da fonte da nota */
        color: #777;                         /* Cor do texto da nota */
        margin-top: 5px;                     /* Espaço entre nome e nota */
    }

    /* Estilo para a div que envolve os cards, com scroll */
    .profissionais-list {
        max-height: 180px;                   /* Altura ainda mais reduzida da div com o scroll */
        overflow-y: auto;                    /* Habilita o scroll vertical */
        padding-right: 10px;                 /* Espaço para a barra de rolagem */
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
</style>

<div class="table-responsive" style="border-radius: 20px;">
    <div style="padding-top:20px">
        <h5 style="border-radius:20px; padding-bottom: 40px; ">Profissionais disponíveis para esta especialidade:</h5>
    </div>
    
   <div class="profissionais-list">
        <form action="data.php" method="POST">
            <input type="hidden" name="idEspecialista" id="idEspecialista">
            <input type="hidden" name="idEspecialidade" id="idEspecialidade" value="<?php echo $_GET['idEspecialidade']; ?>" />
            
            <?php include_once('../controller/get_data_especialista.php'); ?>
        </form>
    </div>

    <div class="box1" style="padding-top:40px; padding-bottom: 60px;">             
        <a class="btn btn-dark" href="especialidade.php" role="button" style="background-color: #524b4a">VOLTAR</a>
    </div>  

<script>
    function escolherEspecialista(id) {
        document.getElementById("idEspecialista").value = id; 
        document.forms[0].submit(); 
    }
</script>

<?php include('layout/footer.php'); ?>

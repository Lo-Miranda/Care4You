<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>

<div class="container_cadastro">
    <h4>Cadastro de Prestador</h4>

    <form id="form_cadastro_prestador" action="../controller/processa_cadastro_prestador.php" method="POST">
        <input type="text" id="nome_p" name="nome" placeholder="Nome Completo" required>
        <input type="date" id="data_nascimento_p" name="data_nascimento" required>
        <input type="text" id="endereco_p" name="endereco" placeholder="Endereço" required>
        <input type="text" id="especialidade_p" name="especialidade" placeholder="Especialidade" required>
        <input type="text" id="registro_p" name="registro" placeholder="Registro médico" required>
        <input type="email" id="email_p" name="email" placeholder="Email" required>
        <input type="password" id="senha_p" name="senha" placeholder="Senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h5 id="modal-message"></h5>
        <a href="login_prestador.php"><button>Entrar</button></a>
    </div>
</div>

<script>
    function showModal(message) {
        document.getElementById('modal-message').innerText = message;
        document.getElementById('modal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal').style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('modal');
        if (event.target == modal) {
            closeModal();
        }
    }

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('message')) {
        showModal(urlParams.get('message'));
    }
</script>

</body>
</html>

<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?> 

<body>

<div class="container_cadastro">
    <h2>Cadastro de Paciente</h2>

    <form id="myForm" action="../controller/processa_cadastro.php" method="POST" style="padding-bottom: 80px;">
        <input type="text" name="nome_completo" placeholder="Nome Completo" required>
        <input type="date" name="data_nascimento" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="submit" value="Cadastrar">
    </form>
</div>

<!-- Modal -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h5 id="modal-message"></h5>
        <a href="login.php"><button>Entrar</button></a>
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

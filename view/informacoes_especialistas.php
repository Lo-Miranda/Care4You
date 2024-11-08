<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>
<?php
$id = $_GET['id'];

// Consultar as informações do especialista
$query = "SELECT nome, data_nascimento, especialidade, nota, registro FROM prestador WHERE id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$especialista = $result->fetch_assoc();

?>


<body>
    <?php if ($especialista): ?>
        <h5>Informações de <?php echo htmlspecialchars($especialista['nome']); ?></h5>
        <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($especialista['data_nascimento']); ?></p>
        <p><strong>Especialidade:</strong> <?php echo htmlspecialchars($especialista['especialidade']); ?></p>
        <p><strong>Nota:</strong> <?php echo htmlspecialchars($especialista['nota']); ?></p>
        <p><strong>Registro:</strong> <?php echo htmlspecialchars($especialista['registro']); ?></p>
    <?php else: ?>
        <p>Especialista não encontrado.</p>
    <?php endif; ?>

    <div class="box1" style="padding-top:150px; padding-bottom: 15px;">             
        <a class="btn btn-dark" href="lista_especialistas.php" role="button" style="background-color: #524b4a">VOLTAR</a>
    </div>  
</body>
</html>

<?php include('layout/footer.php'); ?>

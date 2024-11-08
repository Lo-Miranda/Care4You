<?php 
session_start();
include('layout/header.php');
include_once('../model/dbcon.php'); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ../view/login_prestador.php");
    exit;
}

// Busca as informações do prestador logaodo:
$user_id = $_SESSION['user_id'];
$sql = "SELECT nome, especialidade, email, registro FROM prestador WHERE id='$user_id'";
$result = $connection->query($sql);

if (!$result) {    
    die("Erro na consulta: " . $connection->error);
}

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Erro ao recuperar informações do perfil.";
}
?>

<div class="container_editar_perfil_prestador">
    <h4 style="margin-bottom: 10px;">Editar Perfil do Médico</h4>
    <form action="../controller/atualizar_perfil_prestador.php" method="POST">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <div class="form-group_ed_perf_prest">
            <label for="nome" class="label_ed_perf_prest">Nome:</label>
            <input type="text" name="nome" class="form-control_ed_perf_prest" value="<?php echo htmlspecialchars($user['nome']); ?>" required>
        </div>
        <div class="form-group_ed_perf_prest">
            <label for="especialidade" class="label_ed_perf_prest">Especialidade:</label>
            <input type="text" name="especialidade" class="form-control_ed_perf_prest" value="<?php echo htmlspecialchars($user['especialidade']); ?>" required>
        </div>
        <div class="form-group_ed_perf_prest">
            <label for="email" class="label_ed_perf_prest">Email:</label>
            <input type="email" name="email" class="form-control_ed_perf_prest" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        </div>
        <div class="form-group_ed_perf_prest">
            <label for="registro" class="label_ed_perf_prest">Número de Registro:</label>
            <input type="text" name="registro" class="form-control_ed_perf_prest" value="<?php echo htmlspecialchars($user['registro']); ?>" required>
        </div>
        <button type="submit" class="btn btn-dark">Atualizar</button>
        <a href="perfil_medico.php" class="btn btn-secondary" >Cancelar</a>
    </form>
</div>



<?php 
$connection->close(); 
?>

<?php include('layout/footer.php'); ?>

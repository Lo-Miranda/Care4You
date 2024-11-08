<?php 
session_start();
include('layout/header.php');
include_once('../model/dbcon.php'); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login_prestador.php");
    exit;
}
//Busca infos do prestador:
$user_id = $_SESSION['user_id'];
$sql = "SELECT nome, especialidade, email, registro FROM prestador WHERE id='$user_id'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Erro ao recuperar informações do perfil.";
}

?>

<div class="container" style="padding-bottom: 150px;">
    <h2>Perfil do Médico</h2>
    <p><strong>Nome:</strong> <?php echo htmlspecialchars($user['nome']); ?></p>
    <p><strong>Especialidade:</strong> <?php echo htmlspecialchars($user['especialidade']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Número de Registro:</strong> <?php echo htmlspecialchars($user['registro']); ?></p>
    
</div>
<div style="margin-top: 20px;" >
        <a class="btn btn-perfil-medico" href="editar_perfil_prestador.php">Editar Perfil</a>
        <a class="btn btn-voltar-perfil" href="page_inicial_prestador.php">Voltar</a>
    </div>

<?php 
$connection->close(); 
?>

<?php include('layout/footer.php'); ?>

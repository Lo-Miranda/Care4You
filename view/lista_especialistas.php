<?php include('layout/header.php'); ?>
<?php include_once('../model/dbcon.php'); ?>

<?php
include '../controller/get_data_lista_especialista.php';

$especialistas_por_pagina = 4;
$página_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$offset = ($página_atual - 1) * $especialistas_por_pagina;

$total_query = "SELECT COUNT(*) AS total FROM prestador";
$total_result = mysqli_query($connection, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_especialistas = $total_row['total'];

$query = "SELECT id, nome, nota FROM prestador LIMIT $especialistas_por_pagina OFFSET $offset";
$result = mysqli_query($connection, $query);
$especialistas = mysqli_fetch_all($result, MYSQLI_ASSOC);

$total_paginas = ceil($total_especialistas / $especialistas_por_pagina);
?>

<style>
    
    .buttonListEspec {
        display: inline-block;
        padding: 3px 8px;
        margin: 5px;
        border: 2px solid #ccc; 
        border-radius: 5px;
        background-color: transparent; 
        color: #333; 
        text-decoration: none; 
        font-weight: bold;
        font-size: 14px; 
    }
    
    .tableListEspec {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    .pagination {
        text-align: center;
        padding: 10px;
    }
    .pagination a {
        margin: 0 5px;
        text-decoration: none;
        color: grey;
        font-size: 16px;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .pagination a.active {
        background-color: #524b4a;
        color: white;
    }
</style>

<h4>Especialistas cadastrados:</h4>
<table class="tableListEspec">
    <thead>
        <tr>
            <th style="text-align: left;padding: 8px;">Nome</th>
            <th style="text-align: left;padding: 8px;">Nota</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($especialistas) > 0): ?>
            <?php foreach ($especialistas as $especialista): ?>
                <tr>
                    <td style="text-align: left;padding: 8px;">
                        <a class="buttonListEspec" href="informacoes_especialistas.php?id=<?php echo $especialista['id']; ?>">
                            <?php echo htmlspecialchars($especialista['nome']); ?>
                        </a>
                    </td>
                    <td style="text-align: left;padding: 8px;">
                        <span class="buttonListEspec"><?php echo htmlspecialchars($especialista['nota']); ?></span>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="2">Nenhum especialista encontrado.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>


<div class="pagination" style="text-align: center; ">
    <?php if ($página_atual > 1): ?>
        <a href="?pagina=<?php echo $página_atual - 1; ?>" class="btn btn-light">Anterior</a>
    <?php endif; ?>
    
    <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <a href="?pagina=<?php echo $i; ?>" class="btn btn-light <?php echo $i == $página_atual ? 'active' : ''; ?>"><?php echo $i; ?></a>
    <?php endfor; ?>
    
    <?php if ($página_atual < $total_paginas): ?>
        <a href="?pagina=<?php echo $página_atual + 1; ?>" class="btn btn-light">Próximo</a>
    <?php endif; ?>
</div>

<div class="box1" style="padding-top:20px; padding-bottom: px;">             
    <a class="btn btn-dark" href="page_inicial.php" role="button" style="background-color: #524b4a">VOLTAR</a>
</div>  

<?php include('layout/footer.php'); ?>

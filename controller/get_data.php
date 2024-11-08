<?php
include_once('../model/dbcon.php'); 

$especialidades_por_pagina = 4;

$pagina_atual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$pagina_atual = max($pagina_atual, 1);

$offset = ($pagina_atual - 1) * $especialidades_por_pagina;

$query_total = "SELECT COUNT(*) as total FROM `especialidade`";
$result_total = mysqli_query($connection, $query_total);
$row_total = mysqli_fetch_assoc($result_total);
$total_especialidades = $row_total['total'];

$query = "SELECT * FROM `especialidade` LIMIT $especialidades_por_pagina OFFSET $offset";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($connection));
} else {    
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td>
                <a href="especialista.php?idEspecialidade=<?php echo $row['id']; ?>" class="btn" 
                style="margin-bottom: 10px; font-weight: bold; border-radius: 3px; width: 100%; max-width: 400px; height: 40px; 
                background-color: transparent; color: #333; border: 2px solid #ccc; display: inline-block; text-align: center;">
                    <?php echo htmlspecialchars($row['Nome']); ?>
                </a>
            </td>
        </tr>
        <?php
    }
}


$total_paginas = ceil($total_especialidades / $especialidades_por_pagina);
?>

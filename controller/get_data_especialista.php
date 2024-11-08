<?php
include_once('../model/dbcon.php');

if (isset($_GET['idEspecialidade']) && is_numeric($_GET['idEspecialidade'])) {
    $idEspecialidade = (int)$_GET['idEspecialidade']; 
    
    $query = "SELECT * FROM especialista WHERE especialidade_id = $idEspecialidade"; 
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        if (mysqli_num_rows($result) == 0) {
            echo "<p style='color: red;'>Não há profissionais disponíveis para esta especialidade.</p>";
        } else {            
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="especialista-card" style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; background-color: #f9f9f9;">
                    <span class="especialista-nome" style="font-weight: bold; font-size: 16px;" onclick="escolherEspecialista(<?php echo $row['id']; ?>)">
                        <?php echo htmlspecialchars($row['NomeProfissional']); ?>
                    </span>
                    <br>
                    <span class="especialista-nota" style="font-size: 14px; color: #777;" onclick="escolherEspecialista(<?php echo $row['id']; ?>)">
                        Nota: <?php echo htmlspecialchars($row['Nota']); ?>
                    </span>
                </div>
                <br>
                <?php
            }
        }
    }
} else {
    echo "<p style='color: red;'>Especialidade não especificada.</p>";
}
?>

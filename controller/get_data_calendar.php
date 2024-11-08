<?php include_once('../model/dbcon.php'); ?>

<style>
    .text-center {
        text-align: center; 
    }
</style>

<?php
$query = "SELECT * FROM `calendario`";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td class="text-center">
               
                <span class="expandable" onclick="enviarFormulario(<?php echo $row['id']; ?>)">
                    <?php echo date('d/m/Y', strtotime($row['dia'])); ?> 
                </span>
            </td>
        </tr>
        <?php
    }
}                
?>

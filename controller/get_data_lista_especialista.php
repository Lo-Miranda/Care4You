<?php

function getEspecialistas($connection) {
    $query = "SELECT id, nome, nota FROM prestador";
    $result = mysqli_query($connection, $query);

    $especialistas = [];
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $especialistas[] = $row;
        }
    }

    return $especialistas;
}

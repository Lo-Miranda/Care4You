<?php
header('Content-Type: application/json');

$consultas = [
    ["paciente" => "Josenildo Silva Carvalho", "data" => "2024-11-05"],
    ["paciente" => "Maria Santana Zattini ", "data" => "2024-11-12"],
    ["paciente" => "Carlos Eduardo Senna", "data" => "2024-11-15"],
    
];
echo json_encode($consultas);
?>

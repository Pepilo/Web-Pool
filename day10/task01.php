<?php
    header('Content-Type: application/json');

    if (isset($_GET['nom'])) {
        $name = $_GET['nom'];
        $response = ['name' => $name];        
        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Paramètre "name" manquant']);
    }
?>
<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $anio = $_POST['anio'];
    $artista = $_POST['artista'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO items (titulo, anio, artista, genero, descripcion)
            VALUES ('$titulo', '$anio', '$artista', '$genero', '$descripcion')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Ítem añadido correctamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

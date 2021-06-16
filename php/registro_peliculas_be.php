<?php

include "conexion_be.php";

//archivo que va almacenar los datos en la base de datos.
$nombre = $_POST['nombre'];
$ano = $_POST['ano'];
$director = $_POST['director'];
$genero = $_POST['genero'];

$query = "INSERT INTO peliculas(nombre, ano, director, genero) 
        VALUES ('$nombre', '$ano', '$director', '$genero')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo ' 
    <script>
        alert("Pelicula almacenada exitosamente");
        window.location = "../index.php";
    </script>
    ';
} else {
    echo ' 
    <script>
        alert("Inténtelo de nuevo, pelicula no almacenada ");
        window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

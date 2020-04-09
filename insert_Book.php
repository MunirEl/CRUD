<?php
include('vendor/autoload.php');
?>

<html>
    <body>
    <h2>Insertar Registro</h2>
    <form action="insertBridge.php" method="POST">  
    <label for="idBook">idBook:</label><br>
    <input type="text" name="idBook" value=""><br><br>
    <label for="nombre">Nombre del libro:</label><br>
    <input type="text" name="nombre" value=""><br><br>
    <label for="genero">Genero:</label><br>
    <input type="text" name="genero" value=""><br><br>
    <label for="puntuacion">Puntuacion:</label><br>
    <input type="text" name="puntuacion" value=""><br><br>
    <label for="ventas">Ventas:</label><br>
    <input type="text" name="ventas" value=""><br><br>
    <label for="fecha">Fecha:</label><br>
    <input type="text" name="fecha" value=""><br><br>
    <input type="submit" value="insertar">
    </form> 
    </body>
</html>
<?php
include('vendor/autoload.php');
use App\Controller;


$idBook = $_POST['idBook'];
$Nombre = $_POST['nombre'];
$Genero = $_POST['genero'];
$Puntuacion = $_POST['puntuacion'];
$Ventas = $_POST['ventas'];
$Fecha = $_POST['fecha'];

$controller = new Controller();

$addRow = $controller->insert_Row($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha);

//return $addRow;
?>

<html>
<body>
    <?php
    if($addRow)
    {
        echo "Libro registrado en la tabla"."<br>"."<br>";
    }
    ?>
    <a href="index.php"><input type="button" value="Volver"></a>
</body>
</html>
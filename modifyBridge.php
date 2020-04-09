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

$Modify = $controller->Modify_Row($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha);

//return $ModifyRow;

?>

<html>
<body>
    <?php
    if($Modify)
    {
        echo "Tabla actualizada con éxito"."<br>"."<br>";
    }
        
    ?>
    <a href="index.php"><input type="button" value="Volver"></a>
</body>
</html>
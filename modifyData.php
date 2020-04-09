<?php
include('vendor/autoload.php');
use App\Controller;

$controller = new Controller();
$datos = array ();
$conn = $controller->connect();
$id_Book = $_GET['idBook'];
$sql = "SELECT * FROM MyBooks WHERE idBook = '$id_Book'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
             {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $datos [] = $row;

                }
            }

?>

<html>
<body>

    <?php 
    foreach($datos as $data)
    {

    ?>
    <h2>Modificar Registro de libros</h2>
    <form action="modifyBridge.php" method="POST">  
    <label for="idBook">idBook:</label><br>
    <input type="text" name="idBook" value="<?php echo $data['idBook']?>"><br><br>
    <label for="nombre">Nombre del libro:</label><br>
    <input type="text" name="nombre" value="<?php echo $data['Nombre']?>"><br><br>
    <label for="genero">Genero:</label><br>
    <input type="text" name="genero" value="<?php echo $data['Genero']?>"><br><br>
    <label for="puntuacion">Puntuacion:</label><br>
    <input type="text" name="puntuacion" value="<?php echo $data['Puntuacion']?>"><br><br>
    <label for="ventas">Ventas:</label><br>
    <input type="text" name="ventas" value="<?php echo $data['Ventas']?>"><br><br>
    <label for="fecha">Fecha:</label><br>
    <input type="text" name="fecha" value="<?php echo $data['Fecha']?>"><br><br>
    <input type="submit" value="Actualizar">
    </form>
    <?php
        }
    ?>
    </form>
</body>
</html>

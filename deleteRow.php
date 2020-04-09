<?php
include('vendor/autoload.php');
use App\Controller;


$controller = new Controller();

$idBook = $_GET['idBook'];

$delete = $controller->Delete_Book($idBook);

//echo $idBook;
//return $delete;
?>

<html>
<body>
    <?php
    if($delete)
    {
        echo "Registro borrado con éxito"."<br>"."<br>";
    }
        
    ?>
    <a href="index.php"><input type="button" value="Volver"></a>
</body>
</html>

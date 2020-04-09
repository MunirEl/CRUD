<?php
include('vendor/autoload.php');
use App\Controller;


$controller = new Controller();

$result = $controller->Create_Table();

?>

<html>
<body>
    <?php
        echo $result."<br>"."<br>";
        
    ?>
    <a href="index.php"><input type="button" value="Volver"></a>
</body>
</html>

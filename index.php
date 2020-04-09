<?php
include('vendor/autoload.php');
use App\Controller;


$controller = new Controller();

$LeerTabla = $controller->Read_Table();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>


<h1>Biblioteca</h1>
<table>

    <tr>
        <td>idBook</td>
        <td>Nombre</td>
        <td>Genero</td>
        <td>Puntuacion</td>
        <td>Ventas</td>
        <td>Fechas</td>

    </tr>
    <?php 
        if($LeerTabla !=0)
        {
            
            foreach($LeerTabla as $data)
            {
        
        

    ?>
    
    <tr>
    <td><?php echo $data['idBook']?></td>
    <td><?php echo $data['Nombre']?></td>
    <td><?php echo $data['Genero']?></td>
    <td><?php echo $data['Puntuacion']?></td>
    <td><?php echo $data['Ventas']?></td>
    <td><?php echo $data['Fecha']?></td>
    <td><a href="modifyData.php?idBook=<?php echo $data['idBook'];?>"><input type="submit" value="Modificar Registro"></a><br></td>
    <td><a href="deleteRow.php?idBook=<?php echo $data['idBook'];?>"><input type="submit" value="Borrar Registro"></a><br></td>

    <td><br></td>
    </td>
    </tr>
    <?php
            }
        } 
        
    ?>
</table><br><br>
<a href="create_Table.php"><input type="button" value="Crear Registro"></a>
<a href="insert_Book.php"><input type="button" value="Insertar Libro"></a>
</body>
</html>
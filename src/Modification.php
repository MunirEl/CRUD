<?php
namespace App;

final class Modification
{
    public function modify($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {   

        $sql = "UPDATE MyBooks SET idBook = '$idBook', Nombre = '$Nombre', Genero = '$Genero', Puntuacion ='$Puntuacion', Ventas = '$Ventas', Fecha = '$Fecha' WHERE idBook = '$idBook'";
          
        return $sql;
    }
    public function executeModification ($conn, $idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {
        $query = $this->modify($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha);
        $modify = mysqli_query($conn, $query);

        return $modify;
        mysqli_close($conn);
    }

}

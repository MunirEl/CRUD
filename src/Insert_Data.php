<?php
namespace App;

final class Insert_Data
{
    public function insert($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {   

        $sql = "INSERT INTO MyBooks VALUES ('$idBook', '$Nombre', '$Genero', '$Puntuacion', '$Ventas', '$Fecha')";
            
        return $sql;

        //mysqli_close($conn);
    }
    public function executeInsertion ($conn, $idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {
        $query = $this->insert($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha);
        $result = mysqli_query($conn, $query);
        return $result;
    }
}
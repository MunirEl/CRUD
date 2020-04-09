<?php
namespace App;

final class Connection {
    public function linking ($servidor, $usuario, $password, $basededatos){
    
        $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);
        if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if($conexion)
        {    
            return $conexion;
        }
        //mysqli_close($conexion);
    }   
}

<?php
namespace App;

final class Create
{
    public function Create_table($conn)
    {
        if( mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE 'MyBooks' ")) == 1 )
        {
            
            return "Table MyBooks is already created";  
        }
            $sql = "CREATE TABLE MyBooks (
                idBook INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Nombre VARCHAR(30) NOT NULL,
                Genero VARCHAR(30) NOT NULL,
                Puntuacion FLOAT(6),
                Ventas INT(6),
                Fecha INT(6))";
                $query = mysqli_query($conn, $sql);
                        
                if ($query) 
                    {
                    
                     return "Table MyBooks created successfully";
                    }  
            }

    
}
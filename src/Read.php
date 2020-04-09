<?php
namespace App;

final class Read {
    public function query_All ($conn){
    
        if(mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE 'MyBooks' ")) == 1)
        {   
            $result = mysqli_query($conn, "SELECT * FROM MyBooks");
            $datos = array();
            if (mysqli_num_rows($result) > 0)
             {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    $datos [] = $row;

                }
            } 
            return $datos;
        }
        return 0;
        mysqli_close($conn);
    }   

}

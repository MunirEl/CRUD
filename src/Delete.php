<?php
namespace App;

final class Delete
{
    public function deleteBook($idBook)
    {   
        $sql = "DELETE FROM MyBooks WHERE idBook = '$idBook'";
        
            
        return $sql;

        //mysqli_close($conn);
    }
    public function executeDelete ($conn, $idBook)
    {
        $query = $this->deleteBook($idBook);
        $query = "DELETE FROM MyBooks WHERE idBook = '$idBook'";
        $delete = mysqli_query($conn, $query);

        return $delete;

        mysqli_close($conn);
    }
}
<?php
namespace App;
use App\Connecton;
use App\Books;
use App\Create;
use App\Read;
use App\Insert_Data;
use App\Modification;
use App\Delete;


final class Controller{

    public function connect()
    {
        $usuario = "root";
        $password = "";
        $servidor = "127.0.0.1";
        $basededatos = "Books";
        $connect= new Connection();
        $Connection= $connect->linking($servidor, $usuario, $password, $basededatos);
        return $Connection;
    }
    public function Create_Table()
    {
        $conn = $this->connect();
        $create = new Create();
        $table_Creation = $create->Create_table($conn);
        return $table_Creation;
    }
    public function Read_Table ()
    {
        $conn = $this->connect();
        $read = new Read();
        $table_Read = $read->query_All($conn);
        return $table_Read;
    }
    public function insert_Row ($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {
        $conn = $this->connect();
        $sending = new Insert_Data();

        $insert = $sending->executeInsertion($conn, $idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha); 
        
        return $insert;   
    }
    public function Modify_Row($idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha)
    {
        $conn = $this->connect();
        $update = new Modification();
        $modify_Desc = $update->executeModification($conn, $idBook, $Nombre, $Genero, $Puntuacion, $Ventas, $Fecha);

        return $modify_Desc; 
    }
    public function Delete_Book ($idBook)
    {
        $conn = $this->connect();
        $delete = new Delete();
        $del = $delete->executeDelete ($conn, $idBook);
        

        return $del;
    }
}




<?php
namespace App;

final class Books{
    private $idBook;
    private $Nombre;
    private $Genero;
    private $Puntuacion;
    private $Ventas;
    private $Fecha;

    public function __construct(int $idBook= 0, $Nombre="anonimo", $Genero ="anonimo", float $Puntuacion=0, int $Ventas = 0, int $Fecha = 0){
        $this->idBook = $idBook;
        $this->Name   = $Nombre;
        $this->Gender = $Genero;
        $this->Rating = $Puntuacion;
        $this->Sales  = $Ventas;
        $this->Sales  = $Fecha;
      }
    function get_idBook() 
        {
        return $this->idBook;
        }
    function get_Nombre() 
        {
        return $this->Nombre;
        }
    function get_Genero() 
       {
        return $this->Genero;
       }
    public function get_Puntuacion() 
       {
        return $this->Puntuacion;
       }
    public function get_Ventas() 
    {
        return $this->Ventas;
    }
    public function get_Fecha() 
    {
        return $this->Fecha;
    }
}

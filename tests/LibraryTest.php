<?php
use PHPUnit\Framework\TestCase;
use App\Connection;
use App\Controller;
use App\Create;
use App\Insert_Data;
use App\Modification;
use App\Delete;


final class LibraryTest extends TestCase
{
    public function testconect()
    {
        $connection = new Controller ();
        $result = $connection-> connect();

        //$this->assertSame('connected', $conectar);
        $this->assertTrue(true);
    }
   public function test_Creation_Table()
   {    
       $Expected = "created";

       $createTable = new Controller ();
       $result = $createTable-> Create_Table();

       $this->assertStringContainsString($Expected, $result);
   }

   public function test_inserting_Row()
   {    
        $insertRow = new Insert_Data ();
        $result = $insertRow -> insert('5', 'Davinci Code', 'Suspense', '7.5', '1565', '2006');
        $expected_query = "INSERT INTO MyBooks VALUES ('5', 'Davinci Code', 'Suspense', '7.5', '1565', '2006')";
        
        $this->assertIsString($result);
        $this->assertSame($expected_query, $result);
   }

   public function test_updating_Row()
   {    
        $mod_Row = new Modification ();
        $result = $mod_Row -> modify('5', 'Davinci Code', 'Suspense', '7.5', '1565', '2006');
        $expected_query = "UPDATE MyBooks SET idBook = '5', Nombre = 'Davinci Code', Genero = 'Suspense', Puntuacion ='7.5', Ventas = '1565', Fecha = '2006' WHERE idBook = '5'";
        
        $this->assertIsString($result);
        $this->assertSame($expected_query, $result);
   }

   public function test_deleting_Row()
   {    
        $del_Row = new Delete ();
        $result = $del_Row -> deleteBook('5');
        $expected_query = "DELETE FROM MyBooks WHERE idBook = '5'";
        
        $this->assertIsString($result);
        $this->assertSame($expected_query, $result);
   }
}

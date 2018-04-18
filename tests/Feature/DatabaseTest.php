<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testEmpresa()
    {

        $this->assertDatabaseHas('Empresa', ['Nombre' => 'XTravels']);
        $this->assertDatabaseHas('Empresa', ['Direccion' => 'Calle La Huerta']);
        $this->assertDatabaseHas('Empresa', ['Email' => 'info@atlantis.com']);
    }

    public function testOferta(){
        $this->assertDatabaseHas('Oferta', ['precio' => '499']);
        $this->assertDatabaseHas('Oferta', ['Nombre' => 'Vida alegre']);
        $this->assertDatabaseHas('Oferta', ['id' => '003']);



    }

    public function testUsuario(){
        $this->assertDatabaseHas('Usuario', ['Nombre' => 'Laura Martinez Soler']);
        $this->assertDatabaseHas('Usuario', ['DNI' => '6235568Z']);
        $this->assertDatabaseHas('Usuario', ['Telefono' => '66890762']);


    }
}

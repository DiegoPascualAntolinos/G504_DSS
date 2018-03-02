<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Empresa;
use App\Oferta;

class DatabaseTest extends TestCase
{
    /**
     * 
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

    }

    public function testUsuario(){
        $this->assertDatabaseHas('Usuario', ['Nombre' => 'Laura Martinez Soler']);

    }
}

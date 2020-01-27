<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Model\Portfolio as PortfolioModel;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabasePortfolio(){

        $this->assertDatabaseHas('portfolio', [
            'titulo' => 'Portfólio 1'
        ]);
    }

    public function testDatabaseFerramentas(){

        $this->assertDatabaseHas('ferramentas', [
            'titulo' => 'Ferramentas 1'
        ]);
    }

    public function testDatabaseAplicativos(){

        $this->assertDatabaseHas('aplicativos', [
            'titulo' => 'Aplicativo 1'
        ]);
    }

    public function testDatabaseVideos(){

        $this->assertDatabaseHas('videos', [
            'titulo' => 'Video 1'
        ]);
    }

    public function testDatabaseBlog(){

        $this->assertDatabaseHas('blog', [
            'titulo' => 'Blog 1'
        ]);
        $resultado =  PortfolioModel::listar();
        $users = PortfolioModel::select("id", "titulo", "categoria","tipo","ano","imagem","banco_dados", "descricao", "link")->orderBy("id", "asc")->get();
        $this->assertEquals($resultado, $users);

    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testContato()
    {
        $response = $this->get('/contato');
        $response->assertStatus(200);
    }

    public function testVideos()
    {
        $response = $this->get('/videos');
        $response->assertStatus(200);
    }

    public function testPortfolio()
    {
        $response = $this->get('/portfolio');
        $response->assertStatus(200);
    }

    public function testFerramentas()
    {
        $response = $this->get('/ferramentas');
        $response->assertStatus(200);
    }
    public function testAplicativos()
    {
        $response = $this->get('/aplicativos');
        $response->assertStatus(200);
    }
    public function testBlog()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }

}

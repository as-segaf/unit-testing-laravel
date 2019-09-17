<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SimpleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $this->assertTrue(true);
    }

    /**
     * 
     * 
     *  display login form view
     */
    public function testLoginRoute()
    {
        $response = $this->get(route('login'));

        $response->assertViewIs('login');
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory('App\User')->create();
        $response = $this->actingAs($user)->get('/home');

        $response->assertStatus(200)
        ->assertSeeText('You are logged in');
    }

    public function testLoggeOut()
    {
        $response = $this->get('/home');

        $response->assertStatus(302)
        ->assertRedirect('/login');
    }
}


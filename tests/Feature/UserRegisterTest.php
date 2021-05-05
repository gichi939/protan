<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        $email = 'email@example.com';
        $this->post(route('register'), [
            'name' => 'user',
            'email' => $email,
            'password' => 'password',
            'password_confirmation' => 'password'
        ])
            ->assertStatus(302);
        $this->assertDatabaseHas('users', ['email' => $email]);
    }
}

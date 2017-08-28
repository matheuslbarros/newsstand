<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class LoginControllerTest extends TestCase
{
    
    protected function setUp()
    {
        parent::setUp();
        $this->createUser();
    }

    public function testLoginSuccess()
    {
        User::create([
            'name' => $this->user->name,
            'email' => $this->user->email,
            'password' => bcrypt($this->user->password),
            'confirmed' => 1,
        ]);
        
        $response = $this->post('/login', [
            'email' => $this->user->email,
            'password' => $this->user->password,
        ]);
        
        $this->seeIsAuthenticated();
        $response->assertRedirect('/admin');
    }

    public function testLoginShouldThrowCreadentialsDoNotMatch()
    {
        $response = $this->post('/login', [
            'email' => $this->faker->email,
            'password' => $this->faker->password,
        ]);
        
        $response->assertRedirect();
        $response->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
    }

}

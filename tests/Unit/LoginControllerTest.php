<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class LoginControllerTest extends TestCase
{
    
    public function testLoginSuccess()
    {
        $this->createUser();
        
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

}

<?php

namespace Tests\Unit;

use Tests\TestCase;

class RegisterController extends TestCase
{

    public function testRegisterSuccess()
    {
        $this->createUser();
        
        $response = $this->post('/register', [
            'name' => $this->user->name,
            'email' => $this->user->email,
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => $this->user->email,
        ]);
        
        $response->assertRedirect('/login');
    }

}

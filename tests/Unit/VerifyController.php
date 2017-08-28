<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class VerifyController extends TestCase
{
    
    public function testVerifySuccess()
    {
        $this->createUser();
        
        User::create([
            'name' => $this->user->name,
            'email' => $this->user->email,
            'confirmation_code' => $this->user->confirmation_code,
        ]);
        
        $response = $this->post('/verify/' . $this->user->confirmation_code, [
            'password' => $this->user->password,
            'password_confirmation' => $this->user->password,
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => $this->user->email,
            'confirmed' => 1,
        ]);
        
        $response->assertRedirect('/login');
    }

}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class RegisterControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->createUser();
    }

    public function testRegisterSuccess()
    {
        $response = $this->post('/register', [
            'name' => $this->user->name,
            'email' => $this->user->email,
        ]);
        
        $this->assertDatabaseHas('users', [
            'email' => $this->user->email,
        ]);
        
        $response->assertRedirect('/login');
        $response->assertSessionHas('status', 'Thanks for signing up! Please check your email.');
    }

    public function testRegisterShouldThrowEmailHasAlreadyBeenTaken()
    {
        $user = User::first();
        
        $response = $this->post('/register', [
            'name' => $user->name,
            'email' => $user->email,
        ]);
        
        $response->assertRedirect();
        $response->assertSessionHasErrors(['email' => 'The email has already been taken.']);
    }

}

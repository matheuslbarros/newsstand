<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class VerifyControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        $this->createUser();
    }

    public function testVerifySuccess()
    {
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
        $response->assertSessionHas('status', 'You have successfully verified your account.');
    }

    public function testVerifyShouldThrowInvalidConfirmationCode()
    {
        $response = $this->post('/verify/' . $this->faker->md5, [
            'password' => $this->user->password,
            'password_confirmation' => $this->user->password,
        ]);
        
        $response->assertRedirect();
        $response->assertSessionHasErrors(['confirmation_code' => 'Invalid confirmation code']);
    }

}

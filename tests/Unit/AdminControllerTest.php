<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;

class AdminControllerTest extends TestCase
{

    public function testIndexSucess()
    {
        $this->be(User::first());
        
        $response = $this->get('/admin');
        $response->assertSuccessful();
        $response->assertSeeText('You are logged in!');
    }

    public function testIndexShouldRedirectToLoginCauseNotAuthenticated()
    {
        $response = $this->get('/admin');
        $response->assertRedirect('/login');
    }

}

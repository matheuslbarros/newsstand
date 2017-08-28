<?php

namespace Tests;

use App\User;
use Faker\Factory as Faker;

trait CreatesUser
{

    /**
     * @var Faker
     */
    private $faker;

    /**
     * @var User
     */
    private $user;

    public function createUser() {
        $this->faker = Faker::create();
        
        $this->user = new User();
        $this->user->name = $this->faker->name;
        $this->user->email = $this->faker->email;
        $this->user->password = $this->faker->password;
        $this->user->confirmation_code = $this->faker->md5;
    }

}

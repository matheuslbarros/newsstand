<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;
use App\User;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        $user = User::firstOrFail();
        
        foreach(range(0, 12) as $i) {
            $image = $faker->image(public_path('images/articles'), 800, 600);
            
            Article::create([
                'title' => $faker->sentence(6),
                'body' => $faker->paragraphs(4, true),
                'publish_date' => $faker->dateTime(),
                'photo' => basename($image),
                'user_id' => $user->id,
            ]);
        }
    }
}

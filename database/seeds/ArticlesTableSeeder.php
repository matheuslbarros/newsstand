<?php

use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Faker\Factory as Faker;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::attempt(['email' => 'admin@newsstand.com', 'password' => 'password']);
        
        $faker = Faker::create();
        
        foreach(range(0, 20) as $i) {
            $image = $faker->image(public_path('images'), 800, 600);
            
            Article::create([
                'title' => $faker->sentence(6),
                'body' => $faker->paragraphs(4, true),
                'publish_date' => $faker->dateTime(),
                'photo' => new UploadedFile($image, basename($image), null, null, null, true),
            ]);
        }
    }
}

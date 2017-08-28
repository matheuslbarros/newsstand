<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\User;
use App\Article;
use Faker\Factory;

class ArticleControllerTest extends TestCase
{

    /**
     * @var Factory
     */
    private $faker;
    
    /**
     * @var User
     */
    private $user;
    
    protected function setUp() {
        parent::setUp();
        $this->faker = Factory::create();
        $this->user = User::first();
        $this->be($this->user);
    }

    public function testIndex()
    {
        $response = $this->get('/admin/articles');
        $response->assertSuccessful();
        $response->assertViewHas('articles');
    }

    public function testCreate()
    {
        $response = $this->get('/admin/articles/create');
        $response->assertSuccessful();
        $response->assertViewHas('article');
    }
    
    public function testStore()
    {
        $image = $this->faker->image(null, 800, 600);
        
        $response = $this->post('/admin/articles/store', [
            'title' => $this->faker->sentence(6),
            'body' => $this->faker->paragraphs(4, true),
            'publish_date' => $this->faker->dateTime(),
            'photo' => new UploadedFile($image, basename($image), null, null, null, true),
        ]);
        
        $response->assertRedirect('/admin/articles');
    }
    
    public function testShow()
    {
        $article = Article::firstOrFail();
        $response = $this->get('/admin/articles/' . $article->id . '/show');
        $response->assertSuccessful();
        $response->assertViewHas('article');
    }
    
    public function testDelete()
    {
        $article = Article::firstOrFail();
        $response = $this->get('/admin/articles/' . $article->id . '/destroy');
        $response->assertRedirect('/admin/articles');
    }

}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use App\User;
use App\Article;
use Faker\Factory;

class ArticleControllerTest extends TestCase
{

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
    
    public function testStoreShouldThrowRequiredFields()
    {
        $response = $this->post('/admin/articles/store', []);
        
        $response->assertRedirect();
        $response->assertSessionHasErrors([
            'title' => 'The title field is required.',
            'body' => 'The body field is required.',
            'publish_date' => 'The publish date field is required.',
            'photo' => 'The photo field is required.',
        ]);
    }
    
    public function testShow()
    {
        $article = Article::firstOrFail();
        $response = $this->get('/admin/articles/' . $article->id . '/show');
        $response->assertSuccessful();
        $response->assertViewHas('article');
    }
    
    public function testShowShouldThrowNotFound()
    {
        $response = $this->get('/admin/articles/' . 0 . '/show');
        $response->assertStatus(404);
    }

    public function testDelete()
    {
        $article = Article::firstOrFail();
        $response = $this->get('/admin/articles/' . $article->id . '/destroy');
        $response->assertRedirect('/admin/articles');
    }
    
    public function testDeleteShouldThrowNotFound()
    {
        $response = $this->get('/admin/articles/' . 0 . '/destroy');
        $response->assertStatus(404);
    }

}

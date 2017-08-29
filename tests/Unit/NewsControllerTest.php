<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Article;

class NewsControllerTest extends TestCase
{

    public function testShowArticleSuccess()
    {
        $article = Article::first();
        
        $response = $this->get('/news/' . $article->id);
        $response->assertSuccessful();
        $response->assertSeeText($article->title);
    }

    public function testDownloadArticleSuccess()
    {
        $article = Article::first();
        
        $response = $this->get('/news/' . $article->id . '/download');
        $response->assertSuccessful();
        $response->assertHeader('Content-type', 'application/pdf');
    }

}

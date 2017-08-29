<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomeControllerTest extends TestCase
{

    public function testIndexSucess()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $response->assertSeeText('Latest 10 news highlights');
    }

    public function testRssSuccess()
    {
        $response = $this->get('/rss');
        $response->assertSuccessful();
        $response->assertHeader('Content-type', 'text/xml; charset=UTF-8');
        $response->assertSee('<rss');
        $response->assertSee('<channel>');
        $response->assertSee('<title>');
        $response->assertSee('</channel>');
        $response->assertSee('</rss>');
    }

}

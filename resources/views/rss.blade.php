<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">
    <channel>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link>{{ Request::root() }}</link>
        @foreach ($articles as $article)
            <item>
                <title>{{ $article->title }}</title>
                <link>{{ Request::root() }}/article/{{ $article->id }}</link>
                <description>{{ Str::words($article->body, 255) }}</description>
                <pubDate>{{ (new Datetime($article->publish_date))->format(DateTime::RFC822) }}</pubDate>
                <author>{{ $article->user->name }}</author>
                <image>
                    <url>{{ Request::root() }}/images/articles/{{ $article->photo }}</url>
                </image>
            </item>
        @endforeach
    </channel>
</rss>
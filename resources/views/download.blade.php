<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{{ $article->title }} - Newsstand</title>
    </head>
    <body>
        <article>
            <h1>{{ $article->title }}</h1>

            <div>
                <strong>By</strong>
                <span>{{ $article->user->name }}</span>
            </div>

            <div>
                <strong>Publish date</strong>
                <time datetime="{{ (new Datetime($article->publish_date))->format(DateTime::ATOM) }}">{{ $article->publish_date }}</time>
            </div>

            @if ($article->photo)
                <figure>
                    <img src="images/articles/{{ $article->photo }}" style="max-width: 100%; height: auto" />
                </figure>
            @endif
            
            <div class="content">
                <p>{!! nl2br(e($article->body)) !!}</p>
            </div>
        </article>
    </body>
</html>
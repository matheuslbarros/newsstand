@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <article>
                        <header>
                            <h1>{{ $article->title }}</h1>
                        </header>
                        
                        <div class="small">
                            <strong>By</strong>
                            <span>{{ $article->user->name }}</span>
                        </div>
                        
                        <div class="small">
                            <strong>Publish date</strong>
                            <time datetime="{{ (new Datetime($article->publish_date))->format(DateTime::ATOM) }}">{{ $article->publish_date }}</time>
                        </div>
                        
                        @if ($article->photo)
                            <figure>
                                <img src="/images/articles/{{ $article->photo }}" class="img-responsive" />
                            </figure>
                        @endif
                        
                        <div class="content">
                            <p>{!! nl2br(e($article->body)) !!}</p>
                        </div>
                    </article>
                    
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

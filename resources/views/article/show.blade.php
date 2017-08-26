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
                        @if ($article->photo)
                            <figure>
                                <img src="/images/articles/{{ $article->photo }}" class="img-responsive" />
                            </figure>
                        @endif
                        <div>
                            <p>{!! nl2br(e($article->body)) !!}</p>
                        </div>
                    </article>
                    
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                    <a href="/admin/articles/{{ $article->id }}/destroy" class="btn btn-default" onclick="return confirm('Are you sure you want to remove?')">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

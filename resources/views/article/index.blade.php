@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My articles</div>
                <div class="panel-body">
                    <ul>
                        @forelse ($articles as $article)
                        <li>
                            <a href="/admin/articles/{{ $article->id }}/show">
                                {{ $article->title }}
                            </a>
                        </li>
                        @empty
                            <li>Nothing here</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

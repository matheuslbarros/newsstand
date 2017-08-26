@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>
                <div class="panel-body">
                    <ul>
                        @forelse ($articles as $article)
                            <li>{{ $article->title }}</li>
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

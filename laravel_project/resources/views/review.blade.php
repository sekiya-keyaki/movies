@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($reviews as $review)
    <div class="card">
        <div class="card-header">{{optional($review)->user->name}}</div>
        <div class="card-body">{{optional($review)->body}}</div>
        @endforeach


        <div id="review" class="card-footer">
            <a href="{{ route('movie.create',['movieId' => $review->movie_id ]) }}">
                レビューを投稿する
            </a>
        </div>
    </div>
</div>
@endsection
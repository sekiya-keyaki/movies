@extends('layouts.app')

@section('content')
<style>
    #review{
    padding: 20px;
    text-align: center;

    }
</style>
<div class="container">
    <div class="card">
        <div class="card-header">{{$review->user->name}}</div>
        <div class="card-body">{{$review->body}}</div>
    <div id="review" class="card-footer">
        <a href="{{ route('movie.create',['movieId' => $review->movie_id ]) }}">
            レビューを投稿する
        </a>
    </div>
    </div>
</div>
@endsection
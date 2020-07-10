@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
<div class="card-header">{{$review->user->name}}</div>
<div class="card-body">{{$review->body}}</div>
</div>
<a href="{{ route('movie.create',['movieId' => $review->movie_id ]) }}">
レビューを投稿する
</a>
@endsection

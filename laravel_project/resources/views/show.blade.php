@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ $show->title }}</div>
        <div class="card-body">
            <img src="{{ '/images/'.$show->image }}" align="left" class="img">
            <h3>作品紹介</h3>
            {{ $show->introduction}}
        </div>
        <br>
        <div id="review" class="card-footer">
            <a href="{{ route('movie.review',['movieId' => $show->id ]) }}">
                レビューを見る
            </a>
        </div>
    </div>

</div>




@endsection
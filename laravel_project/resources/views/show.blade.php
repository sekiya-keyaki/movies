@extends('layouts.app')

@section('content')

<h1>{{ $show->title }}</h1>
<img src="{{ asset('storage/'.$show->image) }}" align="left">
<h2>作品紹介</h2>
{{ $show->introduction}}
<br>
<a href="{{ route('movie.review',['movieId' => $show->id ]) }}">
レビュー一覧
</a>
@endsection
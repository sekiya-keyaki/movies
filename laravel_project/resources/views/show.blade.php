@extends('layouts.app')

@section('content')

<h1>{{ $show->title }}</h1>
<img src="{{ asset('storage/'.$show->image) }}" align="left">
{{ $show->introduction}}
@endsection
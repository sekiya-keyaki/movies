@extends('layouts.app')

@section('content')
{{$review->user->name}}:{{$review->body}}

@endsection
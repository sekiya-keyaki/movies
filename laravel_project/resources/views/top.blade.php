@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="{{ asset('css/top.css')}}">

<div style="text-align: center;width:100%">
  <img src="/images/e1210e3187d3301afcc77b53d2c9291e_t.jpg" class="image_size_m">
</div>

<div class="form-group">
  <form id="form5" action="{{ route('movie.index') }}">
    <input id="sbox5" type="text" name="keyword" value="{{ $keyword }}" placeholder="作品名かキーワードを入力">
    <input id="sbtn5" type="submit" value="検索">
    </form>
  </div>
@endsection

@extends('layouts.app')

@section('content')

<style>
  .image_size_m {
    width: 100%;
    background-blend-mode: lighten;
  }

  .form-inline {
    position: relative;
    margin-bottom: 20px;
  }

  #sbox5 {
    width: 300px;
    outline: 0;
    height: 50px;
    max-width: 300px;
    border-radius: 2px;
    background: #eee;
  }

  #sbtn5 {
    width: 70px;
    height: 50px;
    border-radius: 2px;
    background: #7fbfff;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    border: none;
  }

  #sbtn5:hover {
    background: #eee;
    color: #7fbfff;
  }

  .form-group {
    padding: 20px;
    text-align: center;
  }


</style>

<div style="text-align: center;width:100%">
  <img src="storage/e1210e3187d3301afcc77b53d2c9291e_t.jpg" class="image_size_m">
</div>

<div class="form-group">
  <form id="form5" action="{{ route('movie.index') }}">
    <input id="sbox5" type="text" name="keyword" value="{{ $keyword }}" placeholder="作品名かキーワードを入力">
    <input id="sbtn5" type="submit" value="検索">
    </form>
  </div>>
@endsection

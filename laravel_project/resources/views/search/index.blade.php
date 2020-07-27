@extends('layouts.app')
<style>
  #pic_frame {
    text-align: center;
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

  .paginate {
    width: 12%;
    margin: 0 auto;
    max-width: 500px;
  }
</style>

@section('content')

  <div class="form-group">
  <form id="form5">
    <input id="sbox5" type="text" name="keyword" value="{{ $keyword }}" placeholder="作品名かキーワードを入力">
    <input id="sbtn5" type="submit" value="検索">
    </form>
  </div>





@if(count($movies) > 0)
@foreach($movies as $movie)
<div id="pic_frame">
  <div style="margin:10px">
    <a href="{{ route('movie.show',['id' => $movie->id ]) }}">
      <img src="{{ '/images/'.$movie->image }}">
    </a>
  </div>
</div>

@endforeach

@endif


<div class="paginate">
  {{ $movies->render('pagination::bootstrap-4') }}
</div>

@endsection
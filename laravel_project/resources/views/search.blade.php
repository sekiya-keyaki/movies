@extends('layouts.app')

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
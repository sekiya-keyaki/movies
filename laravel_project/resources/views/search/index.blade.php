@extends('layouts.app')
<style>
    #pic_frame {
      text-align: center;
    }
  </style>

@section('content')
                <form class="form-inline">
                    <div class="form-group">
                    <input type="text" name="keyword" value="{{ $keyword }}"
                    placeholder="作品名かキーワードを入力">
                    <input type="submit" value="検索" >
                </form>



        @if(count($movies) > 0)
            @foreach($movies as $movie)
            <div id="pic_frame">
            <div style="margin:10px">
            <a href="{{ route('movie.show',['id' => $movie->id ]) }}">
            <img src="{{ asset('storage/'.$movie->image) }}">
            </a>
            <h1>{{ $movie->title }}</h1>
            </div>
            </div>
            @endforeach

        @endif

        <div class="paginate">
            {{ $movies->render('pagination::bootstrap-4') }}
        </div>
@endsection


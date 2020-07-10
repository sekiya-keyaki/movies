@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">レビューを投稿する</div>
                <div class="card-body">
                    <form method="post" action="{{ route('movie.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="textarea1" class="col-md-4 col-form-label text-md-right">内容</label>

                            <div class="col-md-6">

                                <textarea id="textarea1" class="form-control"></textarea>
                                <input name="movie_id" type="hidden" value="{{ $movieId }}" />
                            </div>
                        </div>
                        
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">投稿</button>
                            </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
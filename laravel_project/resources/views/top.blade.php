@extends('layouts.app')

@section('content')
<div class="container">
<style>
.image_size_m{
  width: 100%;
}
</style>

<div style="text-align: center;width:100%">
<img src="storage/e1210e3187d3301afcc77b53d2c9291e_t.jpg" class="image_size_m"> 


  <form method="GET" action="" class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="作品名またはキーワードを入れる" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
  </form>
  </div>
  </div>


@endsection
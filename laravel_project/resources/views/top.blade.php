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
</div>

<div style="text-align: center;margin: 50px">
<form method="GET">
<input type="seach" placeholder="キーワードを入力"/>
<button type="submit">検索</button>
</form>
</div>
</div>

@endsection
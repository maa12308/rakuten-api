@extends('layouts.app')

@section('content')
<h1>test</h1>
<form action=" " method="get">
  <div class="form-group">
    <input type="text" class="form-control" name="keyword">
  </div>

  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>

 <div class="row">
@foreach ($items as $item)
  <div class="col-md-3 col-sm-4 col-12">
<div class="card">
      <img src="{{ $item['mediumImageUrls'] }}" class="card-img-top" alt="カードの画像">
    <div class="card body">
      
    <a href="{{ $item['itemUrl'] }}">{{ $item['itemName'] }} </a>
    {{ $item['itemPrice'] }}    
   <p class="mb-0"><a href="#" class="btn btn-primary btn-sm">ボタン</a> <a href="#" class="btn btn-secondary btn-sm">ボタン</a></p>
  </div>
  </div>
</div>

@endforeach
</div>


@endsection

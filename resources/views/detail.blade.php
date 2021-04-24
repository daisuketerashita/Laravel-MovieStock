@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
  <!-- <h1 class='pagetitle'>詳細ページ</h1> -->
  <div class="card">
    <div class="card-body d-flex">
      <section class='review-main'>
        <h2 class='h2'>映画のタイトル</h2>
        <p class='h2 mb20'>{{ $stock->title }}</p>
        <h2 class='h2'>鑑賞日</h2>
        <p>{{ $stock->due_date }}</p>
      </section>  
      <aside class='review-image'>
@if(!empty($stock->image))
        <img class='book-image' src="{{ asset('storage/images/'.$stock->image) }}">
@else
        <img class='book-image' src="{{ asset('images/dummy.png') }}">
@endif
      </aside>
    </div>
    <a href="{{ route('index') }}" class='btn btn-info btn-back mb20'>一覧へ戻る</a>
  </div>
</div>
@endsection
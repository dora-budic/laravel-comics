@extends('layouts.app')

@section('main')
  <section id="comic-info">
    <div class="line">
    </div>
    <div class="comic-details">
      <div class="cover">
        <a href="#" class="cover-top">comic book</a>
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}} cover">
        <a href="#" class="cover-bottom">view gallery</a>
      </div>
      <div class="comic-description">
        <div class="text">
          <h1>{{$comic['title']}}</h1>
        </div>
        <div class="advertisement">

        </div>
      </div>
    </div>
  </section>
@endsection

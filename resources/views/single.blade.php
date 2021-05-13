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
          <div class="price">
            <p>U.S.Price: <span>{{$comic['price']}}</span></p>
            <div>
              <p>AVAILABLE</p>
              <a href="#">Check availability<i class="fas fa-caret-down ml-5"></i></a>
            </div>
          </div>
          <p>{{$comic['description']}}</p>
        </div>
        <div class="advertisement">
          <h4>Advertisement</h4>
          <img src="/img/adv.jpg" alt="superman dc power visa">
        </div>
      </div>
    </div>
  </section>
@endsection

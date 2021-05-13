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
    <div class="credits border-t">
      <div class="credits-container">
        <div class="credits-info">
          <div class="talent">
            <h2>Talent</h2>
            <div class="art border-y">
              <div>
                <p>Art by:</p>
              </div>
              <div>
                @for($i = 0; $i < count($comic['artists']); $i++)
                  @if ($i != count($comic['artists'])-1)
                    <a href="#">{{$comic['artists'][$i]}}</a><span>, </span>
                  @else
                    <a href="#">{{$comic['artists'][$i]}}</a>
                  @endif
                @endfor
              </div>
            </div>
            <div class="writer border-b">
              <div>
                <p>Written by:</p>
              </div>
              <div>
                @for($i = 0; $i < count($comic['writers']); $i++)
                  @if ($i != count($comic['writers'])-1)
                    <a href="#">{{$comic['writers'][$i]}}</a><span>, </span>
                  @else
                    <a href="#">{{$comic['writers'][$i]}}</a>
                  @endif
                @endfor
              </div>
            </div>
          </div>
          <div class="specs">
            <h2>Specs</h2>
            <div class="writer border-y">
              <div>
                <p>Series:</p>
              </div>
              <div>
                <a href="#">{{$comic['series']}}</a>
              </div>
            </div>
            <div class="price border-b">
              <div>
                <p>U.S.Price:</p>
              </div>
              <div>
                <p>{{$comic['price']}}</p>
              </div>
            </div>
            <div class="sale border-b">
              <div>
                <p>On Sale Date:</p>
              </div>
              <div>
                <p>{{$date}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

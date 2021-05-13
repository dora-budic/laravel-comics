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
                @foreach ($comic['artists'] as $index => $artist)
                  @if (!($loop->last))
                    <a href="#">{{$artist}}</a><span>, </span>
                  @else
                    <a href="#">{{$artist}}</a>
                  @endif
                @endforeach
              </div>
            </div>
            <div class="writer border-b">
              <div>
                <p>Written by:</p>
              </div>
              <div>
                @foreach ($comic['writers'] as $index => $writer)
                  @if (!($loop->last))
                    <a href="#">{{$writer}}</a><span>, </span>
                  @else
                    <a href="#">{{$writer}}</a>
                  @endif
                @endforeach
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

        <div class="services">
          <ul class="list-inline">
            <li><a href="#">digital comics<img src="/img/buy-comics-digital-comics.png" alt="ebook"></a></li>
            <li><a href="#">shop dc<img src="/img/buy-comics-merchandise.png" alt="tshirt"></a></li>
            <li><a href="#">comic shop locator<img src="/img/buy-comics-shop-locator.png" alt="location icon"></a></li>
            <li><a href="#">subscription<img src="/img/buy-comics-subscriptions.png" alt="cards"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

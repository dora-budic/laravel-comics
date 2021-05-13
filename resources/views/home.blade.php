@extends('layouts.app')

@section('main')
  <section id="comics-list">
    <div class="comics">
      <p>current series</p>
      <div class="comics-container mt-30">
        @foreach($comics as $index => $comic)
        <a href="{{route('details',['id' => $index])}}" class="comic mb-40">
          <div>
            <div class="comic-cover">
              <img src="{{$comic['thumb']}}" alt="{{$comic['series']}} cover">
            </div>
            <p class="mt-20">{{$comic['series']}}</p>
          </div>
        </a>
        @endforeach
      </div>
      <a class="load" href="#">load more</a>
    </div>
  </section>
  <section id="services">
    <div>
      <ul class="list-inline">
        <li><a href="#"><img src="/img/buy-comics-digital-comics.png" alt="ebook">digital comics</a></li>
        <li><a href="#"><img src="/img/buy-comics-merchandise.png" alt="tshirt">dc merchandise</a></li>
        <li><a href="#"><img src="/img/buy-comics-subscriptions.png" alt="cards">subscription</a></li>
        <li><a href="#"><img src="/img/buy-comics-shop-locator.png" alt="location icon">comic shop locator</a></li>
        <li><a href="#"><img src="/img/buy-dc-power-visa.svg" alt="credit card">dc power visa</a></li>
      </ul>
    </div>
  </section>
@endsection

@extends('layouts.app')

@section('main')
  <div class="comics">
    <p>current series</p>
    <div class="comics-container mt-30">
      @foreach($comics as $comic)
      <div class="comic mb-40">
        <div class="comic-cover">
          <img src="{{$comic['thumb']}}" alt="{{$comic['series']}} cover">
        </div>
        <p class="mt-20">{{$comic['series']}}</p>
      </div>
      @endforeach
    </div>
  </div>
@endsection

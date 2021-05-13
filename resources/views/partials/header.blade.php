<header>
  <div class="header-top">
    <div>
      <p class="mr-40">dc power visa&reg;</p>
      <p>additional dc sites<i class="fas fa-caret-down ml-5"></i></p>
    </div>
  </div>

  <nav>
    <div class="navbar">
      <a href="{{route ('home')}}"><img src="/img/dc-logo.png" alt="dc logo"></a>
      <ul class="list-inline">
        <li><a href="#">characters</a></li>
        <li class="{{Route::currentRouteName() == 'home'|| 'details' ? 'active' : ''}}"><a href="{{route ('home')}}">comics</a></li>
        <li><a href="#">movies</a></li>
        <li><a href="#">tv</a></li>
        <li><a href="#">games</a></li>
        <li><a href="#">collectibles</a></li>
        <li><a href="#">videos</a></li>
        <li><a href="#">fans</a></li>
        <li><a href="#">news</a></li>
        <li><a href="#">shop<i class="fas fa-caret-down ml-5"></i></a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" placeholder="Search">
        <i class="fas fa-search ml-5"></i>
      </div>
    </div>
  </nav>

  <div class="jumbo">

  </div>
</header>

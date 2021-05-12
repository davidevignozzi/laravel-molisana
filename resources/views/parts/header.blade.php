<header>
    <div class="container">
        <!-- logo -->
        <div class="logo">
            <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
        </div>
        <!-- end logo -->

        <div class="mobile-div">
            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <!-- navbar -->
        <nav class="main-nav">
            <ul>
                <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}"><a href="{{route('homepage')}}">Home</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : ''}}"><a href="{{route('prodotto', ['id' => 0])}}">Prodotti</a></li>
                <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
            </ul>
        </nav>
        <!-- end navbar -->
    </div>
</header>
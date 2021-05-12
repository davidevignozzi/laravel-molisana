@extends('layouts.main')

@section('main')
<main>

    <!-- lunghe -->
    <section class="container" id="lunghe">
        <h2>Le Lunghe</h2>
        <div class="cards">
            @foreach ($lunghe as $pasta)
            <div class="single-card">
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="#"></a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- end lunghe -->

    <!-- corte -->
    <section class="container" id="corte">
        <h2>Le Corte</h2>
        <div class="cards">
            @foreach ($corte as $pasta)
            <div class="single-card">
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="#"></a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- end corte -->

    <!-- cortissime -->
    <section class="container" id="cortissime">
        <h2>Le Cortissime</h2>
        <div class="cards">
            @foreach ($cortissime as $pasta)
            <div class="single-card">
                <a href="{{route('prodotto', [ 'id' => $pasta['id'] ])}}"><img src="{{$pasta['src']}}" alt="#"></a>
            </div>
            @endforeach
        </div>
    </section>
    <!-- end cortissime -->
</main>
@endsection
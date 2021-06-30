@extends('home_layout')
@section('content')
<main>
    <section class="hero subpageHero flex-style productListHero">
      <div class="backgroundHero rellax2" data-rellax-speed="-8" data-rellax-percentage="0.5" style="background: url('{{ asset('frontend') }}/img/images/shop-list-title-img-1.jpg') center/cover no-repeat;"></div>
      <h1>Sản phẩm</h1>
    </section>
    <section class="productList layoutContent">
        @yield('content_category')



    </section>

  </main>
@endsection

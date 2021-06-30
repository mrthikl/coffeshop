@extends('home_layout')
@section('content')
<main>
    <section class="hero subpageHero flex-style productListHero">
    <div class="backgroundHero rellax2" data-rellax-speed="-8" data-rellax-percentage="0.5" style="background: url('{{ asset('frontend') }}/img/images/shop-list-title-img-1.jpg') center/cover no-repeat;"></div>
    <h1>Sản phẩm</h1>
    </section>
    <section class="productList layoutContent">
        <div class="bodyContent" data-aos-offset="500">
            <div class="left">
                @foreach ($category_product as $key => $cate)
                <div class="headLine" i>{{ $cate->cate_name }}</div>
                <?php
                $products_of = DB::table('product')->where('cate_id', $cate->id)->orderby('id_product','desc')->limit(4)->get();
                ?>
                <div class="itemList" id="list-{{ $cate->id }}" data-aos="showProduct">
                @foreach ($products_of as $item)

                    <div class="item" style="text-align: center">
                    <div class="productImage">
                        <a href="productDetail.html">
                        <div class="backgroundProduct flex-style">
                            <button class="btn-style" href="#">
                            THÊM VÀO GIỎ
                            </button>
                        </div>
                        </a>
                        <img src="{{ URL::to('/public/uploads/product/'.$item->product_img) }}" alt="blogimg">
                    </div>
                    <h5>{{ $item->name }} </h5>
                    <p style="font-size:18px; margin-top: 10px;"> {{ $item->regular_price }} </p>
                    </div>



                @endforeach
            </div>

                @endforeach


            </div>


            <div class="right menuProduct">
            <nav class="navProduct">
                <ul>
                <div class="item search">
                    <form action="">
                    <div class="formField flex-style">
                        <input type="search" placeholder="Search">
                        <button type="submit">
                        <img src="{{ asset('frontend') }}/img/assets/search.svg" alt="search">
                        </button>
                    </div>
                    </form>
                </div>
                @foreach ($category_product as $key => $cate)
                <li>
                    <a href="#list-{{ $cate->id }}" rel="m_PageScroll2id">{{ $cate ->cate_name }}</a>
                </li>
                @endforeach


                </ul>
            </nav>
            </div>
        </div>


    </section>

</main>
@endsection

@extends('home_layout')
@section('content')
{{ csrf_field() }}
<main>
    <section class="hero subpageHero flex-style">
      <div class="backgroundHero rellax2" data-rellax-speed="-8" data-rellax-percentage="0.5" style="background: url('{{ asset('frontend') }}/img/images/shop-list-title-img-1.jpg') center/cover no-repeat;"></div>
      <h1>ETHIOPIA COFFEE </h1>
    </section>
    <section class="productDetail layoutContent" style="background-color: #fff;">
        @foreach ($product_details as $key => $value)

      <div class="wrapper">
        <div class="productSlides">
          <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="{{ URL::to('/public/uploads/product/'.$value->product_img) }}" alt="product">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="product">
              </div>
              <div class="swiper-slide">
                <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="product">
              </div>
            </div>
            <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
          </div>
          <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image:url('{{ URL::to('/public/uploads/product/'.$value->product_img) }}')">
              </div>
              <div class="swiper-slide" style="background-image:url('{{ asset('frontend') }}/img/images/product-img-1-800x800.png')">
              </div>
              <div class="swiper-slide" style="background-image:url('{{ asset('frontend') }}/img/images/product-img-1-800x800.png')">
              </div>
            </div>
          </div>
        </div>
        <div class="infoDetail">
          <h3>{{ $value->name }}</h3>
          <form action="{{ URL::to('/save-cart') }}" method="POST">
              {{ csrf_field() }}
          <p>
            <span>{{ number_format($value->regular_price).' VNĐ' }}</span>
          </p>
            <div class="formField flex-style">
              <div class="number">
                <div onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                  <i class="fas fa-plus"></i>
                </div>
                <input class="quantity" min="1" name="qty" value="1" type="number">
                <input class="quantity" min="1" name="productid_hidden" value="{{ $value->id_product }}" type="hidden">
                <div onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">
                  <i class="fas fa-minus"></i>
                </div>
              </div>
              <button class="btn-style" type="submit">THÊM VÀO GIỎ</button>

            </div>
          </form>
          <div class="detailMeta">
            {{-- <p>SKU: <span>PR111</span> --}}
            </p>
            <p>LOẠI:  <span>
                <a href="#">{{ $value->cate_name }}</a>
              </span>
            </p>
            {{-- <p>TAGS: <span>
                <a href="#">Black,</a>
                <a href="#">Casual,</a>
                <a href="#">Classic</a>
              </span>
            </p> --}}
          </div>
          <div class="reviewSlide">
            <div class="swiper-container reviewTop">
              <div class="swiper-wrapper">
                <div class="swiper-slide">MÔ TẢ</div>
                <div class="swiper-slide">THÔNG TIN </div>
                <div class="swiper-slide">REVIEWS (1)</div>
              </div>

            </div>
            <div class="swiper-container reviewBottom">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    {{-- //ký tự đặc biệt !! --}}
                 {!! $value->short_desc  !!}
                </div>
                <div class="swiper-slide">
                  <p>{{ $value->description }}
                  </p>
                  {{-- <p>Kích thước: <span>20 x 10 x 30 cm</span>
                  </p> --}}
                </div>
                <div class="swiper-slide">
                  <div class="comment flex-style">
                    <img src="./img/images/blog-1-img-3-768x620.jpg" alt="">
                    <div class="commentContent">
                      <div class="rating flex-style">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div>
                      <p>Janet Hopins - <span>04/04/2018</span>
                      </p>
                      <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                        Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                    </div>
                  </div>
                  <form action="">
                    <p>Add a review</p>
                    <p>Your email address will not be published. Require fields are marked*</p>
                    <p>Your rating</p>
                    <div class="rating flex-style" style="margin: 5px 0">
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star "></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>

                    <div class="formField">
                      <label for="">
                        <p>Your review*</p>
                      </label>
                      <textarea name="" id="" required></textarea>
                    </div>
                    <div class="formField">
                      <label for="">
                        <p>Name*</p>
                      </label>
                      <input type="text" required>
                    </div>
                    <div class="formField">
                      <label for="">
                        <p>email*</p>
                      </label>
                      <input type="email" required>
                    </div>
                    <div class="formField">
                      <button class="btn-style" type="submit">SUBMIT</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </section>
    <section class="layoutContent" style="background:#fff;">
      <div class="headLine" style="text-align:left; max-width: 1440px; margin: 0 auto;">
        <h2>SẢN PHẨM GỢI Ý</h2>

      </div>
      <div class="bodyContent" style="padding-bottom:0 ; padding-top:0">
        @foreach ($relate as $key => $lienquan)
        <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="{{ URL::to('/chi-tiet-san-pham/'.$lienquan->id_product) }}">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style ">THÊM VÀO GIỎ</button>
                </div>
              </a>
              <img src="{{ URL::to('/public/uploads/product/'.$lienquan->product_img) }}" alt="blogimg">
            </div>
            <h5>{{ $lienquan->name }}</h5>
            <p style="font-size:18px; margin-top: 10px;"> {{ number_format($lienquan->regular_price).' VNĐ' }} </p>
          </div>
        @endforeach
      </div>
    </section>
  </main>
@endsection

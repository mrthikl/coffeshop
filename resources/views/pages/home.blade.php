@extends('home_layout')
@section('content')
<main>
  <section class="hero">
    <div class="swiper-container swiper-hero">
      <div class="swiper-wrapper">
        <div style="background: url('{{ asset('frontend') }}/img/images/home-1-slider-image-1.jpg') center/cover no-repeat" class="swiper-slide rellax flex-style " data-rellax-speed="-5" data-rellax-percentage="0.5">
          <div>
            <img data-swiper-parallax-y="100" data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/images/h1-slider-img-1.png" alt="">
            <h1 data-swiper-parallax-y="125" data-swiper-parallax-duration="500">COFFE HEAVEN</h1>
            <img data-swiper-parallax-y="150" data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/assets/slider-separator-img.png" alt="">
            <p data-swiper-parallax-y="175" data-swiper-parallax-duration="500">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut
              labore
              et dolore magna aliqua atin script and its variants, and.
            </p>
            <a data-swiper-parallax-y="200" class="btn-style" href="#">
              SHOP HERE
            </a>
          </div>
        </div>
        <div style="background: url('{{ asset('frontend') }}/img/images/home-1-slider-image-2.jpg') center/cover no-repeat" class="swiper-slide rellax flex-style" data-rellax-speed="-5" data-rellax-percentage="0.5">
          <div>
            <img data-swiper-parallax-y="100 " data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/images/h1-slider-img-1.png" alt="">
            <h1 data-swiper-parallax-y="125" data-swiper-parallax-duration="500">COFFE HEAVEN</h1>
            <img data-swiper-parallax-y="150" data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/assets/slider-separator-img.png" alt="">
            <p data-swiper-parallax-y="175" data-swiper-parallax-duration="500">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut
              labore
              et dolore magna aliqua atin script and its variants, and.
            </p>
            <a data-swiper-parallax-y="200" class="btn-style" href="#">
              SHOP HERE
            </a>
          </div>
        </div>
        <div style="background: url('{{ asset('frontend') }}/img/images/home-1-slider-image-3.jpg') center/cover no-repeat" class="swiper-slide rellax flex-style" data-rellax-speed="-5" data-rellax-percentage="0.5">
          <div>
            <img data-swiper-parallax-y="100 " data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/images/h1-slider-img-1.png" alt="">
            <h1 data-swiper-parallax-y="125" data-swiper-parallax-duration="500">COFFE HEAVEN</h1>
            <img data-swiper-parallax-y="150" data-swiper-parallax-duration="500" src="{{ asset('frontend') }}/img/assets/slider-separator-img.png" alt="">
            <p data-swiper-parallax-y="175" data-swiper-parallax-duration="500">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid idunt ut
              labore
              et dolore magna aliqua atin script and its variants, and.
            </p>
            <a data-swiper-parallax-y="200" class="btn-style" href="#">
              SHOP HERE
            </a>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="layoutContent" data-aos="fade" data-aos-offset="350">
    <div class="headLine">
      <h2>TH????NG HI???U</h2>
      <img src="{{ asset('frontend') }}/img/assets/title-separator.png" alt="title-separator">
      <h6 style="color:var(--dark_font)">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et
        dolore
      </h6>
    </div>
    <div class="bodyContent">
      <div class="item paddingItem">
        <img src="{{ asset('frontend') }}/img/assets/h2-custom-icon-5.png" alt="iconcustom" data-aos="fade">
        <h5 data-aos="fade-up" data-aos-delay="100">TYPES OF COFFE</h5>
        <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus.
          Aeneantos commodo </p>
      </div>
      <div class="item paddingItem">
        <img src="{{ asset('frontend') }}/img/assets/h2-custom-icon-6.png" alt="iconcustom" data-aos="fade">
        <h5 data-aos="fade-up" data-aos-delay="100">TYPES OF COFFE</h5>
        <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus.
          Aeneantos commodo </p>
      </div>
      <div class="item paddingItem">
        <img src="{{ asset('frontend') }}/img/assets/h2-custom-icon-7.png" alt="iconcustom" data-aos="fade">
        <h5 data-aos="fade-up" data-aos-delay="100">TYPES OF COFFE</h5>
        <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus.
          Aeneantos commodo </p>
      </div>
      <div class="item paddingItem">
        <img src="{{ asset('frontend') }}/img/assets/h2-custom-icon-8.png" alt="iconcustom" data-aos="fade">
        <h5 data-aos="fade-up" data-aos-delay="100">TYPES OF COFFE</h5>
        <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit ametal, consectetuer adipiscing elitus.
          Aeneantos commodo </p>
      </div>
    </div>
  </section>
  <section class="layoutContent" data-aos="blogAnimate" style="background: url('{{ asset('frontend') }}/img/images/new-new-h1-bacground-img-3.jpg') center/cover no-repeat;">
    <div class="headLine">
      <h2 class=margin-span>
        <span>S</span>
        <span>???</span>
        <span>N </span>
        <span> </span>
        <span>P</span>
        <span>H</span>
        <span>???</span>
        <span>M </span>
        <span> </span>
        <span>M</span>
        <span>???</span>
        <span>I</span>
      </h2>
      <img src="{{ asset('frontend') }}/img/assets/title-separator.png" alt="title-separator">
      <h6 style="color:var(--dark_font)">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et
        dolore
      </h6>
    </div>
    <div class="bodyContent" style="padding-bottom:0 ;">
      @foreach ($all_product as $key => $product)
      <div class="item" style="text-align: center">

        <div class="productImage">
          <a href="{{ URL::to('/chi-tiet-san-pham/'.$product->id_product) }}">
            <div class="backgroundProduct flex-style" style=" flex-direction:column">
              <button class="btn-style ">TH??M V??O GI???</button>
              <button class="btn-style" style="margin-top: 20px; min-width: 218px;"><a onclick="AddCart({{ $product->id_product }})" href="javascript:">MUA NGAY</a></button>
            </div>
          </a>

          <img src="{{ URL::to('public/uploads/product/'.$product->product_img) }}" alt="blogimg">
        </div>
        <h5 href="">{{ $product->name }} </h5>
        <p style="font-size:18px; margin-top: 10px;"> {{ number_format($product->regular_price).' VN??' }} </p>

      </div>

      @endforeach
    </div>
  </section>
  <section class="about" data-aos=backgroundChange data-aos-offset="350" data-aos-once="false">
    <div class="wrapper">
      <div class="aboutLeft">
        <img src="{{ asset('frontend') }}/img/images/bg_2.jpg" alt="bg" class=rellax3 data-rellax-speed="1" data-rellax-percentage="0.5">
        <div>
          <h2>
            <span>Kh??m ph??</span>V??? CH??NG T??I
          </h2>
          <p>B???t ?????u t??? s??? m???nh, ch??ng t??i tin r???ng khi l??m vi???c v???i t???t c??? s??? ch??n th??nh v?? t??n tr???ng nh???ng gi??
            tr??? nguy??n b???n c???a t???ng nh??n vi??n c??ng nh?? kh??ch h??ng, t???t c??? m???i ng?????i ?????n v???i Coffee Shop ?????u
            nh???n ???????c nh???ng ni???m vui nho nh???, ???????c t???t l??n v?? l??m ng?????i kh??c t???t l??n t???ng ng??y.</p>
        </div>
      </div>
    </div>
  </section>
  </section>
  <section class="layoutContent couterSection" data-aos="numberAnimate" style="padding: var(--spacing_md) 15px; padding-top: 0;">
    <div class="bodyContent" style="padding-top:10px">
      <div class="headLine">
        <h1 class="zero-counter"></h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class="zero-counter"></h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class="zero-counter"></h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class="zero-counter"></h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
    </div>
    <div class="bodyContent" style="padding-top:10px">
      <div class="headLine">
        <h1 class=number-counter>250</h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class=number-counter>250</h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class=number-counter>250</h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
      <div class="headLine">
        <h1 class=number-counter>250</h1>
        <h5> Varieties of Coffee </h5>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit aenean </p>
      </div>
    </div>
  </section>
  <section class="layoutContent" data-aos="blogAnimate" style="background: url('{{ asset('frontend') }}/img/images/new-new-h1-bacground-img-3.jpg') center/cover no-repeat;">
    <div class="headLine">
      <h2 class="margin-span">
        <span>B</span>
        <span>??</span>
        <span>I</span>
        <span style="margin-left: 10px;">V</span>
        <span>I</span>
        <span>???</span>
        <span>T</span>

      </h2>
      <img src="{{ asset('frontend') }}/img/assets/title-separator.png" alt="title-separator">
      <h6 style="color:var(--dark_font)">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et
        dolore
      </h6>
    </div>
    <div class="bodyContent" style="padding-bottom:0 ;">
      @foreach ($all_news as $key => $news)
      <div class="item" style="text-align: left">
        <img src="{{ URL::to('public/uploads/news/'.$news->img1) }}" alt="blogimg">
        <h5>{{ $news->title }} </h5>
        <p>
          {{ $news->short_content }}
        </p>
        <a href="#" class="btn-readmore">
          <span class="btn-text">Read More</span>
        </a>
      </div>
      @endforeach


    </div>
    <div class="flex-style" id="scene">
      <div class="backgroundParallax rellax2" data-rellax-speed="-4" data-rellax-percentage="0.5">

      </div>
      <img data-depth="0.2" src="{{ asset('frontend') }}/img/assets/h1-single-img-1-250x226.png" alt="single image">
    </div>
  </section>
  <section class="layoutContent" data-aos="fade" data-aos-offset="350">
    <div class="headLine">
      <h2> Our Sweet Gallery </h2>
      <img src="{{ asset('frontend') }}/img/assets/title-separator.png" alt="title-separator">
      <h6 style="color:var(--dark_font)">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et
        dolore
      </h6>
    </div>
    <div class="bodyContent layoutBlog" style="column-gap: 20px; padding-bottom:0">

      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-1.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-2.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-5.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-7.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-7.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-7.jpg" alt="">
      </div>
      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-5.jpg" alt="">
      </div>

      <div class="itemImage">
        <div class="textHolder flex-style">
          <h4>PERFECT CUP</h4>
          <div>
            <a href="#">Cup of Coffee</a> / <a href="#">Filtered</a>
          </div>
        </div>
        <img src="{{ asset('frontend') }}/img/images/port-1-img-2.jpg" alt="">
      </div>

    </div>
  </section>

  <section class="layoutContent style-relation" style="overflow: hidden;padding-bottom: var(--spacing_xl);text-align: left;background: url('./img/images/new-new-h1-bacground-img-3.jpg') center/cover no-repeat;">
    <div class="wrapper">
      <div class="headLine">
        <h5 style="color:var(--dark_font);text-transform: uppercase;">Lorem ipsum dolor sit amet, consectetur
          adipiscing
          elit, sed do</h5>
        <a class=btn-style href="#">
          CONTACT US
        </a>
      </div>
    </div>
  </section>
</main>


@endsection
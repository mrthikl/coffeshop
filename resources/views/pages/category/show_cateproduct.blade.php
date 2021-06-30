@extends('show_category')
@section('content_category')

  <div class="bodyContent" data-aos-offset="500">
    <div class="left">
        @foreach ($category_by_id as $key => $cate_pro)
        <div class="headLine" i>Nổi bật</div>
        <div class="itemList" id="list-1" data-aos="showProduct">
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>

        </div>
        @endforeach

        <div class="headLine">Cà phê Việt Nam</div>
        <div class="itemList" id="list-2" data-aos="showProduct">
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
          <div class="item" style="text-align: center">
            <div class="productImage">
              <a href="productDetail.html">
                <div class="backgroundProduct flex-style">
                  <button class="btn-style" href="#">
                    THÊM VÀO GIỎ
                  </button>
                </div>
              </a>
              <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="blogimg">
            </div>
            <h5>EPITOPIA COFFE </h5>
            <p style="font-size:18px; margin-top: 10px;"> 15.00$ </p>
          </div>
        </div>
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
            <a href="{{ URL::to('/danh-muc-san-pham/'.$cate->id) }}" rel="m_PageScroll2id">{{ $cate ->cate_name }}</a>
          </li>
          @endforeach


        </ul>
      </nav>
    </div>
  </div>
@endsection

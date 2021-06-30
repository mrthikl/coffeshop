<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffe Shop</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend') }}/img/assets/cropped-favicon-32x32.png" />
  <!-- LINK -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/cssfile/aos.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/cssfile/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('frontend') }}/css/index.css" />

<body>
  <header class="flex-style">
    <div class="btnHeader">
      <div class="hamburger flex-style">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <a class="logo flex-style" href="/">
      <img src="{{ asset('frontend') }}/img/assets/logo-mobile.png" alt="logo">
      <img src="{{ asset('frontend') }}/img/assets/logo-light.png" alt="logo">
    </a>

    <nav class="navigation">
      <ul>
        <li>
          <a href="/">Trang chủ</a>
        </li>
        <li>
          <a href="{{ URL::to('/san-pham') }}">Sản phẩm</a>
          <div class="dropdownMenu">

          </div>
        </li>
        <li>
          <a href="blog.html">Bài viết</a>
        </li>
        <li>
          <a href="contact.html">Liên hệ</a>
        </li>
        <li>
          <a href="about.html">Về chúng tôi</a>
        </li>
        <li>
          <div id="btnLogin">
            <i class="far fa-user"></i>
          </div>
        </li>
        <li class="cartHeader" style="position: relative;">
          <a class=cartLink href="cart.html">
            <img src="{{ asset('frontend') }}/img/assets/cart.svg" alt="cart">
            <sup>10</sup>
          </a>
          <div class="supCart">
            <ul>
                <div id="change-item-cart">
                    <li>
                        <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="product">
                        <div class="itemInfo">
                          <h5>
                            <a href="productDetail.html">Ethiopia Coffee</a>
                          </h5>
                          <p>Số lượng: 11</p>
                          <p>$18.00</p>
                        </div>
                        <button class="close">
                          <img src="{{ asset('frontend') }}/img/assets/close2.svg" alt="close">
                        </button>
                      </li>
                      <li>
                        <img src="{{ asset('frontend') }}/img/images/product-img-1-800x800.png" alt="product">
                        <div class="itemInfo">
                          <h5>
                            <a href="productDetail.html">Ethiopia Coffee</a>
                          </h5>
                          <p>Số lượng: 11</p>
                          <p>$18.00</p>
                        </div>
                        <button class="close">
                          <img src="{{ asset('frontend') }}/img/assets/close2.svg" alt="close">
                        </button>
                      </li>
                      <li style="display:block; width: 100%;">
                        <div class="total flex-style">
                          <p>TOTAL</p>
                          <p>$288.00</p>
                        </div>
                      </li>
                      <li style="display:block; width: 100%;">
                        <a class="btn-style" href="cart.html">GIỎ HÀNG</a>
                      </li>

                </div>

            </ul>
          </div>
        </li>

      </ul>
    </nav>
  </header>
  <div class="headerSecond flex-style">
    <div class="btnHeader">
      <div class="hamburger flex-style">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <a class="logo flex-style" href="/">
      <img src="{{ asset('frontend') }}/img/assets/logo-mobile.png" alt="logo">
      <img src="{{ asset('frontend') }}/img/assets/logo-light.png" alt="logo">
    </a>

    <nav class="navigation">
      <ul>
        <li>
          <a href="/">Trang chủ</a>
        </li>
        <li>
          <a href="shop.html">Sản phẩm</a>
        </li>
        <li>
          <a href="blog.html">Bài viết</a>
        </li>
        <li>
          <a href="contact.html">Liên hệ</a>
        </li>
        <li>
          <a href="about.html">Về chúng tôi</a>
        </li>
      </ul>
    </nav>
    <div id="btnLogin">
      <i class="far fa-user"></i>
    </div>
  </div>
  <div class="loginSec flex-style">
    <img class="btnCloseLoginSec" src="{{ asset('frontend') }}/img/assets/close2.svg" alt="close">
    <img class="logo" src="{{ asset('frontend') }}/img/assets/logo-footer-sidearea.png" alt="logo">
    <form action="">
      <h5> Đăng nhập tài khoản của bạn</h5>
      <input type="text" placeholder="Tài khoản">
      <input type="password" placeholder="Mật khẩu">
      <button type="submit">Đăng nhập</button>
      <p style=" text-align:right">
        <a href="#" style="color:var(--brown_light); margin-left: -30px;">Quên mật
          khẩu?</a>
      </p>
    </form>
    <div style="width: 100%; max-width: 300px; margin: 0 auto;">

      <div style="width: 100%; text-align:center">
        <p>Hoặc đăng nhập bằng</p>
        <div class="flex-style" style="justify-content: space-between;">
          <button class="btnLogin" style="color: #3260b1;">
            <i class="fab fa-facebook-square"></i>Facebook
          </button>
          <button class="btnLogin" style="color: #e03a49">
            <i class="fab fa-google-plus-square"></i>Goggle
          </button>
        </div>
      </div>

    </div>
    <p style=" text-align:center; position:absolute; bottom:10px;left: calc(50% - 182px /2)">chưa có tài khoản? <a href="#" style="color:var(--brown_light)">Đăng ký</a>
    </p>
  </div>
    @yield('content')
  <footer class="">
    <div class="top flex-style">
      <img src="{{ asset('frontend') }}//img/assets/logo-light.png" alt="logo">
      <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
      <p>nostrud exercitation ullamco laboris.”</p>
      <h5 style="margin-top:var(--spacing_lg)">STORES</h5>
      <p>
        <a href="#">Dunsmuir Ave, Los Angeles, CA 90036, USA</a>
      </p>
      <p>
        <a href="#">Atkins Ave, Brooklyn, NY 11208, USA</a>
      </p>
      <h5 style="margin-top:var(--spacing_lg)">News As Fresh As Our Coffee</h5>
      <form action="">
        <div class="formField flex-style">
          <input type="email" placeholder="Your E-mail adress">
          <button type="submit">
            <i class="far fa-envelope"></i>
          </button>
        </div>
      </form>
    </div>
    <div class="bottom flex-style">
      <p>© 2018 Qode Interactive, , All Rights Reserved</p>
      <ul>
        <li>
          <a href="/">Trang chủ</a>
        </li>
        <li>
          <a href="#">Về chúng tôi</a>
        </li>
        <li>
          <a href="#">Sản phẩm</a>
        </li>
        <li>
          <a href="#">Liên hệ</a>
        </li>
      </ul>
      <div class="social">
        <ul class=flex-style>
          <li>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="">
              <i class="fab fa-instagram-square"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{ asset('frontend') }}/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
  <script src="{{ asset('frontend') }}/js/jquery.malihu.PageScroll2id.min.js"></script>
  <!-- Swiper -->
  <script src="{{ asset('frontend') }}/js/swiper-bundle.min.js"></script>
  <!-- Animate on Scroll -->
  <script src="{{ asset('frontend') }}/js/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <!-- Parallax -->
  <script src="{{ asset('frontend') }}/js/rellax.min.js"></script>
  <script src="{{ asset('frontend') }}/js/index.js"></script>
  <!-- /SCRIPTS -->

<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

<!--
    RTL version
-->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
  <script>
    function AddCart(id){
        $.ajax({
            url: 'Add-Cart/'+id,
            type: 'GET',
        }).done(function(response){
            console.log(response);
            $("#change-item-cart").empty(); //bỏ sản phẩm có sẳn
            $("#change-item-cart").html(response);
            alertify.success('Thêm Sản Phẩm Thành Công');
        });
    }
</script>
</body>

</html>

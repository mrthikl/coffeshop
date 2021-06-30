@extends('home_layout')
@section('content')
<main>
    <section class="hero subpageHero flex-style">
      <div class="backgroundHero rellax2" data-rellax-speed="-8" data-rellax-percentage="0.5" style="background: url('{{ asset('frontend') }}/img/images/shop-list-title-img-1.jpg') center/cover no-repeat;"></div>
      <h1>GIỎ HÀNG</h1>
    </section>
    <section class="cart">
      <form action="">
        <table>
          <thead>
            <tr>
              <th>&nbsp</th>
              <th>&nbsp</th>
              <th>Sản phẩm</th>
              <th>Gía</th>
              <th>Số lượng</th>
              <th>Tổng</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="#">
                  <img class=close src="./img/assets/close.svg" alt="close">
                </a>
              </td>
              <td>
                <img class=productImage src="./img/images/product-img-1-800x800.png" alt="product">
              </td>
              <td> Ethiopia Coffee</td>
              <td> $18.00</td>
              <td>
                <div class="number">
                  <div onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                    <i class="fas fa-plus"></i>
                  </div>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <div onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">
                    <i class="fas fa-minus"></i>
                  </div>
                </div>
              </td>
              <td>$200.00</td>
            </tr>
            <tr>
              <td>
                <a href="#">
                  <img class=close src="./img/assets/close.svg" alt="close">
                </a>
              </td>
              <td>
                <img class=productImage src="./img/images/product-img-1-800x800.png" alt="product">
              </td>
              <td> Ethiopia Coffee</td>
              <td> $18.00</td>
              <td>
                <div class="number">
                  <div onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus">
                    <i class="fas fa-plus"></i>
                  </div>
                  <input class="quantity" min="0" name="quantity" value="1" type="number">
                  <div onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus">
                    <i class="fas fa-minus"></i>
                  </div>
                </div>
              </td>
              <td>$200.00</td>
            </tr>
            <tr style="border: 0;">
              <td colspan="6">
                <div class="coupon">
                  <input type="text" placeholder="Mã giảm giá">
                  <input class="btn-style" type="submit" value="Sử dụng mã giảm giá   ">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <div class="cardTotal">
        <h2>TỔNG TIỀN</h2>
        <p>Số tiền: <span>$288.00</span>
        </p>
        <p>Vận chuyển: <span>Sài Gòn</span>
        </p>
        <p>Tổng: <span>$288.00</span>
        </p>
        <a class="btn-style" href="checkout.html">Đặt hàng</a>

      </div>
    </section>
  </main>

@endsection

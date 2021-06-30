@if($newCart != null)
@foreach ($newCart->products as $item)
<li>
    <img src="{{ URL::to('public/uploads/product/'.$item['productInfo']->product_img)   }}" alt="product">
    <div class="itemInfo">
      <h5>
        <a href="productDetail.html">{{($item['productInfo']->name)  }}</a>
      </h5>
      <p>Số lượng: {{ $item['quanty'] }}</p>
      <p>{{number_format($item['productInfo']->regular_price)  }}VNĐ</p>
    </div>
    <button class="close">
      <img src="{{ asset('frontend') }}/img/assets/close2.svg" alt="close">
    </button>
  </li>
@endforeach


  <li style="display:block; width: 100%;">
    <div class="total flex-style">
      <p>TOTAL</p>
      <p>{{number_format($newCart->totalPrice)  }}VNĐ</p>
    </div>
  </li>
  <li style="display:block; width: 100%;">
    <form action="{{ URL::to('/save-cart') }}" method="POST">
        {{ csrf_field() }}
        <button class="btn-style" type="submit">GIỎ HÀNG</button>

</form>
  </li>


  @endif

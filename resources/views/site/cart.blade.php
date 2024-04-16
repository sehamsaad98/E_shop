@extends('site.layout.Layout')
@section('body')
<section class="section">
  <div class="container">
    <div class="cart">
      <div class="cart_header">
        <p class="cart_header_title">Product Title</p>
        <p class="cart_header_title">Product image</p>
        <p class="cart_header_title">Price</p>
        <p class="cart_header_title">Quantity</p>
        <p class="cart_header_title">SubTotal</p>
      </div>
      <div class="cart_item">
        <span class="cart_item_title">product title 1 </span>
        <img src="{{asset('assets/img/products/1aa3dc033dab1d8c21c634019b603bc6.jpg')}}" alt="" class="cart_img">


        <div class="cart_item_price">$120</div>
        <input type="number" class="cart_item_qty">
        <p class="cart_item_subtotal">$120</p>
      </div>
      <div class="cart_total">
      <p class="cart_total_p">Total: $2000</p>
      </div>

    </div>
  </div>
</section>






@endsection
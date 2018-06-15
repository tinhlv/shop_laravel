<!-- Stored in resources/views/default.blade.php -->

@extends('layouts.default')

@section('title', 'Page Title')

@section('content')
<!--================Categories Banner Area =================-->
<section class="solid_banner_area">
  <div class="container">
    <div class="solid_banner_inner">
      <h3>shopping cart</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="shopping-cart.html">Shopping cart</a></li>
      </ul>
    </div>
  </div>
</section>
<!--================End Categories Banner Area =================-->
<!--================Shopping Cart Area =================-->
<section class="shopping_cart_area p_100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="cart_product_list">
          <h3 class="cart_single_title">Discount Cupon</h3>
          <div class="table-responsive-md">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">product</th>
                  <th scope="col">price</th>
                  <th scope="col">qunatity</th>
                  <th scope="col">total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/icon/close-icon.png') }}" alt="">
                  </th>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="{{ asset('assets/img/product/cart-product/cart-1.jpg') }}" alt="">
                      </div>
                      <div class="media-body">
                        <h4>Mens Nike Bag</h4>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>$150</p>
                  </td>
                  <td><input type="text" placeholder="01"></td>
                  <td>
                    <p>$150</p>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <img src="{{ asset('img/icon/close-icon.png') }}" alt="">
                  </th>
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="{{ asset('assets/img/product/cart-product/cart-2.jpg') }}" alt="">
                      </div>
                      <div class="media-body">
                        <h4>Mens Nike Bag</h4>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p>$150</p>
                  </td>
                  <td><input type="text" placeholder="01"></td>
                  <td>
                    <p>$250</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="calculate_shoping_area">
          <h3 class="cart_single_title">Calculate Shoping <span><i class="icon_minus-06"></i></span></h3>
          <div class="calculate_shop_inner">
            <form class="calculate_shoping_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
              <div class="form-group col-lg-12">
                <select class="selectpicker">
                  <option>United State America (USA)</option>
                  <option>United State America (USA)</option>
                  <option>United State America (USA)</option>
                </select>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" id="state" name="state" placeholder="State / Country">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode / Zip">
              </div>
              <div class="form-group col-lg-12">
                <button type="submit" value="submit" class="btn submit_btn form-control">update totals</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="total_amount_area">
          <div class="cupon_box">
            <h3 class="cart_single_title">Discount Cupon</h3>
            <div class="cupon_box_inner">
              <input type="text" placeholder="Enter your code here">
              <button type="submit" class="btn btn-primary subs_btn">apply cupon</button>
            </div>
          </div>
          <div class="cart_totals">
            <h3 class="cart_single_title">Discount Cupon</h3>
            <div class="cart_total_inner">
              <ul>
                <li><a href="#"><span>Cart Subtotal</span> $400.00</a></li>
                <li><a href="#"><span>Shipping</span> Free</a></li>
                <li><a href="#"><span>Totals</span> $400.00</a></li>
              </ul>
            </div>
            <button type="submit" class="btn btn-primary update_btn">update cart</button>
            <button type="submit" class="btn btn-primary checkout_btn">proceed to checkout</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Shopping Cart Area =================-->
@endsection

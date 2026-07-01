@extends('layout.layout')

@section('custom-css')
<link rel="stylesheet" href="css/cart.css" />
@endsection

@section('page-title')
<title>WareGo - Cart</title>
@endsection

@section('page-content')
<main class="cart-container">
    <h1 class="cart-title">Your Cart</h1>

    <div class="cart-content">
      <div class="cart-items">
        <div class="cart-item">
          <img src="images/product-placeholder.jpg" alt="Product" />

          <div class="item-info">
            <h3>Meat</h3>
            <p>Food</p>
          </div>

          <div class="quantity">
            <button onclick="changeCount(this, -1)">-</button>
            <span>0</span>
            <button onclick="changeCount(this, 1)">+</button>
          </div>

          <div class="price">$50.00</div>

          <button class="remove-btn">Remove</button>
        </div>

        <div class="cart-item">
          <img src="images/product-placeholder.jpg" alt="Product" />

          <div class="item-info">
            <h3>Warehouse Scanner</h3>
            <p>Electronics</p>
          </div>

          <div class="quantity">
            <button onclick="changeCount(this, -1)">-</button>
            <span>0</span>
            <button onclick="changeCount(this, 1)">+</button>
          </div>

          <div class="price">$300.00</div>

          <button class="remove-btn">Remove</button>
        </div>
      </div>

      <div class="order-summary">
        <h2>Order Summary</h2>

        <div class="summary-row">
          <span>Subtotal</span>
          <span>$350.00</span>
        </div>

        <div class="summary-row">
          <span>Shipping</span>
          <span>$20.00</span>
        </div>

        <div class="summary-row">
          <span>Tax</span>
          <span>$35.00</span>
        </div>

        <hr />

        <div class="summary-row total">
          <span>Total</span>
          <span>$405.00</span>
        </div>

        <button class="checkout-btn">Proceed to Checkout</button>
      </div>
    </div>
  </main>

@endsection
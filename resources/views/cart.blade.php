@extends('layout.layout')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <style>
        .cart-bg {
            background-image: url("{{ asset('images/background.png') }}");
        }
    </style>
@endsection

@section('page-title')
    <title>WareGo - Cart</title>
@endsection

@section('page-content')
    <div class="cart-bg"></div>

    <div class="cart-page">

        <h1 class="cart-heading">Shopping Cart</h1>

        <div class="cart-wrapper">

            <!-- Cart Items -->
            <div class="cart-items">

                @forelse ($cartItems as $item)
                    <div class="cart-item">

                        <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}">

                        <div class="item-details">

                            <h3>{{ $item->name }}</h3>

                            <p>Category: {{ $item->name }}</p>

                            <p>
                                Quantity:
                                <strong>{{ $item->quantity }} Units</strong>
                            </p>

                            <p>
                                Price per Unit:
                                <span class="price">
                                    ${{ number_format($item->price, 2) }}
                                </span>
                            </p>

                        </div>

                        <div class="item-total">

                            <p>Total</p>

                            <h4>
                                ${{ number_format($item->price * $item->quantity, 2) }}
                            </h4>

                        </div>

                    </div>

                @empty

                    <div class="empty-cart">

                        <h3>Your cart is empty.</h3>

                        <p>Add products to begin placing an order.</p>

                    </div>
                @endforelse

            </div>

            <!-- Order Summary -->
            <div class="cart-summary">

                <h2>Order Summary</h2>

                <div class="summary-row">
                    <span>Total Products</span>
                    <span>{{ $cartItems->sum('quantity') }}</span>
                </div>

                <div class="summary-row">
                    <span>Subtotal</span>
                    <span>${{ number_format($cartItems->sum(function ($item) { return $item->price * $item->quantity; }), 2) }}</span>
                </div>

                <div class="summary-row">
                    <span>Shipping</span>
                    <span>$20.00</span>
                </div>

                <div class="summary-row">
                    <span>Tax (10%)</span>
                    <span>${{ number_format($cartItems->sum(function ($item) { return $item->price * $item->quantity; }) * 0.1, 2) }}</span>
                </div>

                <hr>

                <div class="summary-row total">
                    <span>Total</span>
                    <span>${{ number_format($cartItems->sum(function ($item) { return $item->price * $item->quantity; }) * 1.1 + 20, 2) }}</span>
                </div>

                <button class="checkout-btn" onclick="checkout()">
                    Checkout
                </button>

            </div>

        </div>

    </div>
@endsection

@section('custom-js')
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection

@extends('layout.category-layout')

@section('page-title')
    <title>WareGo - {{ ucfirst(str_replace('-', ' ', $category)) }}</title>
@endsection

@section('page-content')
    <h2 class="category-heading">
        {{ ucfirst(str_replace('-', ' ', $category)) }}
    </h2>

    <div class="item-grid">

        @forelse ($items as $item)
            <div class="item">

                <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" />

                <div class="item-info">
                    <h4>{{ $item->name }}</h4>

                    <p>
                        Price per unit :
                        <span style="color: rgb(252, 5, 5)">
                            {{ $item->price }} $
                        </span>
                    </p>

                    <div class="counter">
                        <button class="counter-btn" onclick="decrementx5(this)">-5</button>
                        <button class="counter-btn" onclick="decrement(this)">-1</button>

                        <span>0</span>

                        <button class="counter-btn" onclick="increment(this)">+1</button>
                        <button class="counter-btn" onclick="incrementx5(this)">+5</button>
                    </div>
                </div>

                <button class="add-to-cart-btn" onclick="addToCart(this)" data-name="{{ $item->name }}"
                    data-price="{{ $item->price }}">
                    Add to Cart
                </button>

            </div>

        @empty

            <div class="no-results">
                <h3>No products found.</h3>
            </div>
        @endforelse

    </div>
@endsection

@push('sidebar-items')
@endpush

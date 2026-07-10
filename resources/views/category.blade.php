@extends('layout.category-layout')

@section('page-title')
    <title>WareGo - Products</title>
@endsection

@section('page-content')
    <!-- Sorting Menu -->
    <div id="sort-wrapper">
        <form action="{{ route('search') }}" method="GET">
            <select name="sort" onchange="this.form.submit()">
                <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low
                </option>
                <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name: A-Z</option>
                <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name: Z-A</option>
            </select>
        </form>
    </div>

    <div class="item-grid">

        @forelse ($items as $item)
            <div class="item" data-price="{{ $item->price }}">
                <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" />
                <div class="item-info">
                    <h4>{{ $item->name }}</h4>
                    <p>
                        Price per unit :
                        <span style="color: rgb(252, 5, 5)">
                            {{ $item->price }} $
                        </span>
                    </p>

                    <p class="total-price">
                        Total :
                        <span class="total-value" style="color: rgb(252, 5, 5)">0 $</span>
                    </p>

                    <div class="counter">
                        <button class="counter-btn" onclick="decrementx5(this)">-5</button>
                        <button class="counter-btn" onclick="decrement(this)">-1</button>

                        <span>0</span>

                        <button class="counter-btn" onclick="increment(this)">+1</button>
                        <button class="counter-btn" onclick="incrementx5(this)">+5</button>
                    </div>
                </div>

                <button class="add-to-cart-btn" onclick="addToCart()" data-name="{{ $item->name }}"
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

@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Food</title>
@endsection

@section('page-content')
<div class="item-grid">

    @foreach ($items as $item)
    <div class="item-row">
        <div class="item">
            <img src="{{ asset($item->image_path) }}" alt="{{ $item->name }}" />
            <div class="item-info">
                <h4>{{ $item->name }}</h4>
                <p style="position: flex">Price per unit : 
                    <span style="color:rgb(252, 5, 5)">{{ $item->price }} $</span>
                </p>

                <div class="counter">
                    <button class="counter-btn" onclick="decrementx5(this)">◄◄</button>
                    <button class="counter-btn" onclick="decrement(this)">◄</button>
                    <span>0</span>
                    <button class="counter-btn" onclick="increment(this)">►</button>
                    <button class="counter-btn" onclick="incrementx5(this)">►►</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@push('sidebar-items')
    <li onclick="selectCategory(0, this)"><a href="#">Meat</a></li>
    <li onclick="selectCategory(1, this)"><a href="#">Dairy</a></li>
    <li onclick="selectCategory(2, this)"><a href="#">Vegetables</a></li>
    <li onclick="selectCategory(3, this)"><a href="#">Fruits</a></li>
    <li onclick="selectCategory(4, this)"><a href="#">Bread & Bakery</a></li>
    <li onclick="selectCategory(5, this)"><a href="#">Snacks</a></li>
    <li onclick="selectCategory(6, this)"><a href="#">Frozen Foods</a></li>
    <li onclick="selectCategory(7, this)"><a href="#">Desserts</a></li>
    <li onclick="selectCategory(8, this)"><a href="#">Beverages</a></li>
@endpush
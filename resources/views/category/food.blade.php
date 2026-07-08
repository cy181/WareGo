@extends('layout.category-layout')

@section('page-title')
    <title>WareGo - Food</title>
@endsection

@section('page-content')
    <div class="item-grid">

        @foreach ($items as $item)
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
        @endforeach

    </div>
@endsection

@push('sidebar-items')
    <li onclick="selectCategory(0, this)"><a href="#">Food</a></li>
    <li onclick="selectCategory(1, this)"><a href="#">Electronics</a></li>
    <li onclick="selectCategory(2, this)"><a href="#">Literature</a></li>
    <li onclick="selectCategory(3, this)"><a href="#">Tool</a></li>
    <li onclick="selectCategory(4, this)"><a href="#">Furniture</a></li>
    <li onclick="selectCategory(5, this)"><a href="#">Beauty Product</a></li>
    <li onclick="selectCategory(6, this)"><a href="#">Health Product</a></li>
    <li onclick="selectCategory(7, this)"><a href="#">Household</a></li>
@endpush

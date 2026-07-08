@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Literature</title>
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
    <li onclick="selectCategory(0, this)"><a href="{{route('food')}}">Food</a></li>
    <li onclick="selectCategory(1, this)"><a href="{{route('electronic')}}">Electronic</a></li>
    <li onclick="selectCategory(2, this)"><a href="{{route('literature')}}">Literature</a></li>
    <li onclick="selectCategory(3, this)"><a href="{{route('tool')}}">Tool</a></li>
    <li onclick="selectCategory(4, this)"><a href="{{route('furniture')}}">Furniture</a></li>
    <li onclick="selectCategory(5, this)"><a href="{{route('beauty-product')}}">Beauty Product</a></li>
    <li onclick="selectCategory(6, this)"><a href="{{route('health-product')}}">Health Product</a></li>
    <li onclick="selectCategory(7, this)"><a href="{{route('household')}}">Household</a></li>
@endpush

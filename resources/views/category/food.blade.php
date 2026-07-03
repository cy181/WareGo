@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Food</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')
            <li onclick="selectCategory(0, this)"><a href="#">Meat</a></li>
            <li onclick="selectCategory(1, this)"><a href="#">Seafood</a></li>
            <li onclick="selectCategory(2, this)"><a href="#">Eggs</a></li>
            <li onclick="selectCategory(3, this)"><a href="#">Dairy</a></li>
            <li onclick="selectCategory(4, this)"><a href="#">Vegetables</a></li>
            <li onclick="selectCategory(5, this)"><a href="#">Fruits</a></li>
            <li onclick="selectCategory(6, this)"><a href="#">Grains</a></li>
            <li onclick="selectCategory(7, this)"><a href="#">Bread & Bakery</a></li>
            <li onclick="selectCategory(8, this)"><a href="#">Pasta & Noodles</a></li>
            <li onclick="selectCategory(9, this)"><a href="#">Beans & Legumes</a></li>
            <li onclick="selectCategory(10, this)"><a href="#">Nuts</a></li>
            <li onclick="selectCategory(11, this)"><a href="#">Seeds</a></li>
            <li onclick="selectCategory(12, this)"><a href="#">Herbs</a></li>
            <li onclick="selectCategory(13, this)"><a href="#">Spices</a></li>
            <li onclick="selectCategory(14, this)"><a href="#">Oils & Fats</a></li>
            <li onclick="selectCategory(15, this)"><a href="#">Condiments</a></li>
            <li onclick="selectCategory(16, this)"><a href="#">Snacks</a></li>
            <li onclick="selectCategory(17, this)"><a href="#">Candy & Sweets</a></li>
            <li onclick="selectCategory(18, this)"><a href="#">Frozen Foods</a></li>
            <li onclick="selectCategory(19, this)"><a href="#">Soups</a></li>
            <li onclick="selectCategory(20, this)"><a href="#">Salads</a></li>
            <li onclick="selectCategory(21, this)"><a href="#">Fast Food</a></li>
            <li onclick="selectCategory(22, this)"><a href="#">Breakfast Foods</a></li>
            <li onclick="selectCategory(23, this)"><a href="#">Desserts</a></li>
            <li onclick="selectCategory(24, this)"><a href="#">Beverages</a></li>
            <li onclick="selectCategory(25, this)"><a href="#">Plant-Based</a></li>
            <li onclick="selectCategory(26, this)"><a href="#">Fermented Foods</a></li>
@endpush

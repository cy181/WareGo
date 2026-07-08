@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Household</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Laundry</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Dishwashing</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Surface Cleaners</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Bathroom Cleaners</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Kitchen Cleaners</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Floor Care</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Glass Cleaners</a></li>
<li onclick="selectCategory(7, this)"><a href="#">Air Fresheners</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Trash Bags</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Paper Products</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Food Storage</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Cleaning Tools</a></li>
<li onclick="selectCategory(12, this)"><a href="#">Sponges & Scrubbers</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Mops & Brooms</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Buckets</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Gloves</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Pest Control</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Light Bulbs</a></li>
<li onclick="selectCategory(18, this)"><a href="#">Batteries</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Storage & Organization</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Kitchen Utensils</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Cookware</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Bakeware</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Tableware</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Laundry Accessories</a></li>
<li onclick="selectCategory(25, this)"><a href="#">Home Fragrance</a></li>
<li onclick="selectCategory(26, this)"><a href="#">Seasonal Household</a></li>

@endpush

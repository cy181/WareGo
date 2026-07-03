@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Beauty Product</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')
    <li onclick="selectCategory(0, this)"><a href="#">Hair Care</a></li>
    <li onclick="selectCategory(1, this)"><a href="#">Body Care</a></li>
    <li onclick="selectCategory(2, this)"><a href="#">Face Care</a></li>
    <li onclick="selectCategory(3, this)"><a href="#">Makeup</a></li>
    <li onclick="selectCategory(4, this)"><a href="#">Nail Care</a></li>
    <li onclick="selectCategory(5, this)"><a href="#">Fragrance</a></li>
    <li onclick="selectCategory(6, this)"><a href="#">Men's Grooming</a></li>
    <li onclick="selectCategory(7, this)"><a href="#">Oral Care</a></li>
    <li onclick="selectCategory(8, this)"><a href="#">Feminine Care</a></li>
    <li onclick="selectCategory(9, this)"><a href="#">Baby Care</a></li>
    <li onclick="selectCategory(10, this)"><a href="#">Bath Products</a></li>
    <li onclick="selectCategory(11, this)"><a href="#">Beauty Tools</a></li>
    <li onclick="selectCategory(12, this)"><a href="#">Natural Products</a></li>
    <li onclick="selectCategory(13, this)"><a href="#">Skincare Treatments</a></li>
    <li onclick="selectCategory(14, this)"><a href="#">Sun Care</a></li>
    <li onclick="selectCategory(15, this)"><a href="#">Lip Care</a></li>
    <li onclick="selectCategory(16, this)"><a href="#">Eye Care</a></li>
    <li onclick="selectCategory(17, this)"><a href="#">Hand Care</a></li>
    <li onclick="selectCategory(18, this)"><a href="#">Foot Care</a></li>
    <li onclick="selectCategory(19, this)"><a href="#">Shaving</a></li>
    <li onclick="selectCategory(20, this)"><a href="#">Beard Care</a></li>
    <li onclick="selectCategory(21, this)"><a href="#">Hair Styling</a></li>
    <li onclick="selectCategory(22, this)"><a href="#">Hair Coloring</a></li>
    <li onclick="selectCategory(23, this)"><a href="#">Face Masks</a></li>
    <li onclick="selectCategory(24, this)"><a href="#">Cleansers</a></li>
    <li onclick="selectCategory(25, this)"><a href="#">Moisturizers</a></li>
    <li onclick="selectCategory(26, this)"><a href="#">Serums & Essences</a></li>
    
@endpush

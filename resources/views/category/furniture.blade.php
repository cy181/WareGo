@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Furniture</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Chairs</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Tables</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Sofas</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Beds</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Desks</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Dressers</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Wardrobes</a></li>
<li onclick="selectCategory(7, this)"><a href="#">Cabinets</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Shelves</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Bookcases</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Coffee Tables</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Nightstands</a></li>
<li onclick="selectCategory(12, this)"><a href="#">TV Stands</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Dining Tables</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Dining Chairs</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Stools</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Benches</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Ottomans</a></li>
<li onclick="selectCategory(18, this)"><a href="#">Recliners</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Mattresses</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Mirrors</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Coat Racks</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Shoe Racks</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Storage Boxes</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Drawer Units</a></li>

@endpush

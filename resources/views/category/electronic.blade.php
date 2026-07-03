@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Electronic</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Smartphones</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Tablets</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Laptops</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Desktop Computers</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Monitors</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Televisions</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Audio</a></li>
<li onclick="selectCategory(7, this)"><a href="#">Cameras</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Gaming</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Wearables</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Smart Home</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Networking</a></li>
<li onclick="selectCategory(12, this)"><a href="#">Storage</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Printers</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Computer Accessories</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Phone Accessories</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Chargers & Cables</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Power Banks</a></li>
<li onclick="selectCategory(18, this)"><a href="#">Batteries</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Kitchen Appliances</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Home Appliances</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Personal Care Electronic</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Office Electronic</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Security Systems</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Drones</a></li>
<li onclick="selectCategory(25, this)"><a href="#">Electronic Components</a></li>
<li onclick="selectCategory(26, this)"><a href="#">Tools & Equipment</a></li>

@endpush

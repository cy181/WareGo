@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Health Product</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Vitamins</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Minerals</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Supplements</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Pain Relief</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Cold & Flu</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Allergy</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Digestive Health</a></li>
<li onclick="selectCategory(7, this)"><a href="#">First Aid</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Wound Care</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Medical Devices</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Mobility Aids</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Eye Care</a></li>
<li onclick="selectCategory(12, this)"><a href="#">Ear Care</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Nasal Care</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Oral Care</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Skin Treatments</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Sleep Aids</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Sports Nutrition</a></li>
<li onclick="selectCategory(18, this)"><a href="#">Protein Products</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Weight Management</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Women's Health</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Men's Health</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Children's Health</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Sexual Wellness</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Hygiene Products</a></li>
<li onclick="selectCategory(25, this)"><a href="#">Health Monitoring</a></li>
<li onclick="selectCategory(26, this)"><a href="#">Herbal Remedies</a></li>

@endpush

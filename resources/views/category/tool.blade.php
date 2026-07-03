@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Tool</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Hammer</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Screwdriver</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Wrench</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Pliers</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Saw</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Drill</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Tape Measure</a></li>
<li onclick="selectCategory(7, this)"><a href="#">Level</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Utility Knife</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Flashlight</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Ladder</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Toolbox</a></li>
<li onclick="selectCategory(12, this)"><a href="#">Socket Set</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Allen Keys</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Adjustable Wrench</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Wire Cutters</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Clamps</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Chisel</a></li>
<li onclick="selectCategory(18, this)"><a href="#">File</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Paint Brush</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Paint Roller</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Shovel</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Rake</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Axe</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Wheelbarrow</a></li>
<li onclick="selectCategory(25, this)"><a href="#">Air Compressor</a></li>
<li onclick="selectCategory(26, this)"><a href="#">Sander</a></li>

@endpush

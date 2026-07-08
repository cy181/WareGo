@extends('layout.category-layout')

@section('page-title')
<title>WareGo - Literature</title>
@endsection

@section('page-content')
@endsection

@push('sidebar-items')

<li onclick="selectCategory(0, this)"><a href="#">Fiction</a></li>
<li onclick="selectCategory(1, this)"><a href="#">Non-Fiction</a></li>
<li onclick="selectCategory(2, this)"><a href="#">Mystery</a></li>
<li onclick="selectCategory(3, this)"><a href="#">Thriller</a></li>
<li onclick="selectCategory(4, this)"><a href="#">Romance</a></li>
<li onclick="selectCategory(5, this)"><a href="#">Fantasy</a></li>
<li onclick="selectCategory(6, this)"><a href="#">Science Fiction</a></li>
<li onclick="selectCategory(7, this)"><a href="#">Horror</a></li>
<li onclick="selectCategory(8, this)"><a href="#">Historical Fiction</a></li>
<li onclick="selectCategory(9, this)"><a href="#">Biography</a></li>
<li onclick="selectCategory(10, this)"><a href="#">Autobiography</a></li>
<li onclick="selectCategory(11, this)"><a href="#">Memoir</a></li>
<li onclick="selectCategory(12, this)"><a href="#">Poetry</a></li>
<li onclick="selectCategory(13, this)"><a href="#">Drama</a></li>
<li onclick="selectCategory(14, this)"><a href="#">Comics & Graphic Novels</a></li>
<li onclick="selectCategory(15, this)"><a href="#">Manga</a></li>
<li onclick="selectCategory(16, this)"><a href="#">Children's Books</a></li>
<li onclick="selectCategory(17, this)"><a href="#">Young Adult</a></li>
<li onclick="selectCategory(18, this)"><a href="#">Educational</a></li>
<li onclick="selectCategory(19, this)"><a href="#">Reference</a></li>
<li onclick="selectCategory(20, this)"><a href="#">Language Learning</a></li>
<li onclick="selectCategory(21, this)"><a href="#">Religion & Spirituality</a></li>
<li onclick="selectCategory(22, this)"><a href="#">Philosophy</a></li>
<li onclick="selectCategory(23, this)"><a href="#">Art & Photography</a></li>
<li onclick="selectCategory(24, this)"><a href="#">Travel</a></li>
<li onclick="selectCategory(25, this)"><a href="#">Cookbooks</a></li>
<li onclick="selectCategory(26, this)"><a href="#">Magazines</a></li>

@endpush

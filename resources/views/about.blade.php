@extends('layout.layout')

@section('custom-css')
<link rel="stylesheet" href='{{asset("css/about.css")}}' />
@endsection

@section('page-title')
<title>WareGo - About</title>
@endsection

@section('page-content')

<h1>Who are we?</h1>
    <div class="container-1">
        <div class="image-wrapper">
            <img src="{{asset('images/warehouse.avif')}}" alt="Warehouse">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima libero sed quam animi nam! Magni repellat
            rem, <br>optio exercitationem officiis, debitis sapiente nam vitae error sint cupiditate. Minima, laborum
            iusto!
        </p>
    </div>

    <div class="container-2">
        <div class="heading-wrapper">
            <h2>Our Journey:<br>Enhance Your Experience</h2>
        </div>
        <div class="text-wrapper">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quaerat ex incidunt id repellat rem illo,
                excepturi facere, ut sequi perferendis, <br> repudiandae assumenda dolores eveniet? Aliquam incidunt id
                commodi repellat!
                Blanditiis dolores commodi <br> nostrum harum nemo dolor ipsam mollitia officia, debitis tenetur,
                doloribus
                ipsum distinctio itaque in? <br> Non possimus laudantium, exercitationem, officia repellat sequi hic
                perferendis quibusdam, doloremque earum aspernatur.</p>
        </div>
    </div>

    <div class="container-3">
        <img src="{{asset('images/warehouse.avif')}}" alt="Warehouse">
        <img src="{{asset('images/warehouse.avif')}}" alt="Warehouse">
    </div>

@endsection
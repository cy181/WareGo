@extends('layout.layout')

@section('custom-css')
    <link rel="stylesheet" href='{{ asset('css/about.css') }}' />
@endsection

@section('page-title')
    <title>WareGo - About</title>
@endsection

@section('page-content')
    <section>
        <h1>Who are we?</h1>
        <div class="container-1">
            <div class="image-wrapper">
                <img src="{{ asset('images/warehouse.avif') }}" alt="Warehouse">
            </div>
            <p>WareGo is a modern warehouse inventory and restocking platform designed to help businesses manage their stock
                with confidence and efficiency. We understand that maintaining the right inventory is essential to every
                successful operation, which is why our goal is to simplify the process of tracking products, monitoring
                stock levels, and organizing warehouse operations.
                <br>By combining a user-friendly interface with practical inventory management features, WareGo enables
                businesses to reduce manual work, minimize stock shortages, and make informed restocking decisions. Whether
                you're managing a small storage facility or a growing warehouse, our platform is built to keep your
                inventory organized and your operations running smoothly.
            </p>
        </div>

        <div class="container-2">
            <div class="heading-wrapper">
                <h2>Our Journey:<br>Enhance Your Experience</h2>
            </div>
            <div class="text-wrapper">
                <p>WareGo was created with a simple vision: to make warehouse inventory management smarter, faster, and more
                    accessible. We recognized the everyday challenges businesses face—from tracking stock levels to ensuring
                    products are always available when needed—and set out to develop a solution that streamlines these
                    essential processes.
                    <br>
                    As technology continues to transform the logistics and supply chain industry, we remain committed to
                    improving the way businesses manage their inventory. Our platform is designed with efficiency,
                    reliability, and ease of use in mind, allowing warehouse managers and business owners to focus less on
                    manual tasks and more on growing their operations.
                    <br>
                    At WareGo, innovation is an ongoing journey. We continuously strive to enhance our platform by
                    introducing features that improve productivity, simplify inventory tracking, and provide a seamless user
                    experience. Every improvement we make is driven by our commitment to helping businesses operate more
                    efficiently and confidently in an ever-changing marketplace.
                    </>
            </div>
        </div>

        <div class="container-3">
            <img src="{{ asset('images/warehouse.avif') }}" alt="Warehouse">
            <img src="{{ asset('images/warehouse.avif') }}" alt="Warehouse">
        </div>
    </section>
@endsection

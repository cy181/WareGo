@extends('layout.layout')

@section('page-content')
@foreach ($categories as $category)
    <div>{{ $category->name }}</div>
    
@endforeach
@endsection

<script>
    var categories = @json($categories);
</script>
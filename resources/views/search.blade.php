@extends('layout.layout')

<script>
    var categories = @json($categories);

    
</script>   


@foreach ($categories as $category)
                                       
<li><a href="{{route("home")}}?category_id={{$category->id}}">{{ $category->name }}</a></li>

@endforeach

{{--
@section('page-content')
@foreach ($categories as $category)
    <div>{{ $category->name }}</div>
    
@endforeach
@endsection
--}}
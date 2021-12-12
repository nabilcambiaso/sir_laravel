@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="jumbotron">
        <h1>Services View </h1>
        @foreach ($products as $product)
        
            <div class="well mt-1 bg-light">
                <button onclick="location.href='{{ url('/details/'.$product->id) }}'">
                    Check Stock</button>
                    
                <h2>{{$product->product_name}}</h2>
                <h4>{{$product->product_description}}</h4>
                <h6>{{$product->product_price}}</h6>

            </div>
        @endforeach
    </div>
@endsection
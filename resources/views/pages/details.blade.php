@extends('layouts.app')

@section('title')
    Details
@endsection

@section('content')
    <div class="jumbotron">
        <h1>Details View </h1>
        @foreach ($products as $product)
            <div class="well mt-1 bg-light">
                <h2>{{$product->product_name}}</h2>
                <h4>{{$product->product_description}}</h4>
                <h6>{{$product->product_price}}</h6>

            </div>
        @endforeach
    </div>
@endsection
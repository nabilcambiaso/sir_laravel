@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="jumbotron">
        <h1>Service View </h1>
        @foreach ($products as $product)
            <div class="well mt-1 bg-light">
                <h2>{{$product->product_name}}</h2>
                <h4>Prix: {{$product->product_description}} DH</h4>
                <h5>Description: {{$product->product_price}}</h5>

            </div>
        @endforeach
    </div>
<div>
        {{$products->links()}}
        </div>
@endsection
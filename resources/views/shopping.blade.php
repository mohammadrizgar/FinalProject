@extends('layouts.app')


@section('content')
    <div class="row m-3 justify-content-center">
        @foreach($products as $product)
        <div class="card p-3 m-2" style="width: 18rem;">
            <img src="upload/{{ $product->image }}" class="card-img-top w-50 m-auto" alt="">
            <div class="card-body">
                <h5 class="card-title bg-gray">{{ $product['title'] }}</h5>
                <p class="card-text bg-success">{{ $product['price'] }}</p>
               
                @if($product->userid == $userid)
                <a href="delete/{{ $product->id }}" class="text-danger">Delete</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>

    @endsection

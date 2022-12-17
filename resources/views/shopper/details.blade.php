@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid bg-white p-3 radius-10">
    <div class="container text-center">
        <img src="/upload/{{ $product->image }}" class="card-img-top w-25 m-auto radius-10 shadow">
        <h5 class="mt-5">Product Code : {{ $product->id }}</h5>
        <h5>Product Price : {{ $product->price }}</h5>
        <p class="p-3 radius-10 bg-gradient-lighter">
            <b>Product Details :</b>
            <br>
            {{ $product->details }}
            <form action="/order" method="post">
                @csrf
            <div class="d-flex justify-content-center">
                @foreach ($product->sizes as $size)
                <div class="custom-control custom-checkbox m-3">
                    <input class="custom-control-input" id="{{ $size }}" type="checkbox" name="sizes[]" value="{{ $size }}">
                    <label class="custom-control-label" for="{{ $size }}">{{ $size }}</label>
                  </div>
                @endforeach
                <input type="hidden" value="{{ $product->id }}" name="post_id">

            </div>
        </p>
        <button class="btn btn-success">Add To Cart</button>
    </div>
</form>

</div>
@endsection

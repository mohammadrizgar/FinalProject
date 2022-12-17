@extends('layouts.app')


@section('content')


<div class="container blur p-3 radius-10">
    <h4 class="text-white">Contact Us</h4>
    <div class="row">
        <div class="col-lg-6 col-sm contact-img">
            <img src="/assets/img/contact2.svg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-sm mt-3">
            <form action="/contact" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Title Report" class="form-control form-control-lg border-0 radius-20">
                <textarea name="desc" cols="30" rows="10" class="form-control form-control-lg border-0 radius-20 mt-3" placeholder="Description"></textarea>
                <button class="btn btn-lg btn-white w-100 mt-3 radius-20">Send</button>
            </form>
        </div>
    </div> 
</div>


@endsection

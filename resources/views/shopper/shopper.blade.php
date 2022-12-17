@extends('layouts.app')


@section('content')

    <div class="row m-3 justify-content-center">
        @foreach ($shoppers as $shopper )

        <div class="card m-2 p-2" style="width: 18rem;">
            <img src="https://image.flaticon.com/icons/svg/679/679946.svg" class="card-img-top w-50 m-auto" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$shopper->name}}</h5>
              <h5 class="card-title">{{$shopper->email}}</h5>
              <a href="/shopper/{{ $shopper->id }}" class="btn btn-primary">See Profile</a>
            </div>
          </div>


        @endforeach

    </div>


    @endsection

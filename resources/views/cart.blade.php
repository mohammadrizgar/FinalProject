@extends('layouts.app')
@section('content')

<div class="row bg-white radius-10 p-2">
    <div class="col">
        <table class="table">
            <h3>Cart</h3>
            <tbody>
                <tr>
                    <td><img src="/upload/2.jpg" width="50" alt=""></td>
                    <td>100 IQD</td>
                    <td><a href="#" class="text-danger">Delete</a></td>
                </tr>
                <tr>
                    <td><img src="/upload/5.jpg" width="50" alt=""></td>
                    <td>100 IQD</td>
                    <td><a href="#" class="text-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4 bg-lighter p-2 radius-10 table-borderless">
        <h3>Total Order</h3>
        <table class="table">
            <tbody>
                <tr>
                    <td>2 Items</td>
                    <td>800 IQD</td>
                </tr>
                <tr>
                    <td>Delivery Fee</td>
                    <td>20 IQD</td>
                </tr>
                <tr>
                    <td><b>Total Cast</b></td>
                    <td><b>820 IQD<b></td>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-darker radius-10 w-100">PROCEED TO CHECKOUT</button>
    </div>
</div>
@endsection

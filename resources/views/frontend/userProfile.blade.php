@extends('layouts.app')
@section('content')
<style>
    .profile-img {
        max-width: 250px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="profile-img">
                <img class="rounded-circle" style="max-width: 50%;" src="{{asset('images/muntaha.jpg')}}"></img>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Bio Info</div>
                    <div class="card-content">
                        <div> Name : <span>{{ $userInfo->name}}</span></div>
                        <div> Email : <span>{{ $userInfo->email}}</span></div>
                        <div> Phone : <span>{{ $userInfo->phone}}</span></div>
                        <div> Username : <span>{{ $userInfo->username}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Address</div>
                    <a href="#">Create Address</a>
                    <div class="card-content">
                        <div> Name : <span>{{ $userInfo->addresses}}</span></div>
                        <div> Email : <span>{{ $userInfo->email}}</span></div>
                        <div> Phone : <span>{{ $userInfo->phone}}</span></div>
                        <div> Username : <span>{{ $userInfo->username}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Address</div>
                <div class="card-content">
                    <table class="table table-hover">
                        <tr>
                            <td>Date</td>
                            <td>Invoice</td>
                            <td>Total</td>
                            <td>Payment Status</td>
                            <td>Deliver Status</td>
                            <td>Details</td>
                        </tr>
                        @foreach($myOrders as $order)
                        <tr>
                            <td>{{ $order->created_at}}</td>
                            <td>{{ $order->invoice_id}}</td>
                            <td>{{ $order->total}}</td>
                            <td>@if($order->payments->status == 0) <a href="" class="btn btn-info"> {{"Pending"}}</a> @else {{ "Confirmed"}} @endif</td>
                            <td>@if($order->delivered == 0){{"Pending"}} @else {{ "Delivered"}} @endif</td>
                            <td><a href="{{route('order.invoice', $order->id)}}" class="btn btn-primary">Details</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
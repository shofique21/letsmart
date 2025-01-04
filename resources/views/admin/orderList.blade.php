@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Order List') }}</div>
                <div class="card-body">
                    <div class="row">
                        @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Order Status</th>
                                    <th scope="col">Delivery Status</th>
                                    <th scope="col">Return Status</th>
                                    <th scope="col">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderList as $order)
                                <tr>
                                    <th scope="row">{{$order->id}}</th>
                                    <td>{{$order->users->name}}</td>
                                    <td>{{$order->users->phone}}</td>
                                    <td>{{$order->invoice_id}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>@if($order->confirmed == 0){{"Pending"}} @elseif($order->confirmed == 1) {{"Confirmed"}} @else {{"Cancell"}} @endif</td>
                                    <td>@if($order->delivered == 1){{"Pending"}} @elseif($order->delivered == 2) {{"Delivered"}} @else {{"No deliver"}} @endif</td>
                                    <td>@if($order->return == 1){{"Return"}} @else {{"No"}} @endif</td>
                                    <td><a href="{{route('order.view', $order->id)}}" class="btn btn-small btn-primary">View</a></td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <div class="row">{{$orderList->links('vendor.pagination.custom')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
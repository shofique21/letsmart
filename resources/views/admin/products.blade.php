@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Products') }} <a href="{{ route('products.create') }}" class="btn btn-primary primary-bg-color create-btn">Create Product</a></div>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->inventory->quantity}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>Active</td>
                                    <td style="width: 150px;">
                                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-small btn-primary mrb-15 primary-bg-color">Edit</a>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST"
                                           style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-small btn-danger delete mrb-15"
                                                value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                    <div class="row">{{$products->links('vendor.pagination.custom')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
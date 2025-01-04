@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Category') }} <a href="{{ route('brands.create') }}" class="btn btn-primary primary-bg-color create-btn">Create Brand</a></div>
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
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($brands as $brand)
                                <tr>
                                    <th scope="row">{{$brand->id}}</th>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td>Active</td>
                                    <td style="width: 150px;">
                                        <a href="{{ route('brands.edit',$brand->id) }}" class="btn btn-small btn-primary mrb-15 primary-bg-color">Edit</a>
                                        <form action="{{ route('brands.destroy',$brand->id) }}" method="POST"
                                           style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-small btn-danger delete mrb-15"
                                                value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
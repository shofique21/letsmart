@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Category') }} <a href="{{ route('categories.create') }}" class="btn btn-primary primary-bg-color create-btn">Create Category</a></div>
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
                                @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>Active</td>
                                    <td style="width: 150px;">
                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-small btn-primary mrb-15 primary-bg-color">Edit</a>
                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST"
                                           style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-small btn-danger delete mrb-15"
                                                value="Delete">
                                        <!-- <a href="{{ route('categories.destroy',$category->id) }}" class="btn btn-small btn-danger delete mrb-15">Delete</a> -->
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">{{$categories->links('vendor.pagination.custom')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
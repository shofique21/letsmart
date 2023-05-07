@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Subcategory') }} <a href="{{ route('subcategories.create') }}" class="btn btn-primary primary-bg-color create-btn">Create Subcategory</a></div>
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
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subcategories as $subcategory)
                                <tr>
                                    <th scope="row">{{$subcategory->id}}</th>
                                    <td>{{$subcategory->name}}</td>
                                    <td>{{$subcategory->description}}</td>
                                    <td>{{$subcategory->category->name}}</td>
                                    <td>Active</td>
                                    <td style="width: 150px;">
                                        <a href="{{ route('subcategories.edit',$subcategory->id) }}" class="btn btn-small btn-primary mrb-15 primary-bg-color">Edit</a>
                                        <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="POST"
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
                    <div class="row">{{$subcategories->links('vendor.pagination.custom')}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Brand Create') }} <a href="{{ route('brands.index') }}" class="btn btn-primary primary-bg-color create-btn">Brands</a></div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('brands.store') }}" class="was-validated" method="POST">
                           @csrf
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Brand Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Brand name" name="name" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="description" class="form-label">Brand Description:</label>
                                <textarea class="form-control" rows="5" id="description" name="description"></textarea>
                            </div>
                            
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="myCheck" name="status">
                                <label class="form-check-label" for="myCheck">Is Active.</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
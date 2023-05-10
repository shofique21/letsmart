@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Product Create') }} <a href="{{ route('products.index') }}" class="btn btn-primary primary-bg-color create-btn">Products</a></div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('products.update', $product->id) }}" class="was-validated" method="POST">
                           @csrf
                           @method('put')
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Product Name:</label>
                                <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="category_id" class="form-label">Category Name:</label>
                               <select class="form-control" id="category_id" name="category_id">
                                @foreach($categories as $category)
                                  <option value="{{$category->id}}" <?php if($product->category_id === $category->id) echo "selected"; ?>>{{$category->name}}</option>
                                @endforeach
                               </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="short_description" class="form-label">Short Description:</label>
                                <textarea class="form-control" rows="5" id="short_description"  name="short_description">{{$product->short_description}}</textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="description" class="form-label">Product Description:</label>
                                <textarea class="ckeditor form-control" name="description">{{$product->description}}</textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Quantity:</label>
                                <input type="text" class="form-control" id="quantity" value="{{$product->inventory->quantity}}" name="quantity" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="category_id" class="form-label">SKU:</label>
                               <select class="form-control" id="SKU" name="SKU">
                                  <option value="Peces">Peces</option>
                                  <option value="Dorzon">Dorzon</option>
                                  <option value="Kg">Kg</option>
                               </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="price" class="form-label">Price:</label>
                                <input type="text" class="form-control" id="price" value="{{$product->price}}"  name="price" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="discount_id" class="form-label">Discount Name:</label>
                               <select class="form-control" id="discount_id" name="discount_id">
                               <option value="">{{'Select'}}</option>
                                @foreach($discounts as $discount)
                                  <option value="{{$discount->id}}" <?php if($product->discount_id == $discount->id) echo "selected"; ?>>{{$discount->name}}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Main Image:</label>
                                <input type="file" class="form-control" id="single_image"  name="single_image" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Main Image:</label>
                                <div><img src="{{ asset('/storage/app/images/'.$product->productMedia->single_image) }}" alt=""/> </div>
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
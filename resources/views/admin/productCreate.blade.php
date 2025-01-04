@extends('admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="padding-bottom: 20px;">{{ __('Product Create') }} <a href="{{ route('products.index') }}" class="btn btn-primary primary-bg-color create-btn">Products</a></div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ route('products.store') }}" class="was-validated" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Product Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="category_id" class="form-label">Category:</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="brand_id" class="form-label">Brand:</label>
                                <select class="form-control" id="brand_id" name="brand_id">
                                    <option value="1">None Brand</option>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="color" class="form-label">Color:</label>
                                <select class="form-control" id="color" name="color[]" required multiple>
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Black">Light Grey</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Green">Green</option>
                                    <option value="Sky">Sky</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Gray">Gray</option>
                                    <option value="Red">Red</option>
                                    <option value="Red">Pink</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="size" class="form-label">Size:</label>
                                <select class="form-control" id="size" name="size[]" required multiple>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="short_description" class="form-label">Short Description:</label>
                                <textarea class="form-control" rows="5" id="short_description" name="short_description"></textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="description" class="form-label">Product Description:</label>
                                <textarea class="ckeditor form-control" name="description"></textarea>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Quantity:</label>
                                <input type="text" class="form-control" id="quantity" placeholder="Enter product quantity" name="quantity" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="SKU" class="form-label">SKU Number:</label>
                                <input type="text" class="form-control" id="SKU" placeholder="Enter SKU" name="SKU" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="buy_price" class="form-label">Buy Price:</label>
                                <input type="text" class="form-control" id="buy_price" name="buy_price" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="mb-3 mt-3">
                                <label for="sale_price" class="form-label"> Regular Sale Price:</label>
                                <input type="text" class="form-control" id="regular_price" name="regular_price" required>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="discount_id" class="form-label">Discount Name:</label>
                                <select class="form-control" id="discount_id" name="discount_id">
                                    <option value="">{{'Select'}}</option>
                                    @foreach($discounts as $discount)
                                    <option value="{{$discount->id}}">{{$discount->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="product_images" class="form-label">Product images:</label>
                                <input type="file" class="form-control" id="product_images" name="product_images[]" multiple>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Product video link:</label>
                                <input type="text" class="form-control" id="video_url" name="video_url">
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="is_new" name="is_new">
                                <label class="form-check-label" for="is_new">Is New.</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="is_new" name="is_feature">
                                <label class="form-check-label" for="is_feature">Is Feature.</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="is_offer" name="is_offer">
                                <label class="form-check-label" for="is_offer">Is Offer.</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="status" name="status">
                                <label class="form-check-label" for="status">Is Active.</label>
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
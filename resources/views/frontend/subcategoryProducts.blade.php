@extends('layouts.app')

@section('content')
<div class="container">

        <section class="pb-5 pt-5">
          <div class="row">
            @foreach($subcategoryProducts as $subcategoryProduct)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img" src="{{asset('storage/'.$subcategoryProduct->productMedia->product_images[0])}}" alt="Vans">
                    <div class="card-body">
                        <h4 class="card-title">{{$subcategoryProduct->name}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                        <p class="card-text">{{$subcategoryProduct->short_description}}</p>
                        <div class="options d-flex flex-fill">
                            <select class="custom-select mr-1">
                                <option selected>Color</option>
                                <option value="1">Green</option>
                                <option value="2">Blue</option>
                                <option value="3">Red</option>
                            </select>
                            <select class="custom-select ml-1">
                                <option selected>Size</option>
                                <option value="1">41</option>
                                <option value="2">42</option>
                                <option value="3">43</option>
                            </select>
                        </div>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success">
                                <h5 class="mt-4">$125</h5>
                            </div>
                            <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </section>
   
</div>
@endsection
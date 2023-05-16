@extends('layouts.app')

@section('content')
<style>
    .subcategory {
        display: flex;
        flex-direction: row;
        padding-left: 15px;
        flex-wrap: wrap;
    }

    .subcategory li {
        padding-right: 20px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        list-style: none;
    }
</style>
<div class="container">
    <div class="row pb-3 py-3">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 subcategory">
            @foreach($subcategoryList as $subcategory)
            <li class="nav-item"><a href="{{route('subcategory-products', $subcategory->id)}}" class="nav-link"> {{$subcategory->name}}</a></li>
            @endforeach
        </ul>
    </div>
   
        @foreach($subcategoryList as $subcategory)
        <section class="pb-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-12 col-lg-12 mb-2">
                <div class="header">
                    <h3>{{$subcategory->name}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img" src="{{asset('images/vans.png')}}" alt="Vans">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                        <p class="card-text">
                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool. </p>
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
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img" src="{{asset('images/vans.png')}}" alt="Vans">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                        <p class="card-text">
                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool. </p>
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
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img" src="{{asset('images/vans.png')}}" alt="Vans">
                    <div class="card-img-overlay d-flex justify-content-end">
                        <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Vans Sk8-Hi MTE Shoes</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
                        <p class="card-text">
                            The Vans All-Weather MTE Collection features footwear and apparel designed to withstand the elements whilst still looking cool. </p>
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
        </div>
    </section>
    @endforeach
</div>
@endsection
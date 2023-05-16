@extends('layouts.app')

@section('content')
<div class="container">
    <section class="pb-5">
        <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
        <div id="slider">
        <figure>
        <img src="{{asset('sliders/slider-1.jpg')}}" alt>
        <img src="{{asset('sliders/slider-1.jpg')}}" alt>
        <img src="{{asset('sliders/slider-1.jpg')}}" alt>
        <img src="{{asset('sliders/slider-1.jpg')}}" alt>
        <img src="{{asset('sliders/slider-1.jpg')}}" alt>
        </figure>
        </div>
    </section>
    <section class="pb-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-12 col-lg-12 mb-2">
            <div class="header">
                <h3>Featured Product</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
    <section class="pb-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-12 col-lg-12 mb-2">
            <div class="header">
                <h3>New Collection</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
    <section class="pb-5">
    <div class="row justify-content-center text-center">
        <div class="col-md-12 col-lg-12 mb-2">
            <div class="header">
                <h3>Best Seller</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
                <img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/vans.png" alt="Vans">
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
</div>
@endsection
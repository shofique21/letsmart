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
    <section class="pb-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-12 col-lg-12 mb-2">
                <div class="header">
                    <h3>{{$categoryName->name}}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($categoryProducts as $product)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
                <div class="card card-size">
                <a href="{{route('product-details', $product->id)}}"><img class="card-img" src="{{asset('storage/'.$product->productMedia->product_images[0])}}" alt="{{$product->name}}"></a>
                    <div class="card-body">
                        <h4 class="card-title"><a href="{{route('product-details', $product->id)}}" class="text-black text-decoration-none fs-4">{{ substr($product->name,0, 50)}}</a></h4>
                        <p class="card-subtitle mb-2 text-muted"><b>Brand</b>: {{$product->brand->name}}</p>
                        <div class="options d-flex flex-fill">
                            <p><b>Color</b> :
                                <?php $colors = json_decode($product->color) ?>
                               @php for($i =0 ; $i < count($colors); $i++) {  @endphp
                                  <span>{{$colors[$i]}},</span>
                                  @php } @endphp
                            </p>
                        </div>
                        <div>
                            <?php $sizes = json_decode($product->size); ?>
                            <p><b>Size</b> :
                               @php for($j =0 ; $j < count($sizes); $j++) {  @endphp
                                  <span>{{$sizes[$j]}},</span>
                                  @php } @endphp
                            </p>
                        </div>
                        <div class="buy d-flex justify-content-between align-items-center">
                            <div class="price text-success">
                                <h5>${{$product->inventory->sale_price}}</h5>
                            </div>
                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <input type="hidden" value="{{ $product->name }}" name="name">
                            <input type="hidden" value="{{ $product->inventory->sale_price }}" name="price">
                            <input type="hidden" value="{{ $product->productMedia->product_images[0] }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-danger"><i class="bi bi-shopping-cart"></i> Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
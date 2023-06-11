@extends('layouts.app')

@section('content')
<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        font-family: 'Open Sans', sans-serif;
    }

    .card-wrapper {
        max-width: 1100px;
        margin: 0 auto;
    }

    img {
        width: 100%;
        display: block;
    }

    .img-display {
        overflow: hidden;
    }

    .img-showcase {
        display: flex;
        width: 100%;
        transition: all 0.5s ease;
    }

    .img-showcase img {
        min-width: 100%;
    }

    .img-select {
        display: flex;
    }

    .img-item {
        margin: 0.3rem;
    }

    .img-item:nth-child(1),
    .img-item:nth-child(2),
    .img-item:nth-child(3) {
        margin-right: 0;
    }

    .img-item:hover {
        opacity: 0.8;
    }

    .product-content {
        padding: 2rem 1rem;
    }

    .product-title {
        font-size: 1.5rem;
        text-transform: capitalize;
        font-weight: 700;
        position: relative;
        color: #12263a;
        margin: 1rem 0;
    }

    /* .product-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 4px;
        width: 80px;
        background: #12263a;
    } */

    .product-link {
        text-decoration: none;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 0.9rem;
        display: inline-block;
        margin-bottom: 0.5rem;
        background: #256eff;
        color: #fff;
        padding: 0 0.3rem;
        transition: all 0.5s ease;
    }

    .product-link:hover {
        opacity: 0.9;
    }

    .product-rating {
        color: #ffc107;
    }

    .product-rating span {
        font-weight: 600;
        color: #252525;
    }

    .product-price {
        margin: 1rem 0;
        font-size: 1rem;
        font-weight: 700;
    }

    .product-price span {
        font-weight: 400;
    }

    .last-price span {
        color: #f64749;
        text-decoration: line-through;
    }

    .new-price span {
        color: #256eff;
    }

    .product-detail h2 {
        text-transform: capitalize;
        color: #12263a;
        padding-bottom: 0.6rem;
    }

    .product-detail p {
        font-size: 0.9rem;
        padding: 0.3rem;
        opacity: 0.8;
    }

    .product-detail ul {
        margin: 1rem 0;
        font-size: 0.9rem;
    }

    .product-detail ul li {
        margin: 0;
        list-style: none;
        background: url('../images/checked.png') left center no-repeat;
        background-size: 18px;
        padding-left: 1.7rem;
        margin: 0.4rem 0;
        font-weight: 600;
        opacity: 0.9;
    }

    .product-detail ul li span {
        font-weight: 400;
    }

    .purchase-info {
        margin: 1.5rem 0;
    }

    .purchase-info input,
    .purchase-info .btn {
        border: 1.5px solid #ddd;
        border-radius: 25px;
        text-align: center;
        padding: 0.45rem 0.8rem;
        outline: 0;
        margin-right: 0.2rem;
        margin-bottom: 1rem;
    }

    .purchase-info input {
        width: 60px;
    }

    .purchase-info .btn {
        cursor: pointer;
        color: #fff;
    }

    .purchase-info .btn:first-of-type {
        background: #256eff;
    }

    .purchase-info .btn:last-of-type {
        background: #f64749;
    }

    .purchase-info .btn:hover {
        opacity: 0.9;
    }

    .social-links {
        display: flex;
        align-items: center;
    }

    .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        color: #000;
        border: 1px solid #000;
        margin: 0 0.2rem;
        border-radius: 50%;
        text-decoration: none;
        font-size: 0.8rem;
        transition: all 0.5s ease;
    }

    .social-links a:hover {
        background: #000;
        border-color: transparent;
        color: #fff;
    }

    @media screen and (min-width: 992px) {
        .card {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.5rem;
        }

        .card-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-imgs {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .product-content {
            padding-top: 0;
        }
    }
</style>
<div class="container">

    <section class="pb-5 pt-5">
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            @foreach($product_details->productMedia->product_images as $product_image)
                            <img src="{{asset('storage/'.$product_image)}}" alt="shoe image">
                            @endforeach
                        </div>
                    </div>
                    <div class="img-select">
                        @foreach($product_details->productMedia->product_images as $product_image)
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <!-- <img src="{{asset('images/shoe_1.jpg')}}" alt="shoe image"> -->
                                <img src="{{asset('storage/'.$product_image)}}" alt="shoe image">
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">{{$product_details->name}}</h2>
                    <!-- <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>4.7(21)</span>
                    </div> -->
                    <div class="product-price">
                        <p class="new-price">In Stock: <span>{{$product_details->inventory->quantity}}</span></p>
                    </div>
                    <div class="product-price">
                        <p class="new-price">Sale Price: $<span>{{$product_details->inventory->sale_price}}</span></p>
                    </div>

                    <div class="product-detail">
                        <h3>about this item: </h3>
                    <?php echo $product_details->description ?>
                    </div>

                    <div class="purchase-info">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product_details->id }}" name="id">
                            <input type="hidden" value="{{ $product_details->name }}" name="name">
                            <input type="hidden" value="{{ $product_details->inventory->sale_price }}" name="price">
                            <input type="hidden" value="{{ $product_details->productMedia->product_images[0] }}"  name="image">
                            <input type="hidden" value="1" name="quantity">
                            <button class="btn btn-danger"><i class="bi bi-shopping-cart"></i> Add to Cart</button>
                            </form>
                    </div>

                    <div class="social-links">
                        <p class="mt-3">Share At: </p>
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
<script>
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage() {
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>
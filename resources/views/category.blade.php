@extends('layouts.master')


@section('content')
<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>

                            @foreach ($categories as $item)
                                <li data-filter="._{{$item->id}}">{{$item -> name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
                @foreach ($product  as $item)
              <div class="col-lg-4 col-md-6 text-center _{{$item->category_id}}">
    <div class="single-product-item" style="padding: 20px; border: 1px solid #eee; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-bottom: 30px; background-color: #fff;">

        <div class="product-image" style="margin-bottom: 15px;">
            <a href="single-product.html">
                <img src="{{$item->imagepath}}" alt="" style="max-width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
            </a>
        </div>

        <h3 style="margin-bottom: 10px; font-size: 20px; font-weight: bold;">{{$item->name}}</h3>

        <p class="product-price" style="margin: 5px 0;"><span style="color: gray;">Price: </span>{{ $item->price }} MAD</p>

        <p class="product-price" style="margin: 5px 0;"><span style="color: gray;">Quantity: </span>{{ $item->quantity }}</p>

        <a href="cart.html" class="cart-btn"
           style="display:inline-block;width:100%;height:45px;line-height:45px;background-color:#f28123;color:white;border-radius:8px;font-weight:bold;text-align:center;margin-top: 15px;text-align: center;display: flex;align-items: center;justify-content: center;">
            <i class="fas fa-shopping-cart"></i> Add to Cart
        </a>

    </div>
</div>

                @endforeach
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

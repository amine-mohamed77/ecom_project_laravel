@extends('layouts.master')

@section('content')
<div class="product-section mt-150 mb-150">
    <div class="container">

        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row">
            @foreach ($proudcts as $item)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
                    <div class="single-product-item" style="width: 100%; padding: 15px; box-shadow: 0 0 10px #ddd; border-radius: 10px; background-color: #fff; display: flex; flex-direction: column; justify-content: space-between;">

                        <!-- Product Image -->
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="{{ asset($item->imagepath) }}" alt="{{ $item->name }}" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                            </a>
                        </div>

                        <!-- Product Info -->
                        <div style="margin-top: 15px;">
                            <h3 style="font-size: 20px; font-weight: bold;">{{ $item->name }}</h3>
                            <p style="font-size: 16px; color: #28a745; margin: 8px 0;">
                                {{ $item->quantity }} available - MAD {{ number_format($item->price, 2) }}
                            </p>
                        </div>

                        <!-- Buttons -->
                        <div class="text-center mt-auto">
                        <form action="{{ route('cart.add', $item->id) }}" method="POST" style="display:inline-block;">
                                      @csrf
                           <button type="submit" class="cart-btn" style="background-color: #f28123; color: #fff; padding: 10px 20px; border-radius: 5px;">
                              <i class="fas fa-shopping-cart"></i> Add to Cart
                           </button>
                        </form>

                            <a href="/removeproduct/{{ $item->id }}" class="cart-btn" style="background-color: #dc3545; color: #fff; padding: 10px 20px; border-radius: 5px;">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                            <a href="/editproduct/{{ $item->id }}" class="cart-btn" style="background-color: green; color: #fff; padding: 10px 20px; border-radius: 5px; margin-top:10px;">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $proudcts->links() }}
        </div>

    </div>
</div>
@endsection

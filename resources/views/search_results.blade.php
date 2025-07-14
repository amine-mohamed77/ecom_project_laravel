@extends('layouts.master')

@section('content')
<div class="container mt-5 mb-5">
    <h3 class="mb-4 text-center">
        Search results for: <strong class="text-primary">{{ $query }}</strong>
    </h3>

    @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        <img src="{{ asset($product->imagepath) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 230px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-dark">{{ $product->name }}</h5>
                            <p class="card-text text-success"><strong>Price:</strong> {{ $product->price }} MAD</p>
                            <a href="/single-product/{{ $product->id }}" class="btn btn-outline-primary btn-sm mt-2">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center mt-4" role="alert">
            No matching products found.
        </div>
    @endif
</div>
@endsection

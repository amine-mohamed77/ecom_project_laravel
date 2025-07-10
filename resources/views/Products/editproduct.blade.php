@extends('layouts.master')

@section('content')
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Edit Product</h2>
                </div>

                @if(session('success'))
                    <div style="color: green; font-weight:bold;">{{ session('success') }}</div>
                @endif

                <div class="contact-form">
                    <form method="POST" action="/updateproduct/{{ $product->id }}">
                        @csrf
                        <p>
                            <input type="text" style="width: 100%" placeholder="Name" name="name" value="{{ $product->name }}" required>
                            <span style="color:red">@error('name') {{ $message }} @enderror</span>
                        </p>
                        <p style="display:flex">
                            <input type="number" style="width: 50%; margin-right:20px;" placeholder="Price" name="price" value="{{ $product->price }}" required>
                            <span style="color:red">@error('price') {{ $message }} @enderror</span>

                            <input type="number" style="width: 50%" placeholder="Quantity" name="quantity" value="{{ $product->quantity }}" required>
                            <span style="color:red">@error('quantity') {{ $message }} @enderror</span>
                        </p>
                        <p>
                            <textarea name="descraption" cols="30" rows="5" placeholder="Description" required>{{ $product->descraption }}</textarea>
                            <span style="color:red">@error('descraption') {{ $message }} @enderror</span>
                        </p>

                        <p>
                            <select name="category_id" class="form-control">
                                @foreach ($allCategories as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </p>

                        <p><input type="submit" value="Update Product"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

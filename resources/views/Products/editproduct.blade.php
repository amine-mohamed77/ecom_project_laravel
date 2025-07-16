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
                   <form method="POST" action="/updateproduct/{{ $product->id }}" enctype="multipart/form-data">
    @csrf
    <p>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <span style="color:red">@error('name') {{ $message }} @enderror</span>
    </p>

    <p style="display:flex">
        <input type="number" name="price" value="{{ $product->price }}" required>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
    </p>

    <p>
        <textarea name="descraption" required>{{ $product->descraption }}</textarea>
    </p>

    <p>
        <select name="category_id">
            @foreach ($allCategories as $cat)
                <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </p>

    <p>
        <input type="file" name="image">
        @error('image') <span style="color:red">{{ $message }}</span> @enderror
    </p>
    <p>
        <img src="{{asset( $product->imagepath)}}" alt="" style="width: 30%">
    </p>

    <p><input type="submit" value="Update Product"></p>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

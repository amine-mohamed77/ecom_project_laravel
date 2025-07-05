@extends('layouts.master')


@section('content')
<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>

		<div class="row">
    @foreach ($category as $item)
        <div class="col-lg-4 col-md-6 text-center" style="padding: 10px;">
            <div class="single-product-item" style="width: 100%; min-height: 500px; max-height: auto; padding: 15px; box-shadow: 0 0 10px #ddd; border-radius: 10px; overflow: hidden;">
                <div class="product-image">
                    <a href="/proudcts/{{$item->id}}">
                        <img src="{{ url($item->url_image) }}" alt="" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
                    </a>
                </div>
                <h3 style="font-size: 24px; font-weight: bold; margin-top: 15px;">{{ $item->name }}</h3>
                <p style="font-size: 16px; margin-top: 10px; word-wrap: break-word;">{{ $item->description }}</p>
            </div>
        </div>
    @endforeach
</div>

		</div>
	</div>
@endsection

@extends('layouts.master')

@section('content')
<div class="testimonail-section mt-80 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="single-testimonial-slider">

                    @foreach ( $reviews as $item)
                        <div class="client-avater">
						<img src="{{ asset('assets/img/avaters/avatar2.png') }}" alt="">
					</div>
					<div class="client-meta">
						<h3>{{$item->name}} <span>{{$item->subject}}</span></h3>
						<p class="testimonial-body">
                            {{$item->massage}}
						</p>
						<div class="last-icon">
							<i class="fas fa-quote-right"></i>
						</div>
					</div>
                    @endforeach

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

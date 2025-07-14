@extends('layouts.master')

@section('content')
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title mb-4">
                    <h2>Add Reviews</h2>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="contact-form">
                    <form method="POST" action="{{ route('storereviews') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}" required>
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{ old('phone') }}" required>
                                <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" name="subject" value="{{ old('subject') }}" required>
                            <span class="text-danger">@error('subject') {{ $message }} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <textarea name="massage" class="form-control" rows="5" placeholder="Message" required>{{ old('massage') }}</textarea>
                            <span class="text-danger">@error('massage') {{ $message }} @enderror</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="slider-container">
                    @foreach ($reviews as $index => $item)
                        <div class="single-testimonial-slider" style="display: {{ $index == 0 ? 'block' : 'none' }};">
                            <div class="client-avater">
                                <img src="{{ asset('assets/img/avaters/avatar2.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>{{ $item->name }} <span>{{ $item->subject }}</span></h3>
                                <p class="testimonial-body">{{ $item->massage }}</p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Auto Slider Script -->
<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.single-testimonial-slider');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? 'block' : 'none';
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    showSlide(currentSlide);
    setInterval(nextSlide, 3000);
</script>
@endsection

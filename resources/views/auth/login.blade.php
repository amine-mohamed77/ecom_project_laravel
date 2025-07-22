@extends('layouts.auth')

@section('content')
<style>
  /* Professional Black, Orange, White CSS Styles */

/* Global Styles */
* {
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    min-height: 100vh;
    margin: 0;
    padding: 20px 0;
}

/* Container */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Row */
.row.justify-content-center {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
}

/* Column */
.col-md-8 {
    width: 100%;
    max-width: 500px;
}

/* Card */
.card {
    background: #ffffff;
    border-radius: 20px;
    box-shadow: 0 20px 60px rgba(255, 165, 0, 0.1),
                0 8px 25px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 25px 80px rgba(255, 165, 0, 0.15),
                0 12px 30px rgba(0, 0, 0, 0.4);
}

/* Card Header */
.card-header {
    background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
    color: #ffffff;
    padding: 25px 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
    border-bottom: none;
    font-size: 28px;
    font-weight: 700;
}

.card-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 165, 0, 0.1), transparent);
    transition: left 0.5s;
}

.card:hover .card-header::before {
    left: 100%;
}

/* Card Body */
.card-body {
    padding: 40px 30px;
    background: #ffffff;
}

/* Form Rows */
.row.mb-3 {
    margin-bottom: 25px;
}

.row.mb-0 {
    margin-bottom: 0;
    text-align: center;
    margin-top: 30px;
}

/* Labels */
.col-form-label {
    font-weight: 600;
    color: #333333;
    margin-bottom: 8px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
}

.text-md-end {
    text-align: left;
}

/* Form Controls */
.form-control {
    width: 100%;
    padding: 15px 20px;
    border: 2px solid #e5e5e5;
    border-radius: 12px;
    font-size: 16px;
    transition: all 0.3s ease;
    background: #fafafa;
    color: #333333;
    display: block;
}

.form-control:focus {
    outline: none;
    border-color: #ff6b35;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
    transform: translateY(-2px);
}

.form-control.is-invalid {
    border-color: #dc3545;
    background: #fff5f5;
}

/* Invalid Feedback */
.invalid-feedback {
    display: block;
    color: #dc3545;
    font-size: 14px;
    margin-top: 8px;
    font-weight: 500;
}

/* Button */
.btn {
    background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
    color: #ffffff;
    border: none;
    padding: 15px 40px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(255, 107, 53, 0.3);
    text-decoration: none;
    display: inline-block;
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(255, 107, 53, 0.4);
    background: linear-gradient(135deg, #ff8c42 0%, #ff6b35 100%);
    color: #ffffff;
    text-decoration: none;
}

.btn:hover::before {
    left: 100%;
}

.btn:active {
    transform: translateY(-1px);
}

.btn-primary {
    background: linear-gradient(135deg, #ff6b35 0%, #ff8c42 100%);
}

/* Column Classes */
.col-md-4 {
    /* Keep original Bootstrap behavior */
}

.col-md-6 {
    width: 100%;
}

.offset-md-4 {
    /* Remove offset for centered layout */
    margin-left: 0;
}

/* Focus Styles for Accessibility */
.form-control:focus,
.btn:focus {
    outline: 3px solid rgba(255, 107, 53, 0.3);
    outline-offset: 2px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-body {
        padding: 30px 20px;
    }

    .card-header {
        padding: 20px;
        font-size: 24px;
    }

    .form-control {
        padding: 12px 16px;
    }

    .btn {
        padding: 12px 30px;
        font-size: 14px;
    }

    .container {
        padding: 0 10px;
    }
}

@media (max-width: 480px) {
    .card {
        border-radius: 15px;
        margin: 10px;
    }

    .card-header {
        font-size: 20px;
        padding: 15px;
    }

    .card-body {
        padding: 20px 15px;
    }
}

/* Loading State */
.btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
    transform: none;
}

/* Custom Checkbox/Radio Styles */
input[type="checkbox"],
input[type="radio"] {
    accent-color: #ff6b35;
}

/* Additional styles for Login Form */

/* Container spacing */
.mt-5 {
    margin-top: 3rem !important;
}

.mb-5 {
    margin-bottom: 3rem !important;
}

/* Column width for login */
.col-md-6 {
    width: 100%;
    max-width: 450px;
}

/* Enhanced card styles */
.shadow-lg {
    box-shadow: 0 20px 60px rgba(255, 165, 0, 0.1),
                0 8px 25px rgba(0, 0, 0, 0.3) !important;
}

.rounded-4 {
    border-radius: 20px !important;
}

.border-0 {
    border: none !important;
}

/* Card body padding */
.px-4 {
    padding-left: 30px !important;
    padding-right: 30px !important;
}

.py-4 {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
}

/* Form labels */
.form-label {
    font-weight: 600;
    color: #333333;
    margin-bottom: 8px;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
}

/* Form spacing */
.mb-3 {
    margin-bottom: 25px !important;
}

/* Form check styles */
.form-check {
    padding-left: 0;
    margin-bottom: 25px;
}

.form-check-input {
    width: 18px;
    height: 18px;
    margin-top: 0.25em;
    margin-right: 12px;
    vertical-align: top;
    background-color: #fff;
    border: 2px solid #e5e5e5;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.form-check-input:checked {
    background-color: #ff6b35;
    border-color: #ff6b35;
}

.form-check-input:focus {
    border-color: #ff6b35;
    box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
}

.form-check-label {
    color: #333333;
    font-weight: 500;
    font-size: 14px;
    cursor: pointer;
    text-transform: none;
    letter-spacing: normal;
}

/* Flex utilities */
.d-flex {
    display: flex !important;
}

.justify-content-between {
    justify-content: space-between !important;
}

.align-items-center {
    align-items: center !important;
}

/* Button variations */
.btn.px-4 {
    padding-left: 40px !important;
    padding-right: 40px !important;
}

.btn-link {
    background: none;
    border: none;
    color: #ff6b35;
    font-weight: 500;
    text-decoration: none;
    padding: 8px 0;
    border-radius: 8px;
    transition: all 0.3s ease;
    font-size: 14px;
}

.btn-link:hover {
    color: #ff8c42;
    text-decoration: none;
    background: rgba(255, 107, 53, 0.05);
    padding: 8px 12px;
    transform: none;
    box-shadow: none;
}

.btn-link:focus {
    outline: 2px solid rgba(255, 107, 53, 0.3);
    outline-offset: 2px;
}

.text-decoration-none {
    text-decoration: none !important;
}

/* Responsive adjustments for login form */
@media (max-width: 768px) {
    .col-md-6 {
        max-width: 100%;
        margin: 0 10px;
    }

    .px-4 {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }

    .py-4 {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }

    .d-flex.justify-content-between {
        flex-direction: column;
        gap: 15px;
    }

    .btn.px-4 {
        width: 100%;
        margin-bottom: 10px;
    }

    .btn-link {
        text-align: center;
        width: 100%;
    }
}

@media (max-width: 480px) {
    .mt-5 {
        margin-top: 2rem !important;
    }

    .mb-5 {
        margin-bottom: 2rem !important;
    }
}
</style>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-header">
                    {{ __('Login') }}
                </div>
                <div class="card-body px-4 py-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}"
                                   required autocomplete="email" autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="remember" id="remember"
                                   {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

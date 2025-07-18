@extends('layouts.auth')

@section('content')
<style>
    body {
        background:white;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
    }

    .container {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .card {
        border-radius: 20px;
        border: none;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        overflow: hidden;
        border: 1px solid rgba(253, 126, 20, 0.2);
    }

    .card-header {
        background: linear-gradient(45deg, #1a1a1a, #fd7e14);
        color: white;
        font-size: 1.8rem;
        font-weight: 600;
        text-align: center;
        padding: 2rem;
        border-radius: 0;
        position: relative;
        overflow: hidden;
    }

    .card-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .card-header:hover::before {
        left: 100%;
    }

    .card-body {
        padding: 2.5rem;
    }

    .form-label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.75rem;
        display: block;
    }

    .form-control {
        border-radius: 12px;
        border: 2px solid #e2e8f0;
        padding: 0.875rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
        background: #f8fafc;
        width: 100%;
    }

    .form-control:focus {
        border-color: #fd7e14;
        background: white;
        box-shadow: 0 0 0 3px rgba(253, 126, 20, 0.1);
        outline: none;
        transform: translateY(-2px);
    }

    .form-control.is-invalid {
        border-color: #e53e3e;
        background: #fed7d7;
    }

    .btn-primary {
        background: linear-gradient(45deg, #1a1a1a, #fd7e14);
        border: none;
        padding: 0.875rem 2rem;
        border-radius: 12px;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(253, 126, 20, 0.3);
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    .btn-link {
        color: #fd7e14;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 500;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-link:hover {
        background: rgba(253, 126, 20, 0.1);
        transform: translateY(-1px);
        color: #e6711a;
    }

    .invalid-feedback {
        font-size: 0.875rem;
        color: #e53e3e;
        margin-top: 0.5rem;
        font-weight: 500;
    }

    .mb-3 {
        margin-bottom: 1.75rem;
    }

    .form-check {
        margin-bottom: 2rem;
    }

    .form-check-input {
        width: 1.25rem;
        height: 1.25rem;
        margin-top: 0.125rem;
        margin-right: 0.75rem;
        accent-color: #fd7e14;
        border-radius: 4px;
    }

    .form-check-label {
        font-size: 1rem;
        color: #1a1a1a;
        font-weight: 500;
        cursor: pointer;
        user-select: none;
    }

    .d-flex {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    @media (min-width: 576px) {
        .d-flex {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
    }

    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }

        .card-header {
            padding: 1.5rem;
            font-size: 1.5rem;
        }

        .container {
            padding-top: 2rem;
            padding-bottom: 2rem;
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

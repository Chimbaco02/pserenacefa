@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center min-vh-100 align-items-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="row g-0">
                    <!-- Imagen lateral -->
                    <div class="col-md-5 d-none d-md-block">
                        <div class="h-100 bg-primary" style="background: url('../img/2.jpg') center/cover; border-radius: 0.375rem 0 0 0.375rem;"></div>
                    </div>
                    
                    <!-- Formulario -->
                    <div class="col-md-7">
                        <div class="card-header bg-transparent border-0 text-center pt-4">
                            <h3 class="fw-bold text-success">{{ __('Iniciar Sesión') }}</h3>
                            <p class="text-muted">Ingrese sus credenciales para acceder</p>
                        </div>
                        
                        <div class="card-body px-4 py-3">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="mb-4">
                                    <label for="email" class="form-label fw-semibold text-dark">{{ __('Correo Electrónico') }}</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="bi bi-envelope"></i>
                                        </span>
                                        <input id="email" type="email" class="form-control border-start-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ejemplo@correo.com">
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label fw-semibold text-dark">{{ __('Contraseña') }}</label>
                                        @if (Route::has('password.request'))
                                            <a class="text-danger text-decoration-none small" href="{{ route('password.request') }}">
                                                {{ __('¿Olvidó su contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input id="password" type="password" class="form-control border-start-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                                        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label small" for="remember">
                                            {{ __('Recordar mis datos') }}
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="d-grid mb-4">
                                    <button type="submit" class="btn btn-success py-2 fw-bold">
                                        {{ __('Ingresar') }}
                                    </button>
                                </div>
                                
                                <div class="text-center">
                                    <p class="text-muted small mb-0">¿No tiene una cuenta? <a href="" class="text-primary text-decoration-none">Solicita El Registro</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<style>
    body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        min-height: 100vh;
    }
    .card {
        border-radius: 0.5rem;
        overflow: hidden;
    }
    .form-control:focus, .btn-primary:focus {
        box-shadow: 0 0 0 0.25rem rgba(48, 242, 5, 0.25);
        border-color: #19d21f;
    }
    .btn-primary {
        background-color: #0dfd1d;
        border-color: #0d6efd;
        transition: all 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0bd726;
        border-color: #0a58ca;
        transform: translateY(-2px);
    }
</style>
@endpush
@endsection
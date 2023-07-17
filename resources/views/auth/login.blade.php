@extends('layouts.app')

@section('content')
<div class="container">

    <br>
    <div class="card bg-white col-lg-5 shadow-lg" style="padding-left: 1.5%; padding-right: 1.5%; margin-top: 3%; margin-left: auto; margin-right: auto; border-radius:2%; border:none;">

        <div class="row">
            <div class="card-body">


                <img src="{{ asset('img/easytec-transparente-2.png') }}" width="260" alt="Easytec Brasil" loading="Easytec Brasil" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">{{ __('E-mail') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">{{ __('Senha') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>{{ __('Lembrar-me') }}</span>
                    </label><br>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        @if (Route::has('password.request'))
                        <a class="small text-muted" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                        @endif

                        <button type="submit" class="btn btn-dark">
                            {{ __('Entrar') }}
                        </button>
                    </div>
                </form>
                <div>
                </div>
            </div>
        </div>

        @endsection
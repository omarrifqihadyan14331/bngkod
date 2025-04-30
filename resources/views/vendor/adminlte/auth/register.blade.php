<<<<<<< HEAD
@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@section('auth_header', __('Register a new membership'))

@section('auth_body')
    <form action="{{ route('register') }}" method="post">
        @csrf

        {{-- Full Name --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" placeholder="{{ __('Full name') }}" autofocus autocomplete="name">
=======
@extends('adminlte::auth.auth-page', ['authType' => 'register'])

@php
    $loginUrl = View::getSection('login_url') ?? config('adminlte.login_url', 'login');
    $registerUrl = View::getSection('register_url') ?? config('adminlte.register_url', 'register');

    if (config('adminlte.use_route_url', false)) {
        $loginUrl = $loginUrl ? route($loginUrl) : '';
        $registerUrl = $registerUrl ? route($registerUrl) : '';
    } else {
        $loginUrl = $loginUrl ? url($loginUrl) : '';
        $registerUrl = $registerUrl ? url($registerUrl) : '';
    }
@endphp

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')
    <form action="{{ $registerUrl }}" method="post">
        @csrf

        {{-- Name field --}}
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<<<<<<< HEAD
        {{-- Email --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('Email') }}" autocomplete="email">
=======
        {{-- Email field --}}
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<<<<<<< HEAD
        {{-- Password --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="{{ __('Password') }}" autocomplete="new-password">
=======
        {{-- Password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.password') }}">
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<<<<<<< HEAD
        {{-- Password Confirmation --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation" class="form-control"
                placeholder="{{ __('Confirm Password') }}" autocomplete="new-password">
=======
        {{-- Confirm password field --}}
        <div class="input-group mb-3">
            <input type="password" name="password_confirmation"
                class="form-control @error('password_confirmation') is-invalid @enderror"
                placeholder="{{ __('adminlte::adminlte.retype_password') }}">
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>
<<<<<<< HEAD
        </div>

        {{-- Role Selection --}}
        <div class="input-group mb-3">
            <select name="role" class="form-control @error('role') is-invalid @enderror">
                <option value="">Select Role</option>
                <option value="pasien" {{ old('role') == 'pasien' ? 'selected' : '' }}>Pasien</option>
            </select>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user-tag {{ config('adminlte.classes_auth_icon', '') }}"></span>
                </div>
            </div>

            @error('role')
=======

            @error('password_confirmation')
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

<<<<<<< HEAD
        {{-- Register Button --}}
        <button type="submit" class="btn btn-block btn-primary">
            <span class="fas fa-user-plus"></span>
            {{ __('Register') }}
        </button>
    </form>
@endsection

@section('auth_footer')
    <p class="my-0">
        <a href="{{ route('login') }}">
            {{ __('I already have a membership') }}
        </a>
    </p>
@endsection
=======
        {{-- Register button --}}
        <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
            <span class="fas fa-user-plus"></span>
            {{ __('adminlte::adminlte.register') }}
        </button>
    </form>
@stop

@section('auth_footer')
    <p class="my-0">
        <a href="{{ $loginUrl }}">
            {{ __('adminlte::adminlte.i_already_have_a_membership') }}
        </a>
    </p>
@stop
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

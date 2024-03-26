{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.main-app')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Sign in</h1>

        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-field">
                <label for="email" :value="__('Email')">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email address" :value="old('email')" required autofocus />
                <span style="color: red;">@error('email'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="password" :value="__('Password')">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password"/>
                <span style="color: red;">@error('password'){{$message}}@enderror</span>
            </div>

            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember_me" name="remember"/>
                    <label for="remember_me">{{ __('Remember me') }}</label>
                </div>

                <div class="forgot-password">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                    @endif
                </div>

            </div>

            <button type="submit" class="form-btn">Sign in</button>
            
        </form>

        <div class="already-text">
            <p>Don't have an account? <span><a href="/create-account">Create&nbsp;Account</a></span></p>
        </div>
    </div>
</div>
@endsection
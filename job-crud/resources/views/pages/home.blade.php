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
                <input type="email" id="email" name="email" placeholder="Email address" :value="old('email')" required autofocus autocomplete="email"/>
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
                    {{ __('Forgot your password?') }}
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
@extends('layouts.main-app')

@section('title', 'Create account')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Create Your Account</h1>

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-field">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Full name" :value="old('name')" required autofocus autocomplete="name"/>
                <span style="color: red;">@error('name'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email address" :value="old('email')" required autocomplete="email"/>
                <span style="color: red;">@error('email'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required autocomplete="new-password"/>
                <span style="color: red;">@error('password'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password"/>
                <span style="color: red;">@error('password_confirmation'){{$message}}@enderror</span>
            </div>

            <button type="submit" class="form-btn">Create account</button>

        </form>

        <div class="already-text">
            <p>I'm already a member! <span><a href="/login">Sign&nbsp;In</a></span></p>
        </div>
    </div>
</div>
@endsection
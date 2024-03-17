@extends('layouts/main-app')
 
@section('title', 'Create an account')
 
 
@section('content')
<div class="content-container">
    <div class="form-container">
        <h2 class="welcome-back">Create account</h2>
        <p class="access-account">Setup a free account to get started.</p>

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label for="name"><span style="color: red;">@error('name'){{$message}}@enderror</span></label>
            <input type="text" id="name" name="name" placeholder="Full name" value="{{old('name')}}" required autofocus autocomplete="name"/>

            <label for="email"><span style="color: red;">@error('email'){{$message}}@enderror</span></label>
            <input type="email" id="email" name="email" placeholder="Email address" value="{{old('email')}}" required autofocus/>

            <label for="password"><span style="color: red;">@error('password'){{$message}}@enderror</span></label>
            <input type="password" id="password" name="password" placeholder="Password" value="{{old('password')}}" required autocomplete="current-password"/>

            <button class="login-btn">Create account</button>
        </form>
        <div class="sign-up">
            <p>Already have an account? <span><a href="/login">Login</a></span></p>
        </div>
        
    </div>
</div>
@endsection


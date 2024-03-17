@extends('layouts/main-app')
 
@section('title', 'Login')
 
 
@section('content')
<div class="content-container">
    <div class="form-container">
        <h2 class="welcome-back">Welcome back !</h2>
        <p class="access-account">Enter your email and password to access you&nbsp;account.</p>

        <form class="login-form">
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="Email address"/>
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Password"/>
            <button class="login-btn">Login</button>
        </form>
        <div class="sign-up">
            <p>Don't have an account? <span><a href="/create-account">Create an account</a></span></p>
        </div>
        
    </div>
</div>
@endsection
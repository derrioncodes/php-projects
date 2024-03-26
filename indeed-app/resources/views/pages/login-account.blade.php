@extends('layouts.main-app')
 
@section('title', 'Create account')
 
@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Sign in</h1>

        <form class="form">

            <div class="input-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email address"/>
            </div>

            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/>
            </div>

            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember" name="remember"/>
                    <label for="remember">Remember me</label>
                </div>

                <div class="forgot-password"><a href="#">Forgot password?</a></div>
            </div>

            <button class="form-btn">Sign in</button>
            
        </form>

        <div class="already-text">
            <p>Don't have an account? <span><a href="#">Create&nbsp;Account</a></span></p>
        </div>
    </div>
</div>
@endsection

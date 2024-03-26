@extends('layouts.main-app')
 
@section('title', 'Create account')
 
@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Create Your Account</h1>

        <form class="form">
            <div class="input-field">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Full name"/>
            </div>

            <div class="input-field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Email address"/>
            </div>

            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password"/>
            </div>

            <div class="input-field">
                <label for="confirm-password">Confirm Password</label>
                <input type="confirm-password" id="confirm-password" name="confirm-password" placeholder="Confirm password"/>
            </div>

            <button class="form-btn">Create account</button>

        </form>

        <div class="already-text">
            <p>I'm already a member! <span><a href="#">Sign&nbsp;In</a></span></p>
        </div>
    </div>
</div>
@endsection

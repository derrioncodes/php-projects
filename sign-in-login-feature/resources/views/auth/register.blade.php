{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('layouts/main-app')
 
@section('title', 'Create an account')
 
 
@section('content')
<div class="content-container">
    <div class="form-container">
        <h2 class="welcome-back">Create account</h2>
        <p class="access-account">Setup a free account to get started.</p>

        <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name"><span style="color: red;">@error('name'){{$message}}@enderror</span></label>
            <input type="text" id="name" name="name" placeholder="Full name" value="{{old('name')}}" required autofocus />

            <label for="email"><span style="color: red;">@error('email'){{$message}}@enderror</span></label>
            <input type="email" id="email" name="email" placeholder="Email address" value="{{old('email')}}" required autofocus/>

            <label for="password"><span style="color: red;">@error('password'){{$message}}@enderror</span></label>
            <input type="password" id="password" name="password" placeholder="Password" value="{{old('password')}}" required />

            <label for="password_confirmation"><span style="color: red;">@error('password_confirmation'){{$message}}@enderror</span></label>
            <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Password confirmation" required autocomplete="new-password"/>

            <button type="submit" class="login-btn">Create account</button>
        </form>
        <div class="sign-up">
            <p>Already have an account? <span><a href="/login">Login</a></span></p>
        </div>
        
    </div>
</div>
@endsection
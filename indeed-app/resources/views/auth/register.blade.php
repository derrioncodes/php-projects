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

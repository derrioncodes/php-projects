@extends('layouts/main-app')

@section('title', 'Task Manager - Register')

@section('content')
<div class="container px-4 mx-auto">
    <div class="text-center max-w-md mx-auto">
        
        <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">Join for
            free</h2>
        <p class="mb-12 font-medium text-lg text-gray-600 leading-normal">Lorem ipsum dolor sit amet, to the con
            adipiscing. Volutpat tempor to the condim entum.</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    placeholder="First and Last Name" id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus>
                    <span style="color: red;">@error('name') {{$message}} @enderror</span>
            </label>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    placeholder="Email address" id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required autofocus>
                    <span style="color: red;">@error('email') {{$message}} @enderror</span>
            </label>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    placeholder="Enter password" id="password" class="block mt-1 w-full" type="password" name="password" value="{{old('password')}}" required autofocus>
                    <span style="color: red;">@error('password') {{$message}} @enderror</span>
            </label>



            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    placeholder="Confirm password" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" value="{{old('password')}}" required autofocus>
                    <span style="color: red;">@error('password') {{$message}} @enderror</span>
            </label>
            <button
                class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
                type="submit">Create Account</button>
            <p class="font-medium">
                <span>Already have an account?</span>
                <a class="text-indigo-600 hover:text-indigo-700" href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection















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

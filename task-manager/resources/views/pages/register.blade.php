@extends('layouts/main-app')

@section('title', 'Task Manager - Register')

@section('content')
<div class="container px-4 mx-auto">
    <div class="text-center max-w-md mx-auto">
        
        <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">Join for
            free</h2>
        <p class="mb-12 font-medium text-lg text-gray-600 leading-normal">Lorem ipsum dolor sit amet, to the con
            adipiscing. Volutpat tempor to the condim entum.</p>
        <form>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    id="signUpInput2-1" type="text" placeholder="First &amp; Last Name">
            </label>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    id="signUpInput2-2" type="text" placeholder="Email Address">
            </label>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    id="signUpInput2-3" type="password" placeholder="Create Password">
            </label>
            <button
                class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
                type="button">Create Account</button>
            <p class="font-medium">
                <span>Already have an account?</span>
                <a class="text-indigo-600 hover:text-indigo-700" href="#">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
@extends('layouts/app')

@section('title', 'Task Manager - Login')

@section('content')
<div class="container px-4 mx-auto">
    <div class="text-center max-w-md mx-auto">
        
        <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading tracking-px-n leading-tight">Welcome
            Back</h2>
        <p class="mb-12 font-medium text-lg text-gray-600 leading-normal">Lorem ipsum dolor sit amet, to the con
            adipiscing. Volutpat tempor to the condim entum.</p>
        <form>
            <label class="block mb-5">
                <input
                    class="px-4 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    id="signInInput2-1" type="text" placeholder="Email address">
            </label>
            <label class="relative block mb-5">
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2"><a
                        class="text-sm text-indigo-600 hover:text-indigo-700 font-medium" href="#">Forgot Password?</a>
                </div>
                <input
                    class="px-4 pr-36 py-3.5 w-full text-gray-500 font-medium placeholder-gray-500 bg-white outline-none border border-gray-300 rounded-lg focus:ring focus:ring-indigo-300"
                    id="signInInput2-2" type="password" placeholder="Password">
            </label>
            <button
                class="mb-8 py-4 px-9 w-full text-white font-semibold border border-indigo-700 rounded-xl shadow-4xl focus:ring focus:ring-indigo-300 bg-indigo-600 hover:bg-indigo-700 transition ease-in-out duration-200"
                type="button">Sign In</button>
            <p class="font-medium">
                <span>Don't have an account?</span>
                <a class="text-indigo-600 hover:text-indigo-700" href="#">Create free account</a>
            </p>
        </form>
    </div>
</div>
@endsection
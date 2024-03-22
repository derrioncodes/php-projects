{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


@extends('layouts.main-app')

@section('title', 'jobs')

@section('content')
<div class="jobs-container">

    <div class="jobs-header">
        <form class="form">
            <div class="input-field">
                <input type="text" id="search" name="search" placeholder="Search for job"/>
            </div>
        </form>

        <div class="create-job">
            <a href="/add-job">
                <button type="button">Add a job</button>
            </a>
        </div>
    </div>

    {{-- <div class="empty-job">
        <h2>You have not added any jobs</h2>
    </div> --}}


    <div class="job">
        <div class="job-details">
            <h2 class="job-title">Full Stack Web Developer (Workforce)</h2>
            <p class="job-company">Tech Skills Staffing</p>
            <p class="date-added">March 9, 2024</p>
        </div>

        <div class="job-options">
            <i id="options" class="fa fa-ellipsis-v"></i>
        </div>  

        <div class="update-delete-modal-container">
            <p class="edit">Edit</p>
            <p class="delete">Delete</p>
            <p class="cancel">Cancel</p>
        </div>
    </div> 
    
</div>
@endsection






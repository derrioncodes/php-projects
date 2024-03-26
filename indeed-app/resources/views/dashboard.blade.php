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
            <a href="/jobs/create">
                <button type="button">Add a job</button>
            </a>
        </div>
    </div>

    <!-- <div class="empty-job">
        <h2>You have not added any jobs</h2>
    </div> -->


    @foreach ($userJobs as $job)
    <div class="job">
        <div class="job-details">
            <h2 class="job-title">{{$job->position}}</h2>
            <p class="job-company">{{$job->company}}</p>
            <p class="date-added">
                <?php
                $date = $job->created_at;
                echo date_format($date,"F d, Y");
                ?>
            </p>
            
        </div>

        <div class="job-options">
            <i id="options" class="fa fa-ellipsis-v"></i>
        </div>  

        <div class="update-delete-modal-container">
            <a href="/jobs/{{$job->id}}/edit"><p class="edit">Edit</p></a>
            {{-- <a href="#"><p class="delete">Delete</p></a> --}}
            <form method="POST" action="/jobs/{{$job->id}}" style="height: 100%;">
                @csrf
                @method('DELETE')
                <a href="/jobs/{{$job->id}}" onclick="event.preventDefault();
                this.closest('form').submit();"><p class="delete">Delete</p></a>
            </form>
            <p class="cancel">Cancel</p>
        </div>
    </div>
    @endforeach   
</div>
@endsection

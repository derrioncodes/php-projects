@extends('layouts.main-app')

@section('title', 'Edit a job')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Edit a job</h1>

        

        <form class="form" method="POST" action="/jobs/{{$job->id}}">
            @csrf
            @method('PUT')
            <div class="input-field">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="{{$job->position}}"/>
                <span style="color: red;">@error('position'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="{{$job->company}}"/>
                <span style="color: red;">@error('company'){{$message}}@enderror</span>
            </div>

            <button class="form-btn">Edit job</button>

            <a href="/dashboard"><button type="button" class="form-btn cancel">Cancel</button></a>

        </form>
    </div>
</div>
@endsection
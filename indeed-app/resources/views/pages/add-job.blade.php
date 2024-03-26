@extends('layouts.main-app')

@section('title', 'Add a job')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Add a job</h1>

        <form class="form" method="POST" action="/jobs">
            @csrf
            <div class="input-field">
                <label for="position">Position</label>
                <input type="text" id="position" name="position" placeholder="Position"/>
                <span style="color: red;">@error('position'){{$message}}@enderror</span>
            </div>

            <div class="input-field">
                <label for="company">Company</label>
                <input type="text" id="company" name="company" placeholder="Company"/>
                <span style="color: red;">@error('company'){{$message}}@enderror</span>
            </div>

            <button class="form-btn" type="submit">Add job to list</button>

            <a href="/dashboard"><button type="button" class="form-btn cancel">Cancel</button></a>

        </form>
    </div>
</div>
@endsection
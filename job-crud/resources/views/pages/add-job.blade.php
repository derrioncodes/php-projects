@extends('layouts.main-app')

@section('title', 'Create account')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="edit-icon">
            <i class="fa fa-edit"></i>
        </div>
        
        <h1 class="form-title">Add a job</h1>

        <form class="form">
            <div class="input-field">
                <label for="fullname">Position</label>
                <input type="text" id="fullname" name="fullname" placeholder="Position"/>
            </div>

            <div class="input-field">
                <label for="company">Company</label>
                <input type="email" id="email" name="email" placeholder="Company"/>
            </div>

            <button class="form-btn">Add job to list</button>

            <a href="/dashboard"><button type="button" class="form-btn cancel">Cancel</button></a>

        </form>
    </div>
</div>
@endsection
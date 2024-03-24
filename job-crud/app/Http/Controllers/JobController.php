<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\User;
// use App\Providers\AppServiceProvider;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $user = Auth::user();


        // $jobs = User::find($user->id)->jobs;

        

        // return view('dashboard', [
        //     "jobs" => $jobs
        // ]);

        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/add-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        return view('pages/add-job');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('pages/edit-job');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('pages/edit-job');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        return view('pages/edit-job');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}

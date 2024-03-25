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
        $user = Auth::user();

        $job = new Job;
        $job->user_id = $user->id;
        $job->position = $request->position;
        $job->company = $request->company;

 
        $job->save();
        // return view('pages/add-job');
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        // $job = Job::find($id);
        // return $job;
        return view('pages/edit-job');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job, $id)
    {
        $job = Job::find($id);
        return view('pages/edit-job', [
            "job" => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, $id)
    {

        $user = Auth::user();

        $job = Job::find($id);
        $job->user_id = $user->id;
        $job->position = $request->position;
        $job->company = $request->company;
 
        $job->save();
        // return view('pages/add-job');
        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job, $id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect('dashboard');
    }
}

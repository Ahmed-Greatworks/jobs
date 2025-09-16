<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // index method to list jobs
    public function index() {
        return view('jobs.index', ['jobs' => Job::with('employer')->latest()->simplePaginate(3)]);
    }

    // show method to display a single job
    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    // create method to show the job creation form
    public function create() {
        return view('jobs.create');
    }

    // store method to save a new job
    public function store() {
        $inputs = request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        // Hardcode employer_id for now
        $inputs['employer_id'] = 5;

        Job::create($inputs);

        return redirect('/jobs');
    }

    // edit method to show the job edit form
    public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    // update method to save changes to an existing job
    public function update(Job $job) {
        $inputs = request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required'
        ]);

        $job->update($inputs);

        return redirect('/jobs');
    }

    // destroy method to delete a job
    public function destroy(Job $job) {
        $job->delete();

        return redirect('/jobs');
    }
}
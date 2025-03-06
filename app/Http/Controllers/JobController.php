<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function index()
    {
        $trabajos = Job::with("employer")->latest()->paginate(3);
        return view('jobs.index', [
            'trabajos' => $trabajos
        ]);
        ;
    }

    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {
        request()->validate([

            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],

        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => random_int(1, 100),
        ]);

        return redirect('/jobs');
    }
    public function show(Job $job)
    {
        return view('jobs.show', ['variableTrabajoParaJobBladePHP' => $job]);

    }
    public function edit(Job $job)
    {
        return view('jobs.edit', ['variableTrabajoParaJobBladePHP' => $job]);

    }
    public function update(Job $job)
    {
        //authorize(on hold...)
        //validate
        request()->validate([

            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],

        ]);

        //update the job


        $job->title = request('title');
        $job->salary = request('salary');
        $job->save();

        //redirect to the job page
        return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job)
    {
        //$job = Job::findOrFail($id);
        $job->delete();

        return redirect('/jobs/');
    }
}

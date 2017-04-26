<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Job;

use Illuminate\Support\Collection;

class JobController extends Controller
{
    
    public function allJobs(Request $request)
    {
        $jobs = Job::all();
        foreach  ($jobs as $job) {
            $user = User::where('id', $job->user_id)->first();
            $job->user = $user;
        }
        return view('jobs', compact('jobs'));
    }
    
    public function newJob(Request $request)
    {
        
        if (\Auth::user())
        {
            return view('new-job');
        }
        else
        {
             return redirect('access-denied');
        }
    }

    public function viewJob(Request $request, Job $job)
    {
        $user = User::where('id', $job->user_id)->first();
        return view('job-single', compact('job', 'user'));
    }
    
    public function goToEditJob(Request $request, Job $job)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $job->user_id || \Auth::user()->isAdmin()))
        {
            return view('edit-job', compact('job'));
        }
        else
        {
            return redirect('access-denied');
        }
    }
    
    public function editJob(Request $request, Job $job)
    {
        
        if (\Auth::user() && (\Auth::user()->id == $job->user_id || \Auth::user()->isAdmin()))
        {
            if (strlen($request->title) > 0) {
                $job->title = $request->title;
            }
            
            if (strlen($request->department) > 0) {
                $job->department = $request->department;
            }
            
            if (strlen($request->company) > 0) {
                $job->company = $request->company;
            }
            
            if (strlen($request->location) > 0) {
                $job->location = $request->location;
            }
            
            if (strlen($request->salary) > 0) {
                $job->salary = $request->salary;
            }
            
            if (strlen($request->{'closing-date'}) > 0) {
                $job->{'closing-date'} = $request->{'closing-date'};
            }
            
            if (strlen($request->hours) > 0) {
                $job->hours =  $request->hours;
            }
            
            if (strlen($request->description) > 0) {
                $job->description =  $request->description;
            }
            
            $job->save();
            
            return redirect('job-single/' . $job->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }
    
    public function addJob(Request $request)
    {
        
        $job = new Job;
        
        if(\Auth::user())
        {

            if (strlen($request->title) > 0) {
                $job->title = $request->title;
            }
            
            if (strlen($request->department) > 0) {
                $job->department = $request->department;
            }
            
            if (strlen($request->company) > 0) {
                $job->company = $request->company;
            }
            
            if (strlen($request->location) > 0) {
                $job->location = $request->location;
            }
            
            if (strlen($request->salary) > 0) {
                $job->salary = $request->salary;
            }
            
            if (strlen($request->{'closing-date'}) > 0) {
                $job->{'closing-date'} = $request->{'closing-date'};
            }
            
            if (strlen($request->hours) > 0) {
                $job->hours =  $request->hours;
            }
            
            if (strlen($request->description) > 0) {
                $job->description =  $request->description;
            }
            
            $job->status = 'pending';
            
            $job->user_id = \Auth::user()->id;
            
            $job->save();
            
            return redirect('job-single/' . $job->id);
        }
        else
        {
            return redirect('access-denied');
        }
        
    }

}

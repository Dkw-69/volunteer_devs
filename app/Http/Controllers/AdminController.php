<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use \App\Models\Job;
use \App\Models\Image;
use Auth;

class AdminController extends Controller{

    // Show logged in admin dashboard
    public function index(){

        // restrict logged in non-admin users from accessing the admin dashboard 
        $redirectType = Auth::user()->id;
        if($redirectType != 1){
            return redirect()->back()->with('message', 'Anauthorized action!');
        }

        // all profiles in DB
        $profile_count = User::count();
        // all jobs in DB
        $job_count = Job::count();

        return view('admin.dashboard', [
            'page_title' => 'Admin|Dashboard', 
            'profile_count' => $profile_count,
            'job_count' => $job_count
        ]);
    }

    // show all profiles on admin side
    public function adminShowProfiles(){

        $profile_image = new Image;
        $user_profiles = User::paginate(12);

        //dd($user_profiles->id);
        // loop through users and resize image
        foreach ($user_profiles as $key => $profiles) {
            $user_profiles[$key]->profile_img = $profile_image->get_thumb('uploads/'.$profiles->profile_img);
        }

        $data['profiles'] = $user_profiles;
        $data['page_title'] = 'Volunteer Profiles';
        return view('admin.profiles', $data);
    }

    // delete a profile on admin
    public function adminDestroyProfile(User $profile){
        
        //don't delete admin's profile
        if($profile->id === 1){
            return redirect()->back();
        }
        // only admin allowed to delete other profiles
        elseif(Auth::user()->id === 1){
            $profile->delete();
            return redirect()->back();

        }else{
            return redirect()->back();
        }
    }

    // show all jobs on admin side
    public function adminShowJobs(){

        $company_logo = new Image;
        $all_jobs = Job::latest()->paginate(12);

        // loop through users and resize image
        foreach ($all_jobs as $key => $jobs) {
            $all_jobs[$key]->ngo_logo = $company_logo->get_thumb('logos/'.$jobs->ngo_logo);
        }

        $data['jobs'] = $all_jobs;
        $data['page_title'] = 'NGO Jobs';
        return view('admin.jobs', $data);
    }

    // show single job on admin
    public function adminSingleJob(Job $job){
        return view('admin.show', ['page_title' => 'Volunteer Job Details', 'job' => $job]);
    }

    // show job form on admin
    public function adminEditJob(Job $job){
        return view('admin.edit', ['page_title' => 'Edit Volunteer Job', 'job' => $job]);
    }

    // update/save the job
    public function adminUpdateJob(Request $req, Job $job){

        //dd($req->all());

        // only admin to update job
        if(Auth::user()->id === 1){
            // validate data
            $formFields = $req->validate([
                'NGO' => 'required|string|max:555',
                'title' => 'required|string|max:555',
                'email' => 'required|string|email|max:255',
                'location' => 'required|max:200',
                'website' => 'string|max:200',
                'description' => 'required|string'
            ]);

            // check if there was a logo uploaded
            if($req->hasFile('ngo_logo')){
                // add the image to the formfields data and store it
                $formFields['ngo_logo'] = $req->file('ngo_logo')->store('/', ['disk' => 'profiles_disk']);
            }

            // save the data
            $job->update($formFields);
            return redirect('/admin/jobs');;
            }
        return redirect()->back();
    }

    // delete a job on admin
    public function adminDestroyJob(Job $job){
        // only admin allowed to delete a job
        if(Auth::user()->id === 1){
            $job->delete();
            return redirect()->back();

        }else{
            return redirect()->back();
        }
    }

    
}

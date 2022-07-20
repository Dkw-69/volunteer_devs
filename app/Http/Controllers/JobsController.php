<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Job;
use \App\Models\Image;



class JobsController extends Controller{
    
    // show jobs index page
    public function index(Request $req){
        
        // search and paginate
        if($req->filled('search')){
            $all_jobs = Job::where('title', 'LIKE', "%$req->search%")->orWhere('description', 'LIKE', "%{$req->search}%")
            ->orWhere('location', 'LIKE', "%$req->search%")
            ->paginate(8);
        }else{
            $all_jobs = Job::latest()->paginate(8);
        }

        $company_logo = new Image;

        // loop through jobs and resize image
        foreach ($all_jobs as $key => $jobs) {
            $all_jobs[$key]->ngo_logo = $company_logo->get_thumb('logos/'.$jobs->ngo_logo);
        }
        
        //dd($jobs->ngo_logo);

        $data['jobs'] = $all_jobs;
        return view('jobs.index', $data);
    }

    // show single job
    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }

    // show create jobs form
    public function create(){
        return view('jobs.create');
    }

    // create/store a job
    public function store(Request $req){
         //dd($req->all());
        
        // validate data
        $formFields = $req->validate([
            'NGO' => 'required|string|max:555',
            'title' => 'required|string|max:555',
            'email' => 'required|string|email|max:255|unique:jobs',
            'location' => 'required|max:200',
            'website' => 'string|max:200',
            'description' => 'required|string'
        ]);

        // check if there was a logo uploaded
        if($req->hasFile('ngo_logo')){
            // add the image to the formfields data and store it
            $formFields['ngo_logo'] = $req->file('ngo_logo')->store('/', ['disk' => 'logos_disk']);
        }

        // create timestamps
        $formFields['created_at'] = date('Y-m-d H:i:s');
        $formFields['updated_at'] = date('Y-m-d H:i:s');

        // save the data
        Job::create($formFields);

        return redirect('/jobs')->with('message', 'Job created successfully!');
    }
}

/* 
{{$job->ngo_logo ? url($job->ngo_logo) : url('main/images/free_logo.jpg')}}

$table->string('ngo_logo')->nullable();
$table->string('NGO');
$table->string('title');
$table->string('email')->unique();
$table->string('location');
$table->string('website')->nullable();
$table->longText('description');

onerror="this.src='./main/images/free_logo.jpg'"



 $mail->Host = 'webtrybe.com'; // Specify main and backup SMTP servers
 $mail->SMTPAuth = true; // Enable SMTP authentication
 $mail->Username = 'admin@webtrybe.com'; // SMTP username
 $mail->Password = '#!;=XVF-2900!b44'; // SMTP password 
 $mail->SMTPSecure = 'tls'; // Enable TLS encryption, [ICODE]ssl[/ICODE] also accepted
 $mail->Port = 587; // TCP port to connect to 465

 */

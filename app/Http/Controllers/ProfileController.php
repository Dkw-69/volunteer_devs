<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use \App\Models\User;
use \App\Models\Image;
use Auth;
// use \App\Models\Profile;


class ProfileController extends Controller{
    
    // show all profiles page
    public function index(Request $req){

        // search and paginate
        if($req->filled('search')){
            $user_profiles = User::where('position', 'LIKE', "%$req->search%")->orWhere('experience', 'LIKE', "%{$req->search}%")
            ->orWhere('languages', 'LIKE', "%$req->search%")
            ->orWhere('about', 'LIKE', "%$req->search%")
            ->paginate(8);
        }else{
            $user_profiles = User::latest()->paginate(8);
        }

        $profile_image = new Image;
        //$user_profiles = User::latest()->paginate(12);

        // loop through users and resize image
        foreach ($user_profiles as $key => $profiles) {
            $user_profiles[$key]->profile_img = $profile_image->get_thumb('uploads/'.$profiles->profile_img);
        }

        // dd($profiles->profile_img);

        $data['profiles'] = $user_profiles;

        return view('profiles.index', $data);
    }

    // show single profile
    public function show(User $profile){

        // reload back if id 1 is typed on url
        if($profile->id == 1){
            return redirect()->back();
        }
        return view('profiles.show', ['profile' => $profile]);
    }

    // show dashboard
    public function showProfile(User $profile){
        return view('profiles.dashboard', ['profile' => $profile]);
    }

    // show register form
    public function register(){
        return view('profiles.register');
    }

    // create new profile
    public function store(Request $req){
        
        // validate the data first
        $formFields = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8',
            'position' => 'required|string|max:255',
            'profile_img' => 'mimes:jpeg,jpg,png|size:4128',
            'experience' => 'required|string|max:255',
            'languages' => 'required|string|max:500',
            'github_link' => 'required|string',
            'linkedin_link' => 'required|string',
            'about' => 'required'
        ]);

        // check if there was an image uploaded
        if($req->hasFile('profile_img')){
            // add the image to the formfields data and store it
            $formFields['profile_img'] = $req->file('profile_img')->store('/', ['disk' => 'profiles_disk']);
        }

        // hash the password
        $formFields['password'] = bcrypt($formFields['password']);

        // create timestamps
        $formFields['created_at'] = date('Y-m-d H:i:s');
        $formFields['updated_at'] = date('Y-m-d H:i:s');
        
        // create the user
        $user = User::create($formFields);
        
        // login the new user
        auth()->login($user);

        return redirect('/dashboard')->with('message', 'Profile created and logged in successfully');
    }

    // show edit form
    public function edit(User $profile){
        return view('profiles.edit', ['profile' => $profile]);
    }

    // edit & save profile
    public function update(Request $req, User $profile){

        // make sure logged in user is owner of the profile
        if(Auth::user()->id != $profile->id){
            return redirect()->back();
        }

        // validate data
        $formFields = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'position' => 'required|string',
            'experience' => 'required|string',
            'languages' => 'required|string',
            'github_link' => 'required|string',
            'linkedin_link' => 'required|string',
            'about' => 'required'
        ]);

        // check if there was an image uploaded
        if($req->hasFile('profile_img')){
            // add the profile_img to the data
            $formFields['profile_img'] = $req->file('profile_img')->store('/', ['disk' => 'profiles_disk']);
        }

        // save the data
        $profile->update($formFields);
        return redirect('/dashboard')->with('message', 'Profile updated successfully!');
    }

    // delete profile
    public function destroy(User $profile){

        // admin's profile cannot be destroyed
        if($profile->id === 1){
            return redirect()->back()->with('message', 'Cannot delete this profile!');
        }
        // only admin and logged in user allowed to delete
        elseif(Auth::user()->id === 1 || Auth::user()->id === $profile->id){
            //dd($profile->id);
            $profile->delete();
            return redirect('/')->with('message', 'Profile Deleted successfully');
        }else{
            return redirect()->back()->with('message', 'Anauthorized action!');
        }
    }

    // logout the user
    public function logout(Request $req){
        
        // remove the authentication info from user's session
        auth()->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out successfully');
    }

    // show login form
    public function login(){
        return view('profiles.login');
    }

    // authenticate the user
    public function authenticate(Request $req){
        
        // validate the data first
        $formFields = $req->validate([
            'email' => 'required|string|email',
            'password' => 'required|min:8'
        ]);

        // try to authenticate user
        if(auth()->attempt($formFields)){
            // regenerate session id
            $req->session()->regenerate();
            // check who is logged in and redirect
            $redirectType = Auth::user()->id;
            return redirect($redirectType == 1 ? '/admin' : '/dashboard')->with('message', 'Logged in successfully');
            //return redirect('/dashboard')->with('message', 'Logged in successfully');
        }

        // if failed, show vague error
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}

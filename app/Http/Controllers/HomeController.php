<?php

namespace App\Http\Controllers;
use \App\Models\User;
use \App\Models\Image;

use Illuminate\Http\Request;

class HomeController extends Controller{
    
    // show home page
    public function index(){

        $profile_image = new Image;
        $user_profiles = User::paginate(9);

        foreach ($user_profiles as $key => $profiles) {
            $user_profiles[$key]->profile_img = $profile_image->get_thumb('uploads/'.$profiles->profile_img);
        }

        // dd($profiles->profile_img);

        $data['profiles'] = $user_profiles;

        return view('index', $data);
    }

    // show about page
    public function about(){
        return view('pages.about');
    }
}

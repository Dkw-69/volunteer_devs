<x-layout>

<section class="show-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0 profile_image">

                                <img src="{{url('uploads/'.$profile->profile_img)}}" onerror="this.src='../main/images/free_profile.jpg'" width="350" height="350" alt="profile image">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 mb-0">{{$profile->name}}</h3>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><i class="fa-solid fa-laptop-file profile_icons"></i><span 
                                        class="display-26 text-secondary me-2 font-weight-600">Position:</span> {{$profile->position}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><i class="fa-solid fa-briefcase profile_icons"></i> <span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> {{$profile->experience}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><i class="fa-solid fa-gear profile_icons"></i> <span class="display-26 text-secondary me-2 font-weight-600">Skills:</span> {{$profile->languages}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><i class="fa-brands fa-github-square profile_icons"></i> <span class="display-26 text-secondary me-2 font-weight-600">Github:</span> {{$profile->github_link}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><i class="fa-brands fa-linkedin profile_icons"></i> <span class="display-26 text-secondary me-2 font-weight-600">Linkedin:</span> {{$profile->linkedin_link}}</li>
                                </ul>
                                <button class="profile_button px-5"><a style="color: #fff;" href="mailto:{{$profile->email}}">Message Now</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div>
                    <i class="fa-solid fa-address-card profile_icons"></i> <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                    <p>{{$profile->about}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

</x-layout>
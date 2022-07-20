@include('admin.header')
        @include('admin.sidebar')

        <div id="page-wrapper">
                <div class="">
                    <div class="row">
                         <div id="page-inner">
                                <h2>{{$page_title}}</h2>
                                <hr>
                                <div style="margin-left: 25px;">
                                        <div class="logo ml-3 mb-3">
                                        <img src="{{url('logos/'.$job->ngo_logo)}}" onerror="this.src='../../main/images/free_profile.jpg'" width="100" height="100"  alt="Logo" class="rounded-circle">
                                </div>
                                <div class="card-title">
                                        <p class="heading"><i class="fa-solid fa-briefcase mr-2"></i> {{$job->title}}</p>
                                </div>
                                <div>
                                        <p class="job_details">Full Job Details:</p>
                                </div>
                                <div>
                                        <i class="fa-solid fa-file-signature mr-2"></i> <small class="job_helpers">NGO's Name:</small>
                                        <p>{{$job->NGO}}</p>
                                </div>
                                <div>
                                        <i class="fa-solid fa-location-dot mr-2"></i>  <small class="job_helpers">Job Location:</small>
                                        <p>{{$job->location}}</p>
                                </div>
                                <div>
                                        <i class="fa-solid fa-link mr-2"></i> <small class="job_helpers">Website</small>
                                        <p><a style="font-size: 12px;color: #04b07e;" href="{{$job->website}}" target="_blank">{{$job->website}}</a></p>
                                </div>
                                <div>
                                        <small class="job_helpers">Job Description:</small>
                                        <p>{{$job->description}}</p>
                                </div>
                                </div>
                         </div>
                    </div>
                </div>
        </div>

@include('admin.footer')
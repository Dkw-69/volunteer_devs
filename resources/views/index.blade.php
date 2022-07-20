<x-layout>

  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Professional Developers Ready to<br>Volunteer</h1>
      <h6 class="font-weight-normal text-muted pb-3">A platform where <b>NGOs</b> can request assistance on their projects from the industry's best.</h6>
      <div>
        <a href="{{url('profiles/register')}}">
          <button class="btn btn-opacity-light mr-1">Get started</button>
        </a>
        <a href="{{url('about')}}">
          <button class="btn btn-opacity-success ml-1">Learn more</button>
        </a>
      </div>
      <img src="{{url('main/images/Group171.svg')}}" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">  
      <section class="customer-feedback pt-5" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Explore Top Talent</h2>
            <h6 class="section-subtitle text-muted m-0">Skilled and friendly professionals ready to assist you.</h6>
          </div>
          @unless(count($profiles) == 0)
            @foreach($profiles as $profile)
                @if($profile->id == 1) @continue @endif
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="card p-3 py-4 mb-5">
                    <div class="text-center"> 
                      <img src="<?php echo $profile->profile_img;?>" onerror="this.src='./main/images/free_profile.jpg'" width="100" height="100" class="rounded-circle">
                        <h4 class="mt-2">{{$profile->name}}</h4>
                        <span class="mt-1 clearfix">{{$profile->position}}</span>
                        <span>
                          <small style="color: #fc7341;">Experience: {{$profile->experience}}</small>
                        </span>
                        <hr class="line">
                          <div class="social-buttons mt-5"> 
                             <a href="{{$profile->github_link}}" target="_blank">
                               <button class="neo-button"><i class="fa-brands fa-github"></i></button> 
                             </a>
                             <a href="{{$profile->linkedin_link}}" target="_blank">
                               <button class="neo-button"><i class="fa-brands fa-linkedin-in"></i></button> 
                             </a>
                          </div>
                         <div class="profile mt-5">
                           <a href="{{'profiles/'.$profile->id}}">
                             <button class="profile_button px-5">View Profile</button>
                           </a>
                        </div>
                    </div>
                  </div>
                </div>
            @endforeach
          @else
            <p style="color: #ccc;">No profiles found</p>
          @endunless
  </div>
</section>
<div class="mt-2 p-1">
  {{$profiles->links()}}
</div>
</div>
</div>

  

</x-layout>
     
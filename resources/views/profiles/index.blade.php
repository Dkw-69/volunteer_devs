<x-layout>
	
	<div class="container mt-5">
		<div class="row">
			<div class="container">
				<div class="row height d-flex justify-content-center align-items-center">
				  <div class="col-md-6">
				    <form action="{{url('profiles/')}}" role="search">
					    <div class="form">
					      <i class="fa fa-search"></i>
					      <input type="text"name="search" class="form-control form-input" value="{{ request()->get('search') }}" placeholder="Search volunteers...">
					      <input type="submit" hidden />
					      <span class="left-pan"><i class="fa-solid fa-laptop-code"></i></span>
					    </div>
					</form>
				  </div>
				</div>
			</div>
			<div class="col-12 text-center mt-4 pb-5">
			    <h2>Ready to Help</h2>
			    <h6 class="section-subtitle text-muted m-0">Volunteers willing to walk with you.</h6>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
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
		                      <!-- href link will filter skills tags according to tag clicked -->
		                      <p style="font-size: 13px; color: #ccc;">{{$profile->languages}}</p>
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
				                 <button class="profile_button px-5">View profile</button>
				               </a>
				            </div>
				        </div>
				      </div>
				  </div>
				@endforeach
			@else
	        	<div class="text-center"><p style="color: #ccc;">No profiles found</p></div>
	      	@endunless
				</div>
		<div class="mt-2 p-1">
          {{$profiles->links()}}
        </div>
</div>
</x-layout>
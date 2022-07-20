@include('partials._custom-header')

	<div class="registration-form">
	    <form method="POST" action="{{url('profiles/'.Auth::user()->id)}}" enctype="multipart/form-data">
	    	@csrf
	    	@method('PUT')
            <div class="form-icon">
                <span><i class="fa-solid fa-user-pen"></i></span>
            </div>
            <h4 class="text-center mb-4">Edit Your Profile</h4>
            <div class="form-group">
                <input type="text" class="form-control item" name="name" value="{{Auth::user()->name}}" placeholder="Name">
                @error('name')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="email" value="{{Auth::user()->email}}" placeholder="Email">
                @error('email')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Profile Image</small>
                <input type="file" class="form-control item" name="profile_img" value="{{Auth::user()->profile_img}}">
                @error('profile_img')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Position</small>
                <input type="text" class="form-control item" name="position" value="{{Auth::user()->position}}" id="username" placeholder="Frontend dev, Backend dev etc">
                @error('position')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Experience</small>
                <input type="text" class="form-control item" name="experience" value="{{Auth::user()->experience}}" id="username" placeholder="2 years, 4 years etc">
                @error('experience')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Languages</small>
                <input type="text" class="form-control item" name="languages" value="{{Auth::user()->languages}}" id="username" placeholder="react.js, java, php">
                @error('languages')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Github Link</small>
                <input type="text" class="form-control item" name="github_link" value="{{Auth::user()->github_link}}" placeholder="https://">
                @error('github_link')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Linkedin Link</small>
                <input type="text" class="form-control item" name="linkedin_link" value="{{Auth::user()->linkedin_link}}" placeholder="https://">
                @error('linkedin_link')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">About Me</small>
                <textarea class="form-control item" name="about">{{Auth::user()->about}}</textarea>
                @error('about')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Save</button>
            </div>
        </form>
    </div>

@include('partials._custom-footer')
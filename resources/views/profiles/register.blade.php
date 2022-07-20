<x-layout>

	<div class="registration-form">
	    <form method="POST" action="{{url('profiles')}}" enctype="multipart/form-data">
	    	@csrf
            <div class="form-icon">
                <span><i class="fa-solid fa-user-plus"></i></span>
            </div>
            <h4 class="text-center mb-4">Create a Volunteer Profile</h4>
            <div class="form-group">
                <input type="text" class="form-control item" name="name" value="{{old('name')}}" placeholder="Name">
                @error('name')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" name="email" value="{{old('email')}}" placeholder="Email">
                @error('email')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Profile Image</small>
                <input type="file" class="form-control item" name="profile_img" value="{{old('profile_img')}}">
                @error('profile_img')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password" placeholder="Password">
                @error('password')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" name="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Position</small>
                <input type="text" class="form-control item" name="position" value="{{old('position')}}" id="username" placeholder="Frontend dev, Backend dev etc">
                @error('position')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Experience</small>
                <input type="text" class="form-control item" name="experience" value="{{old('experience')}}" id="username" placeholder="2 years, 4 years etc">
                @error('experience')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Skills</small>
                <input type="text" class="form-control item" name="languages" value="{{old('languages')}}" id="username" placeholder="react.js, java, php">
                @error('languages')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Github Link</small>
                <input type="text" class="form-control item" name="github_link" value="{{old('github_link')}}" placeholder="https://">
                @error('github_link')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Linkedin Link</small>
                <input type="text" class="form-control item" name="linkedin_link" value="{{old('linkedin_link')}}" placeholder="https://">
                @error('linkedin_link')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">About Me</small>
                <textarea class="form-control item" name="about">{{old('about')}}</textarea>
                @error('about')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Submit</button>
            </div>
            <div class="text-center">
	        	<small>Already have an account? <a style="color: #5891ff;" href="{{url('profiles/login')}}">Login</a></small>
	        </div>
        </form>
      
        <!-- <div class="social-media">
            <h5>Sign up with:</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-github" title="Github"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
            </div>
        </div> -->
    </div>
	
</x-layout>
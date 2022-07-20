<x-layout>

	<div class="registration-form">
	    <form method="POST" action="{{url('jobs')}}" enctype="multipart/form-data">
	    	@csrf
            <div class="form-icon">
                <span><i class="fa-solid fa-handshake-angle"></i></span>
            </div>
            <h4 class="text-center mb-4">Post a volunteer job</h4>
            <div class="form-group">
                <input type="text" class="form-control item" name="NGO" value="{{old('NGO')}}" placeholder="NGO's Name">
                @error('title')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="title" value="{{old('title')}}" placeholder="Job Title">
                @error('title')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Contact Email</small>
                <input type="email" class="form-control item" name="email" value="{{old('email')}}" placeholder="Email">
                @error('email')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">NGO's Logo</small>
                <input type="file" class="form-control item" name="ngo_logo" value="{{old('ngo_logo')}}">
                @error('ngo_logo')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Location</small>
                <input type="text" class="form-control item" name="location" value="{{old('location')}}" placeholder="Remote, On-site etc">
                @error('location')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">NGO's Website URL</small>
                <input type="text" class="form-control item" name="website" value="{{old('website')}}" placeholder="https://">
                @error('website')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
            	<small style="color: grey; margin-left: 20px;">Full Job Description</small>
                <textarea class="form-control item" name="description">{{old('description')}}</textarea>
                @error('description')
	            	<small style="color: #FF0000;">{{$message}}</small>
	            @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Submit</button>
            </div>
            <div class="text-center">
	        	<small style="color: #dc3545;">*Once a job is posted it cannot be edited.</small>
	        </div>
        </form>
    </div>
	
</x-layout>

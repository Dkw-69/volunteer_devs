<x-layout>
	
	<div class="wrapper">
        <div class="form-icon text-center">
            <span><i class="far fa-user" style="font-size: 37px; font-weight: bold; color: #fec4af;"></i></span>
        </div>
        <div class="text-center mt-4 name">
            Log In
        </div>
        <form method="POST" action="{{url('profiles/authenticate')}}" class="p-3 mt-3">
            @csrf
            @error('email')
                <small class="ml-0" style="color: #FF0000;">{{$message}}</small>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="userName" placeholder="Email">
            </div>
            @error('password')
                <small style="color: #FF0000;">{{$message}}</small>
            @enderror
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            
            <button type="submit" class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <small style="color: #ccc; display: inline-block;">Forgot password?</small> or <a href="{{url('profiles/register')}}">Sign up</a>
        </div>
    </div>

</x-layout>



<div class="card p-3 py-4">
    <div class="text-center"> 
      <img src="https://i.imgur.com/stD0Q19.jpg" width="100" class="rounded-circle">
        <h4 class="mt-2">{{$profiles->name}}</h4>
        <span class="mt-1 clearfix">{{$profiles->position}}</span>
        <span>
          <small>Experience: {{$profiles->experience}}</small>
        </span>
        <hr class="line">
        <span>
          <ul>
          	@foreach($languages as $lang)
	          <li class="badge rounded-pill bg-dark">
	              <!-- href link will filter tags according to tag clicked -->
	              <a style="color: #fff;" href="#">{{$lang}}</a>
	          </li>
	        @endforeach
          </ul>
        </span>
          <div class="social-buttons mt-5"> 
             <a href="#">
               <button class="neo-button"><i class="fa-brands fa-github"></i></button> 
             </a>
             <a href="#">
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
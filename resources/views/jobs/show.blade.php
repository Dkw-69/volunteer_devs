<x-layout>

<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="single_job_card mx-auto">
			<div class="row">
				<div class="logo ml-3 mb-3">
					<img src="{{url('logos/'.$job->ngo_logo)}}" onerror="this.src='../main/images/free_logo.jpg'" width="100" height="100"  alt="Logo" class="rounded-circle">
				</div>
				<div class="header right" style="color: #04b07e;"><i class="fa-solid fa-handshake-angle"></i></div>
			</div>
				<div class="card-title">
					<p class="heading"><i class="fa-solid fa-briefcase mr-2"></i>{{$job->title}}</p>
				</div>
				<div>
					<p class="job_details">Full Job Details:</p>
				</div>
				<div>
					<small class="job_helpers"><i class="fa-solid fa-file-signature mr-2"></i>NGO's Name:</small>
					<p>{{$job->NGO}}</p>
				</div>
				<div>
					<small class="job_helpers"><i class="fa-solid fa-location-dot mr-2"></i>Job Location:</small>
					<p>{{$job->location}}</p>
				</div>
				<div>
					<small class="job_helpers"><i class="fa-solid fa-link mr-2"></i>Website</small>
					<p><a style="font-size: 12px;color: #04b07e;" href="{{$job->website}}" target="_blank">{{$job->website}}</a></p>
				</div>
				<div>
					<small class="job_helpers">Job Description:</small>
					<p>{{$job->description}}</p>
				</div>
				<div class="mutual"><i class="fas fa-users" style="color: #fc7341;"></i>&nbsp;&nbsp;<span>Become a volunteer </span></div>
				<div class="row btnsubmit mt-4">
					
					<div class="col-md-6 col-6">
							<a class="job_email" href="mailto:{{$job->email}}">
								<button type="button" class="btn btn-info btn-lg">Volunteer</button>
							</a>
					</div>
				</div>
		</div>
	</div>
</div>

</x-layout>
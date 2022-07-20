<x-layout>
	<section class="contact-us" id="">
    <div class="contact-us-bgimage grid-margin" style="margin-bottom: 50px;">
      <div class="pb-4">
        <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Would you like to volunteer?</h4>
      </div>
      <div data-aos="fade-up">
       @include('partials._search')
      </div>         
    </div>
      <div class="container">
        <div class="col-12 text-center pb-4">
          <h2>Recent Jobs</h2>
          <h6 class="section-subtitle text-muted m-0">NGOs seeking your assistance.</h6>
        </div>
        <div class="row mb-5">
          @unless(count($jobs) === 0)
            @foreach($jobs as $job)
              <div class="col-lg-6 col-md-12 col-sm-12 mb-3">
                <div class="job-card mb-4">
                  <div class="job-card__content">
                    <div class="job-card_img">
                      <img src="<?php echo $job->ngo_logo;?>" onerror="this.src='./main/images/free_logo.jpg'" width="100" height="100" class="rounded-circle">

                    </div>
                    <div class="job-card_info">
                      <h6 class="ngo_name">
                        <p class="job-card_company">{{$job->NGO}}</p> 
                      </h6>
                      <h4>{{$job->title}}</h4>
                      <small class="mb-0" style="color: #04b07e;">$ : volunteer</small>
                    </div>
                  </div>
                  <div class="job-card__footer">
                    <div class="job-card_job-type">
                      <span class="job-label">{{$job->location}}</span>
                    </div>
                    <a href="{{'jobs/'.$job->id}}">
                      <button class="btn btn-info">View Job</button>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            @else
            <p style="color: #ccc;">No jobs found</p>
            @endunless
        </div>
        <!-- paginate -->
        <div class="mt-2 p-1">
          {{$jobs->links()}}
        </div>
      </div>
      <div class="post_job">
        <a href="{{url('jobs/create')}}">
          <button class="btn btn-dark">post job</button>
          </a>
      </div> 
  </section>
</x-layout>
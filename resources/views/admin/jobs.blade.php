@include('admin.header')
    @include('admin.sidebar')
    <div id="page-wrapper">
        <div class="">
            <div class="row">
                 <div id="page-inner">
                     <h2>{{$page_title}}</h2>  
                     <hr>
    `                @unless(count($jobs) == 0)
                        @foreach($jobs as $job)
                          <div class="col-lg-5 col-md-5 col-sm-12" style="margin-bottom: 29px;">
                            <div class="job-card">
                              <div class="job-card__content">
                                <div class="job-card_img">
                                  <img src="{{url($job->ngo_logo)}}" onerror="this.src='../main/images/free_profile.jpg'" width="100" height="100"  alt="Logo" class="rounded-circle">
                                </div>
                                <div class="job-card_info">
                                  <h6 class="ngo_name">
                                    <p class="job-card_company">{{$job->NGO}}</p> 
                                  </h6>
                                  <h4>{{$job->title}}</h4>
                                  <small class="mb-0" style="color: #04b07e;">$ volunteer</small>
                                </div>
                              </div>
                              <div class="job-card__footer">
                                <div class="job-card_job-type">
                                  <span class="job-label">Posted On: <small>{{date("jS M, Y", strtotime($job->created_at))}}</small></span>
                                </div>
                                <span>
                                  <a href="{{url('admin/jobs/'.$job->id)}}">
                                    <i class="fa-solid fa-eye"></i>
                                  </a>
                                </span>
                                <span>
                                  <a href="{{url('admin/jobs/'.$job->id)}}/edit">
                                    <i class="fa-solid fa-pencil"></i>
                                  </a>
                                </span>
                                <form method="POST" action="{{url('admin/jobs/'.$job->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">
                                        Delete Job
                                    </button>
                                </form>
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
        </div>
    </div> 
 
@include('admin.footer')
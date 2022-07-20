@include('admin.header')
        @include('admin.sidebar')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>{{$page_title}}</h2>   
                    </div>
                </div>            
                  <hr />
                    
                    <!-- Jobs count card -->
                    <div class="col-xl-3 col-md-6 col-sm-12 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Jobs</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$job_count}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-briefcase text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <!-- User count card -->
                    <div class="col-xl-3 col-md-6 col-sm-12 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Volunteers</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$profile_count}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
        </div>
@include('admin.footer')
@include('admin.header')
    @include('admin.sidebar')
    <div id="page-wrapper" >
            <div id="page-inner">
                <div class="">
                    <div class="row">
                    <div class="col-md-12">
                     <h2>{{$page_title}}</h2>  
                     <hr> 
                    </div>
                    <!-- all volunteers -->
                    <div class="">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr><th>Name</th><th>Email</th><th>Skills</th><th>Date Joined</th><th>Action</th></tr>
                            </thead>
                            <tbody>
                                @unless(count($profiles) == 0)
                                    @foreach($profiles as $profile)
                                        <tr><td>{{$profile->name}}</td><td>{{$profile->email}}</td><td>{{$profile->languages}}</td><td>{{date("jS M, Y", strtotime($profile->created_at))}}</td><td><form method="POST" action="{{url('admin/profiles/'.$profile->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-xs btn-danger">
                                                Delete Profile
                                            </button>
                                        </form></td></tr>
                                    @endforeach
                                @else
                                    <div class="text-center"><p style="color: #ccc;">No profiles found</p></div>
                                @endunless
                            </tbody>
                        </table>
                        <div class="mt-2 p-1 text-center">
                          {{$profiles->links()}}
                        </div>
                    </div>
                </div> 
                </div>             
                 <!-- /. ROW  -->
              
                 <!-- /. ROW  -->           
              </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
@include('admin.footer')


















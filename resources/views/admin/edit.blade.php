@include('admin.header')
    @include('admin.sidebar')

    <div id="page-wrapper">
        <div class="">
            <div class="row">
                 <div id="page-inner">
                        <h2>{{$page_title}}</h2>
                    <div style="margin-left: 25px;">
                            <div class="registration-form">
                            <form method="POST" action="{{url('admin/jobs/'.$job->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <h4 class="text-center mb-4">Edit volunteer job</h4>
                            <div class="form-group">
                                <input type="text" class="form-control item" name="NGO" value="{{$job->NGO}}" placeholder="NGO's Name">
                                @error('title')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control item" name="title" value="{{$job->title}}" placeholder="Job Title">
                                @error('title')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <small style="color: grey; margin-left: 20px;">Contact Email</small>
                                <input type="email" class="form-control item" name="email" value="{{$job->email}}" placeholder="Email">
                                @error('email')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <small style="color: grey; margin-left: 20px;">NGO's Logo</small>
                                <input type="file" class="form-control item" name="ngo_logo" value="{{$job->ngo_logo}}">
                                @error('ngo_logo')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <small style="color: grey; margin-left: 20px;">Location</small>
                                <input type="text" class="form-control item" name="location" value="{{$job->location}}" placeholder="Remote, On-site etc">
                                @error('location')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <small style="color: grey; margin-left: 20px;">NGO's Website URL</small>
                                <input type="text" class="form-control item" name="website" value="{{$job->website}}" placeholder="https://">
                                @error('website')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <small style="color: grey; margin-left: 20px;">Full Job Description</small>
                                <textarea class="form-control item" name="description">{{$job->description}}</textarea>
                                @error('description')
                                        <small style="color: #FF0000;">{{$message}}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block create-account">Save</button>
                            </div>
                        </form>
                    </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

@include('admin.footer')
@include('partials._custom-header')

<section class="about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h6 class="theme-color lead">Thank you for being a member!</h6>
                            <h3 class="dark-color"><i class="fa-solid fa-address-card"></i> My Volunteer Profile</h3>
                            <label style="color: #5ed6b3;font-weight: 600;">About Me:</label>
                            <p>{{ Auth::user()->about }}</p>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Name:</label>
                                        <p>{{ Auth::user()->name }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Email:</label>
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Position:</label>
                                        <p>{{ Auth::user()->position }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Experience:</label>
                                        <p>{{ Auth::user()->experience }}</p>
                                    </div>
                                    <div class="media">
                                        <label>Skills:</label>
                                        <p>{{ Auth::user()->languages }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar profile_image">
                            <img src="{{url('uploads/'.Auth::user()->profile_img)}}" onerror="this.src='./main/images/free_profile.jpg'" width="350" height="350" alt="profile image">
                        </div>
                    </div>
                </div>
                <div class="counter mt-4">
                    <div class="row">
                        <div class="col-6 col-lg-6">
                            <div class="count-data text-center">
                                <h6 class="count h2" style="color: #FF0000;" data-to="850" data-speed="850" style=""><i class="fa-solid fa-trash"></i></h6>
                                <form method="POST" action="{{url('profiles/'.Auth::user()->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">
                                        Delete Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="count-data text-center">
                                <h6 class="count h2" style="color: #bfc1c2;" data-to="190" data-speed="190"><i class="fa-solid fa-pencil"></i></h6>
                                <p class="m-0px font-w-600">
                                    <a href="{{url('profiles/'.Auth::user()->id)}}/edit">
                                        <button class="btn btn-outline-dark">Edit Profile</button>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@include('partials._custom-footer')
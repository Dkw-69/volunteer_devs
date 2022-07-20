<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="<?= $page_title == 'Admin|Dashboard' ? 'active-link' : ''; ?>">
                <a href="{{url('admin')}}" ><i class="fa fa-desktop "></i>Dashboard</a>
            </li>
            <li class="<?= $page_title == 'Volunteer Profiles' ? 'active-link' : ''; ?>">
                <a href="{{url('admin/profiles')}}"><i class="fa-solid fa-users"></i>Profiles</a>
            </li>
            <li class="<?= $page_title == 'NGO Jobs' ? 'active-link' : ''; ?>">
                <a href="{{url('admin/jobs')}}"><i class="fa-solid fa-briefcase"></i> Jobs</a>
            </li>

        </ul>
    </div>

</nav>
        <!-- /. NAV SIDE  -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->name }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Slider Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Slider</h6>
                <a class="collapse-item" href="{{route('banner.index')}}">All Sider</a>
                <a class="collapse-item" href="{{route('banner.create')}}">Add Slider</a>
            </div>
        </div>
    </li>
    {{-- for User--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoa"
            aria-expanded="true" aria-controls="collapseTwoa">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
        <div id="collapseTwoa" class="collapse" aria-labelledby="headingTwoa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">User Menu</h6>
                <a class="collapse-item" href="{{route('user.index')}}">All User</a>
                <a class="collapse-item" href="{{route('user.create')}}">Add USer</a>
            </div>
        </div>
    </li>
    {{-- destination --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaa12"
            aria-expanded="true" aria-controls="collapseTwoqaa12">
            <i class="fas fa-fw fa-blog"></i>
            <span>Destination Category</span>
        </a>
        <div id="collapseTwoqaa12" class="collapse" aria-labelledby="headingTwoqaa12" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-blog">Destination Category Menu</h6>
                <a class="collapse-item" href="{{ route('list.destination') }}">All Destination Category</a>
                <a class="collapse-item" href="{{ route('list.createdestination') }}">Add Destination Category</a>
            </div>
        </div>
    </li>
    {{-- for Contact--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('list.contact') }}">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Contact Us Queries</span></a>
    </li>
    {{-- for Apply Now--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('list.apply') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Apply Now Queries</span></a>
    </li>
    {{-- for queries--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('list.enquery') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Enquery Now</span></a>
    </li>
    {{--  Testimonials --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaar"
            aria-expanded="true" aria-controls="collapseTwoqaar">
            <i class="fas fa-fw fa-list"></i>
            <span>Testimonials</span>
        </a>
        <div id="collapseTwoqaar" class="collapse" aria-labelledby="headingTwoqa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Testimonials Menu</h6>
                <a class="collapse-item" href="{{ route('testimonials.index') }}">All testimonials</a>
                <a class="collapse-item" href="{{ route('testimonials.create') }}">Add testimonials</a>
            </div>
        </div>
    </li>
    {{-- for Offers--}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoai"
            aria-expanded="true" aria-controls="collapseTwoai">
            <i class="fas fa-fw fa-user"></i>
            <span>Our Offer</span>
        </a>
        <div id="collapseTwoai" class="collapse" aria-labelledby="headingTwoai" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Offer Menu</h6>
                <a class="collapse-item" href="{{route('offer.index')}}">All OFFER</a>
                <a class="collapse-item" href="{{route('offer.create')}}">Add OFFER</a>
            </div>
        </div>
    </li>
    {{-- Category Blog --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqa"
            aria-expanded="true" aria-controls="collapseTwoqa">
            <i class="fas fa-fw fa-list"></i>
            <span>Category Blog</span>
        </a>
        <div id="collapseTwoqa" class="collapse" aria-labelledby="headingTwoqa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category Blog Menu</h6>
                <a class="collapse-item" href="{{ route('list.category') }}">All Category</a>
                <a class="collapse-item" href="{{ route('list.create') }}">Add Category</a>
            </div>
        </div>
    </li>
    
     {{-- Blog --}}
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaa"
            aria-expanded="true" aria-controls="collapseTwoqaa">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blog</span>
        </a>
        <div id="collapseTwoqaa" class="collapse" aria-labelledby="headingTwoqaa" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-blog">Blog Menu</h6>
                <a class="collapse-item" href="{{ route('adminblog.index') }}">All Blogs</a>
                <a class="collapse-item" href="{{ route('adminblog.create') }}">Add Blogs</a>
            </div>
        </div>
    </li>
    {{-- Pages --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoqaaq"
            aria-expanded="true" aria-controls="collapseTwoqaaq">
            <i class="fas fa-fw fa-pager"></i>
            <span>All Pages</span>
        </a>
        <div id="collapseTwoqaaq" class="collapse" aria-labelledby="headingTwoqaaq" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Page Menu</h6>
                <a class="collapse-item" href="{{ route('about.index') }}">About Page</a>
                <a class="collapse-item" href="{{ route('services.index') }}">Services Page</a>
                <a class="collapse-item" href="cards.html">Add PAge</a>
                <a class="collapse-item" href="cards.html">Add PAge</a>
                <a class="collapse-item" href="cards.html">Add PAge</a>
            </div>
        </div>
    </li>
    {{-- Setting --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoq"
            aria-expanded="true" aria-controls="collapseTwoq">
            <i class="fas fa-fw fa-cog"></i>
            <span>Setting</span>
        </a>
        <div id="collapseTwoq" class="collapse" aria-labelledby="headingTwoq" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Setting Menu</h6>
                <a class="collapse-item" href="{{ route('setting.index') }}">Site Setting</a>
            </div>
        </div>
    </li>


</ul>
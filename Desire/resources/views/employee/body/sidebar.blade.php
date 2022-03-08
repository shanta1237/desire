<ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <a class="nav-link" href="{{ url('/employee') }}">
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
                <a class="collapse-item" href="{{route('employeebanner.index')}}">All Sider</a>
                <a class="collapse-item" href="{{route('employeebanner.create')}}">Add Slider</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo222"
            aria-expanded="true" aria-controls="collapseTwo222">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Destination Category</span>
        </a>
        <div id="collapseTwo222" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Destination Category</h6>
                <a class="collapse-item" href="{{route('employee.destination')}}">All Destination</a>
                <a class="collapse-item" href="{{route('employeelist.createdestination')}}">Add Destination</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2222"
            aria-expanded="true" aria-controls="collapseTwo2222">
            <i class="fas fa-fw fa-sliders-h"></i>
            <span>Country</span>
        </a>
        <div id="collapseTwo2222" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Country</h6>
                <a class="collapse-item" href="{{route('employeecountry.index')}}">All Country</a>
                <a class="collapse-item" href="{{route('employeecountry.create')}}">Add Country</a>
            </div>
        </div>
    </li>
    {{-- for Contact--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('employeelist.contact') }}">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Contact Us Queries</span></a>
    </li>
    {{-- for Apply Now--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('employeelist.apply') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Apply Now Queries</span></a>
    </li>
    {{-- for queries--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ route('employeelist.enquery') }}">
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
                <a class="collapse-item" href="{{ route('employeetestimonials.index') }}">All testimonials</a>
                <a class="collapse-item" href="{{ route('employeetestimonials.create') }}">Add testimonials</a>
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
                <a class="collapse-item" href="{{route('employeeoffer.index')}}">All OFFER</a>
                <a class="collapse-item" href="{{route('employeelist.create')}}">Add OFFER</a>
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
                <a class="collapse-item" href="{{ route('employeelist.category') }}">All Category</a>
                <a class="collapse-item" href="{{ route('employeelist.create') }}">Add Category</a>
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
            <a class="collapse-item" href="{{ route('blog.index') }}">All Blogs</a>
            <a class="collapse-item" href="{{ route('blog.create') }}">Add Blogs</a>
        </div>
    </div>
</li>
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
                <a class="collapse-item" href="{{ url('employee/edit/aboutuspage') }}">About Page</a>
                <a class="collapse-item" href="{{ route('employeeservices.index') }}">Services Page</a>
                <a class="collapse-item" href="{{ route('employeehouse.index') }}">Home</a>
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
            <a class="collapse-item" href="{{ route('employeesetting.index') }}">Site Setting</a>
        </div>
    </div>
</li>


</ul>
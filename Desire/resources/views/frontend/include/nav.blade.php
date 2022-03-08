@php
	use App\Models\Destination;
	$destination = Destination::all();
@endphp
<header>
    <div class="top-header container-fluid" style="background-image: url(assets/images/top-header.png);
    background-size: 100% 100%;
    height: 3rem">
        <div class="row align-items-center justify-items-center h-100">
            <div class="col-md-9 col-7"></div>
            <div class="col-md-3 col-5 text-white">
                <ul>
                    <a href="{{ \App\Models\Setting::value('facebook') }}" target="blank"><li class=icon-holder> <i class=ic-facebook></i></li></a>
                    <a href="{{ \App\Models\Setting::value('twitter') }}" target="blank"><li class=icon-holder> <i class=ic-twitter></i></li></a>
                    <a href="{{ \App\Models\Setting::value('instagram') }}" target="blank"><li class=icon-holder> <i class=ic-instagram></i></li></a>
                </ul>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg custom-nav">
    <div class="container-fluid px-0">
        <div class=row>
            <div class=col-lg-5>
                <div class=row>
                    <div class=col-4> <a class=navbar-brand href="{{ url('/') }}"> <img src={{ \App\Models\Setting::value('logo') }} alt="">
                        </a> </div>
                    <div class="col-12 col-md-8">
                        <div class=nav-input-container> <i class=ic-search></i> <input placeholder=Search type=text
                                class="form-control rounded-pill nav-input" /> </div>
                    </div>
                </div>
            </div>
            <div class=col-lg-7>
                <div class=nav-content>
                    <div class="nav-icon-address d-flex align-items-center">
                        <div class="row mx-0 px-0">
                            <div class=col-md-6>
                                <div class=icon-text-container> <i class=ic-marker></i>
                                    <p>{{ \App\Models\Setting::value('header_address') }}</p>
                                </div>
                            </div>
                            <div class=col-md-6>
                                <div class=icon-text-container> <i class=ic-phone></i> <a
                                        href=tel:{{ \App\Models\Setting::value('header_phone') }}>{{ \App\Models\Setting::value('header_phone') }}</a> </div>
                            </div>
                            <div class=col-md-6>
                                <div class=icon-text-container> <i class=ic-mail></i> <a
                                        href=mailto:{{ \App\Models\Setting::value('header_email') }}>{{ \App\Models\Setting::value('header_email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class=nav-menu>
    <div class=nav-toggle-container> <svg fill=none height=2rem viewBox="0 0 24 24" stroke=currentColor
            id=navbar-toggle>
            <path stroke-linecap=round stroke-linejoin=round stroke-width=2 d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </div>
    <ul id=nav-menu-items class=d-md-none>
        <li><a href="{{ route('index') }}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}" class="{{ (request()->is('About-us')) ? 'active' : '' }}">About Us</a></li>
        <li><a href="{{ route('team') }}" class="{{ (request()->is('Our-team')) ? 'active' : '' }}">Our Team</a></li>
        <li><a href="{{ route('services') }}" class="{{ (request()->is('Our-services')) ? 'active' : '' }}">Services</a></li>
        <li><a href="{{ route('testimonials') }}" class="{{ (request()->is('Testimonials')) ? 'active' : '' }}">Testimonials</a></li>
        <li>
            <div class=dropdown> <a class=dropdown-toggle href=# role=button id=dropdownMenuLink data-bs-toggle=dropdown
                    aria-expanded=false> Destination </a>
                
                <ul class=dropdown-menu aria-labelledby=dropdownMenuLink>
                    @foreach ($destination as $item)
                    <li><a href="{{ url('destination/' .$item->id) }}" class=dropdown-item href=study-detail.html>{{ $item->title }}</a></li>
                    @endforeach
                </ul> 
                
            </div>
        </li>
        <li><a href="{{ route('offers') }}" class="{{ (request()->is('Our_Offers')) ? 'active' : '' }}">Our Offers</a></li>
        <li><a href="{{ route('blog') }}" class="{{ (request()->is('Blog')) ? 'active' : '' }}">Blog</a></li>
        <li>
            <div><a href="{{ route('contact') }}" class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact us</a></div>
        </li>
    </ul>
</div>

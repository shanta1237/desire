@extends('frontend.include.master')
@section('content')
    <div class="col-md-12">
        @include('backend.layouts.notification')
    </div>
    <div class=slideover id=enquiry-slide-over>
        <div class=slideover-header>
            <h4>Call Back Request</h4> <span class=ic-cancel id=enquiry-exit></span>
        </div>
        <div class=slideover-body>
            <form action="{{ route('enquery.now') }}" method="post">
                @csrf
                <input type=text name="fullname" class=form-control placeholder="Enter Your Name">
                <input type=email name="email" class=form-control placeholder="Enter your email">
                <input type=text name="mobile" class=form-control placeholder="Enter your Mobile Number">
                <input type=text name="Qualification" class=form-control placeholder="+2 min">
                <input type=text name="ieltsscore" class=form-control placeholder="Enter your IELTS Score">
                <input type=text name="country" class=form-control placeholder="Enter the country name you want to go">
                <div class=form-check> <input class=form-check-input type=checkbox id=disabledFieldsetCheck> <label
                        class=form-check-label for=disabledFieldsetCheck> I agree to be contacted by Desire
                        Consultancy regarding my concern. </label> </div>
                <div class=btn-container> <button type="submit" class="btn btn-white">Submit</button> </div>
            </form>
        </div>
    </div>
    <section class=hero-section>
        <div class=enquiry-button> <button class=text-container id=enquiry-open> <span>Enquire Now</span> </button>
        </div>
        <div id=demo class="carousel slide carousel-fade" data-bs-ride=carousel>
            <div class=carousel-indicators> <button type=button data-bs-target=#demo data-bs-slide-to=0
                    class=active></button> <button type=button data-bs-target=#demo data-bs-slide-to=1></button>
                <button type=button data-bs-target=#demo data-bs-slide-to=2></button>
            </div>
            <div class=carousel-inner>
                <div class="carousel-item active">
                    <div class="caption-container overlap-left">
                        <div class=caption-top>
                            <ul>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/graduated-1.png') }}"
                                            alt=""> </div>
                                    <h6>STUDY <br>ABROAD</h6>
                                </li>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/exam-1.png') }}" alt="">
                                    </div>
                                    <h6>Test Preparation</h6>
                                </li>
                            </ul>
                        </div>
                        <h1 class="caption-title mx-auto"> WANNA UPGRADE YOUR <br> STUDIES ABROAD ? </h1>
                        <div class=caption-buttons> <a href=#applyNow id=apply-link id=apply-link
                                class="btn btn-white">Apply now</a> <a href=contact.html class="btn btn-white">Contact
                                Us</a> </div>
                    </div>
                    <div class="img-container overlap-right"> <img src="{{ asset('assets/images/carousel-image.png') }}"
                            class="d-block w-100" alt=""> </div>
                </div>
                <div class=carousel-item>
                    <div class="caption-container overlap-left">
                        <div class=caption-top>
                            <ul>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/graduated-1.png') }}"
                                            alt=""> </div>
                                    <h6>STUDY <br>ABROAD</h6>
                                </li>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/exam-1.png') }}" alt="">
                                    </div>
                                    <h6>Test Preperation</h6>
                                </li>
                            </ul>
                        </div>
                        <h1 class="caption-title mx-auto"> WANNA UPGRADE YOUR <br> STUDIES ABROAD ? </h1>
                        <div class=caption-buttons> <a href=#applyNow id=apply-link class="btn btn-white">Apply
                                now</a> <a href=contact.html class="btn btn-white">Contact Us</a> </div>
                    </div>
                    <div class="img-container overlap-right"> <img src="{{ asset('assets/images/carousel-image.png') }}"
                            class="d-block w-100" alt=""> </div>
                </div>
                <div class=carousel-item>
                    <div class="caption-container overlap-left">
                        <div class=caption-top>
                            <ul>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/graduated-1.png') }}"
                                            alt=""> </div>
                                    <h6>STUDY <br>ABROAD</h6>
                                </li>
                                <li>
                                    <div class=img-container> <img src="{{ asset('assets/images/exam-1.png') }}" alt="">
                                    </div>
                                    <h6>Test Preparation</h6>
                                </li>
                            </ul>
                        </div>
                        <h1 class="caption-title mx-auto"> WANNA UPGRADE YOUR <br> STUDIES ABROAD ? </h1>
                        <div class=caption-buttons> <a href=#applyNow id=apply-link class="btn btn-white">Apply
                                now</a> <a href=contact.html class="btn btn-white">Contact Us</a> </div>
                    </div>
                    <div class="img-container overlap-right"> <img src="{{ asset('assets/images/carousel-image.png') }}"
                            class="d-block w-100" alt=""> </div>
                </div>
            </div> <button class=carousel-control-prev type=button data-bs-target=#demo data-bs-slide=prev> <span
                    class=carousel-control-prev-icon></span> </button> <button class=carousel-control-next type=button
                data-bs-target=#demo data-bs-slide=next> <span class=carousel-control-next-icon></span>
            </button>
        </div>
    </section>
    <section class="our-process container">
        <div class=heading-main-container>
            <h2 class=heading-main>Our Process</h2>
            <div class=two-line>
                <div class=line1></div>
                <div class=line2></div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-6 col-lg-3 col-cont">
                <div class=col-cont-main>
                    <div class=circle-img> <img src="{{ asset('assets/images/Test-Preparation-Classes.png') }}" alt="">
                    </div>
                    <h6>Test Preparation</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-cont">
                <div class=col-cont-main>
                    <div class=circle-img> <img src="{{ asset('assets/images/education-counselor.png') }}" alt=""> </div>
                    <h6>Expert Counseling</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-cont">
                <div class=col-cont-main>
                    <div class=circle-img> <img src="{{ asset('assets/images/Lodge-Visa-documents.png') }}" alt="">
                    </div>
                    <h6>Easy Documentation</h6>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-cont">
                <div class=col-cont-main>
                    <div class=circle-img> <img src="{{ asset('assets/images/exam-2.png') }}" alt=""> </div>
                    <h6>Test Preparation</h6>
                </div>
            </div>
        </div>
    </section>
    <section class=about-home>
        <div class=container>
            <div class=row>
                <div class=col-5></div>
                <div class="col-md-12 col-xl-7">
                    <div class=about-container>
                        <div class=heading-main-container>
                            <h5 class=text-01>About us</h5>
                            <h2 class=heading-main>Study Abroad</h2>
                            <div class=two-line>
                                <div class=line1></div>
                                <div class=line2></div>
                            </div>
                        </div>
                        <p class=about-description> Desire Educational Consultancy (Best Education Consultancy in
                            Kathmandu Nepal for Australia | USA | Ielts Preparation Classes) was established in the
                            locality of Dillibazar, Kathmandu with an aim to provide effective study abroad
                            counseling to the aspiring students who want to learn in excellent environment with
                            multicultural experience and great life style. We provide professional guidance for
                            higher studies in Australia, New Zealand and USA. </p>
                        <div class="row about-service mx-auto">
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>Student Counselling</h6>
                            </div>
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>Test Preparation</h6>
                            </div>
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>University Application</h6>
                            </div>
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>Compliance</h6>
                            </div>
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>Interview Assistance</h6>
                            </div>
                            <div class=col-6>
                                <div class=svg-container> <svg viewBox="0 0 20 20" fill=white>
                                        <path fill-rule=evenodd
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule=evenodd />
                                    </svg> </div>
                                <h6>Student Counselling</h6>
                            </div>
                        </div>
                        <div class="btn-area row">
                            <div class="col-md-6 col-sm-12"> <a href=about.html class="btn btn-white">More About
                                    Us</a> </div>
                            <div class="col-md-6 col-sm-12 btn-area-text"> <span class=d-block>+977
                                    01-4412344</span> <span class=text-dark>Call Us For Counselling</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=apply-now id=applyNow>
        <div class=container>
            <div class=row>
                <div class="col-lg-6 col-md-12 order-sm-2">
                    <div class="card form-card">
                        <form action="{{ route('Apply.form') }}" method="post">
                            @csrf
                            <div class="form-group mt-3"> <input type=text name="fullname" placeholder="Full Name"
                                    class=form-control> </div>
                            <div class="form-group mt-3"> <input type=email name="email" placeholder=Email
                                    class=form-control>
                            </div>
                            <div class="form-group mt-3"> <input type=text name="mobile" placeholder="Mobile no."
                                    class=form-control> </div>
                            <div class="form-group mt-3"> <input type=text name="Qualification" placeholder=Qualification
                                    class=form-control> </div>
                            <div class="row mt-3">
                                <div class=col-6>
                                    <div class=form-group> <input type=text name="ieltsscore" placeholder="IELTS SCORE"
                                            class=form-control> </div>
                                </div>
                                <div class=col-6>
                                    <div class=form-group> <input type=text name="country" placeholder=COUNTRY
                                            class=form-control>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <div> <button type="submit" class="btn btn-primary">SUBMIT</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-sm-1">
                    <div class=heading-main-container>
                        <h2 class="heading-main text-dark">Apply Now</h2>
                        <div class=two-line>
                            <div class=line1></div>
                            <div class="line2 bg-dark"></div>
                        </div>
                    </div>
                    <h4 class=text-head>How to Apply to an International University ?</h4>
                    <p class=text-content> Popular degree subjects in different Country Universities to consider for
                        your studies. Prepare to apply. … Meet the language proficiency requirements. Gather the
                        rest of your university application documents University application deadlines in Abroad
                        Final steps after receiving your acceptance letter. </p>
                </div>
            </div>
        </div>
    </section>
    <section class=student-say>
        <div class="">
            <div class=grid-container>
                <div class=heading-col>
                    <p>STUDENT’S REVIEW</p>
                    <h1> What Our <br> Students Say... </h1>
                </div>
                <div class=review-col>
                    <div id=demo2 class="carousel slide carousel-fade" data-bs-ride=carousel>
                        <div class=carousel-inner>
                            <div class="carousel-item active">
                                <div class=profile-container>
                                    <div class=img-container> <img src="{{ asset('assets/images/potrait.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class=review-text>
                                    <p class=text-content> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Quisque tincidunt, augue non feugiat consectetur, urna magna tristique
                                        dolor, in facilisis lacus metus non sapien. Ut efficitur tellus ac metus
                                        feugiat venenatis. Ut id sollicitudin velit, sed finibus nisi. Suspendisse
                                        porttitor nisi nec sem lacinia porttitor. Mauris commodo varius dolor in
                                        laoreet. Sed faucibus ante sit amet cursus condimentum. Cras luctus sem ut
                                        rhoncus luctus. Maecenas tortor justo, mattis sed lobortis ut, venenatis
                                        eget erat. </p>
                                    <div class="footer-text text-center">
                                        <p>Hari kumar Jha 2</p> <span>CEO 2</span>
                                    </div>
                                </div>
                            </div>
                            <div class=carousel-item>
                                <div class=profile-container>
                                    <div class=img-container> <img src="{{ asset('assets/images/potrait.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class=review-text>
                                    <p class=text-content> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Quisque tincidunt, augue non feugiat consectetur, urna magna tristique
                                        dolor, in facilisis lacus metus non sapien. Ut efficitur tellus ac metus
                                        feugiat venenatis. Ut id sollicitudin velit, sed finibus nisi. Suspendisse
                                        porttitor nisi nec sem lacinia porttitor. Mauris commodo varius dolor in
                                        laoreet. Sed faucibus ante sit amet cursus condimentum. Cras luctus sem ut
                                        rhoncus luctus. Maecenas tortor justo, mattis sed lobortis ut, venenatis
                                        eget erat. </p>
                                    <div class="footer-text text-center">
                                        <p>Hari kumar Jha</p> <span>CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class=carousel-item>
                                <div class=profile-container>
                                    <div class=img-container> <img src="{{ asset('assets/images/potrait.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class=review-text>
                                    <p class=text-content> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Quisque tincidunt, augue non feugiat consectetur, urna magna tristique
                                        dolor, in facilisis lacus metus non sapien. Ut efficitur tellus ac metus
                                        feugiat venenatis. Ut id sollicitudin velit, sed finibus nisi. Suspendisse
                                        porttitor nisi nec sem lacinia porttitor. Mauris commodo varius dolor in
                                        laoreet. Sed faucibus ante sit amet cursus condimentum. Cras luctus sem ut
                                        rhoncus luctus. Maecenas tortor justo, mattis sed lobortis ut, venenatis
                                        eget erat. </p>
                                    <div class="footer-text text-center">
                                        <p>Hari kumar Jha 3</p> <span>CEO 2</span>
                                    </div>
                                </div>
                            </div>
                        </div> <button class=carousel-control-prev type=button data-bs-target=#demo2 data-bs-slide=prev>
                            <span class=carousel-control-prev-icon></span> </button> <button class=carousel-control-next
                            type=button data-bs-target=#demo2 data-bs-slide=next> <span
                                class=carousel-control-next-icon></span> </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=why-choose>
        <div class=container>
            <h3>BEST AT FEATURE</h3>
            <div class=heading-main-container>
                <h2 class=heading-main>Why Choose Desire</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <div class=why-content>
                <div id=demo3 class="carousel slide carousel-fade" data-bs-ride=carousel data-bs-interval=false>
                    <div class="carousel-indicators nav-section"> <button data-bs-target=#demo3 data-bs-slide-to=0
                            class="active w-100">Abroad Focus</button> <button data-bs-target=#demo3 data-bs-slide-to=1
                            class=w-100>Career Guidance</button> <button data-bs-target=#demo3 data-bs-slide-to=2
                            class=w-100>Test Preparation</button> <button data-bs-target=#demo3 data-bs-slide-to=3
                            class=w-100>Environment</button> </div>
                    <div class=carousel-inner>
                        <div class="carousel-item active">
                            <div class=row>
                                <div class="col-lg-6 image-col">
                                    <div class=img-container> <img src="{{ asset('assets/images/why-choose.png') }}"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-6 text-col">
                                    <div class=text-card>
                                        <h5>We are the Best Consultancy in Nepal</h5>
                                        <p>Maecenas a neque in turpis euismod faucibus ac sagittis nisi. Nunc nibh
                                            quam, laoreet at eros non, interdum suscipit lectus. Phasellus pretium
                                            ligula in lectus scelerisque maximus. </p>
                                        <div class=btn-row> <a href=about.html class="btn btn-white">Contact Us
                                                Today</a> <button class="btn btn-white">Contact Us in
                                                Office</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=carousel-item>
                            <div class=row>
                                <div class="col-lg-6 image-col">
                                    <div class=img-container> <img src="{{ asset('assets/images/why-choose.png') }}"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-6 text-col">
                                    <div class=text-card>
                                        <h5>We are </h5>
                                        <p>Maecenas a neque in turpis euismod faucibus ac sagittis nisi. Nunc nibh
                                            quam, laoreet at eros non, interdum suscipit lectus. Phasellus pretium
                                            ligula in lectus scelerisque maximus. </p>
                                        <div class=btn-row> <a href=about.html class="btn btn-white">Contact Us
                                                Today</a> <button class="btn btn-white">Contact Us in
                                                Office</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=carousel-item>
                            <div class=row>
                                <div class="col-lg-6 image-col">
                                    <div class=img-container> <img src="{{ asset('assets/images/why-choose.png') }}"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-6 text-col">
                                    <div class=text-card>
                                        <h5>We are the</h5>
                                        <p>Maecenas a neque in turpis euismod faucibus ac sagittis nisi. Nunc nibh
                                            quam, laoreet at eros non, interdum suscipit lectus. Phasellus pretium
                                            ligula in lectus scelerisque maximus. </p>
                                        <div class=btn-row> <a href=about.html class="btn btn-white">Contact Us
                                                Today</a> <button class="btn btn-white">Contact Us in
                                                Office</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=carousel-item>
                            <div class=row>
                                <div class="col-lg-6 image-col">
                                    <div class=img-container> <img src="{{ asset('assets/images/why-choose.png') }}"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-6 text-col">
                                    <div class=text-card>
                                        <h5>We are the</h5>
                                        <p>Maecenas a neque in turpis euismod faucibus ac sagittis nisi. Nunc nibh
                                            quam, laoreet at eros non, interdum suscipit lectus. Phasellus pretium
                                            ligula in lectus scelerisque maximus. </p>
                                        <div class=btn-row> <a href=contact.html class="btn btn-white">Contact Us
                                                Today</a> <button class="btn btn-white">Contact Us in
                                                Office</button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=advice-text-banner> Looking for advice? Speak with us today. </div>
    <section class=study-abroad>
        <div class=container>
            <div class=row>
                <div class=heading-main-container>
                    <h2 class=heading-main>Study Abroad</h2>
                    <div class=two-line>
                        <div class=line1></div>
                        <div class=line2></div>
                    </div>
                </div>
            </div>
            <div class="row study-abroad-row">
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-73.png') }}" alt=""> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-74.png') }}" alt=""> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-77.png') }}" alt=""> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-79.png') }}" alt=""> </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-76.png') }}" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <section class=universities-sec>
        <div class=container>
            <div class=row>
                <div class=heading-main-container>
                    <h2 class=heading-main>Universities</h2>
                    <div class=two-line>
                        <div class=line1></div>
                        <div class=line2></div>
                    </div>
                </div>
            </div>
            <div class="row universities-row">
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class=img-container> <img src="{{ asset('assets/images/university-sheffield.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=accreditations>
        <h4>Accreditations</h4>
        <div class=container>
            <div class=row>
                <div class=accreditations-slick-container>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                    <div class=img-container> <img src="{{ asset('assets/images/Rectangle-80.png') }}" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
@endsection

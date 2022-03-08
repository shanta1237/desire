@extends('frontend.include.master')
@section('content')
    {{-- <section class="container-fluid contact-form">
        <div class=heading-main-container>
            <h2 class=heading-main>Get In Touch</h2>
            <div class=two-line>
                <div class=line1></div>
                <div class=line2></div>
            </div>
        </div>
        <div class="container-fluid main-contact-content bg-blue-17">
            <div class=row>
                <div class="col-lg-8 form-area">
                    <form action="{{ route('contact.form') }}" method="post">
                        @csrf
                        <div class=row>
                            <div class=col-md-6>
                                <div class="form-group icon-lft"> <input type=text name="fname" class="form-control icon-lft"
                                        placeholder="First Name"> <i class=ic-user></i> </div>
                            </div>
                            <div class=col-md-6>
                                <div class="form-group icon-lft"> <input type=text name="lname" class=form-control
                                        placeholder="Last Name"> <i class=ic-user></i> </div>
                            </div>
                            <div class=col-md-6>
                                <div class=form-group> <input type=text name="general" class=form-control placeholder=General>
                                </div>
                            </div>
                            <div class=col-md-6>
                                <div class="form-group icon-lft"> <input type=text name="phone" class=form-control
                                        placeholder=Phone> <i class=ic-phone></i> </div>
                            </div>
                        </div>
                        <div class="form-group icon-lft"> <input type=text name="email" class=form-control placeholder=Email> <i
                                class=ic-envelope></i> </div>
                        <div class="form-group icon-lft"> <input type=text name="message" class=form-control placeholder=Message> <i
                                class=ic-message></i> </div>
                        <div class=btn-container> <button class="btn btn-primary">Submit</button> </div>
                    </form>
                </div>
                <div class=col-lg-4>
                    <ul class="office-location border-0">
                        <li> <i class=ic-marker></i>
                            <p>P.O.BOX: 8954, KATHAMNDU, NEPAL, 44600</p>
                        </li>
                        <li> <i class=ic-phone></i>
                            <div class=tel-container> <a href=tel:+977-485236974>+977-485236974</a>, <a href=tel:+1-256987>
                                    +1-256987</a>, <a href=tel:01-154465> 01-154465</a> </div>
                        </li>
                        <li> <i class=ic-mail></i> <a
                                href=mailto:admissions@desireedunepal.com>info@desireconsultancy.com</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class=map-container> <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.380628046313!2d85.32192611562625!3d27.705531882792666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a7ff81bb15%3A0xa2fdd0c8d9077cdd!2sDesire%20Educational%20Consultancy!5e0!3m2!1sen!2snp!4v1644142628299!5m2!1sen!2snp"
            allowfullscreen="" loading=lazy></iframe> </section> --}}
    <section class=body-top-section>
        <div class=container>
            <div class=row>
                <div class="col-6 col-lg-8">
                    <div class=text-container>
                        <h1>Contact Us</h1>
                        <p>Serving since 2015</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class=img-container> <img src={{ asset('assets/images/logo.png') }} alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-12">
        @include('backend.layouts.notification')
    </div>
    <main class="contact-page mx-auto">
        <section class="container-fluid contact-form">
            <div class=heading-main-container>
                <h2 class=heading-main>Get In Touch</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <div class="container-fluid main-contact-content bg-blue-17">
                <div class=row>
                    
                    <div class="col-lg-8 form-area">
                        <form action="{{ route('contact.form') }}" method="post">
                            @csrf
                            <div class=row>
                                <div class=col-md-6>
                                    <div class="form-group icon-lft"> <input type=text name="fname" class="form-control icon-lft"
                                            placeholder="First Name" required> <i class=ic-user></i> </div>
                                </div>
                                <div class=col-md-6>
                                    <div class="form-group icon-lft"> <input type=text name="lname" class=form-control
                                            placeholder="Last Name" required> <i class=ic-user></i> </div>
                                </div>
                                <div class=col-md-6>
                                    <div class=form-group> <input type=text name="general" class=form-control placeholder=General required>
                                    </div>
                                    {{-- <div class=form-group> <select class=form-select>
                                            <option>Option1</option>
                                        </select> </div> --}}
                                </div>
                                <div class=col-md-6>
                                    <div class="form-group icon-lft"> <input type=text name="phone" class=form-control
                                            placeholder=Phone required> <i class=ic-phone></i> </div>
                                </div>
                            </div>
                            <div class="form-group icon-lft"> <input type=text name="email" class=form-control placeholder=Email>
                                <i class=ic-envelope required></i>
                            </div>
                            <div class="form-group icon-lft"> <input type=text name="message" class=form-control
                                    placeholder=Message> <i class=ic-message></i> </div>
                            <div class=btn-container> <button class="btn btn-primary">Submit</button> </div>
                        </form>
                    </div>
                    <div class=col-lg-4>
                        <ul class="office-location border-0">
                            <li> <i class=ic-marker></i>
                                <p>{{ $setting->footer_address }}</p>
                            </li>
                            <li> <i class=ic-phone></i>
                                <div class=tel-container> <a href=tel:{{ $setting->footer_phoneone }}>{{ $setting->footer_phoneone }}</a>, <a
                                        href=tel:{{ $setting->footer_phonetwo }}> {{ $setting->footer_phonetwo }}</a>, <a href=tel:{{ $setting->footer_phonethree }}>{{ $setting->footer_phonethree }}</a> </div>
                            </li>
                            <li> <i class=ic-mail></i> <a
                                    href=mailto:tel:{{ $setting->footer_email }}>{{ $setting->footer_email }}</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class=map-container> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.380628046313!2d85.32192611562625!3d27.705531882792666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a7ff81bb15%3A0xa2fdd0c8d9077cdd!2sDesire%20Educational%20Consultancy!5e0!3m2!1sen!2snp!4v1644142628299!5m2!1sen!2snp"
                allowfullscreen="" loading=lazy></iframe>
        </section>
    </main>
@endsection

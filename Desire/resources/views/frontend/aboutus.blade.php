@extends('frontend.include.master')
@section('content')
    {{-- <section class="container desire-mission">
    <h4 class=top-heading>About</h4>
    <div class="row top-1">
        <div class=col-lg-7>
            <div class=heading-main-container>
                <h2 class=heading-main>{{ $about->about }}</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <p class=desire-mission-desc>{{ $about->desc }}</p>
        </div>
        <div class="col-lg-5 mt-lg-0 mt-5">
            <div class=heading-main-container>
                <h2 class=heading-main>{{ $about->mission }}</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <p class=desire-mission-desc>{{ $about->descmission }}</p>
        </div>
    </div>
</section>
<section class=logo-why-choose>
    <div class="row mx-0">
        <div class="col-lg-6 image-col">
            <div class=img-container> <img src="{{ $about->photo }}" alt=""> </div>
        </div>
        <div class="col-lg-6 px-0">
            <div class=blue-text-container>
                <div class=heading-main-container>
                    <h2 class=heading-main>{{ $about->choose }}</h2>
                    <div class=two-line>
                        <div class=line1></div>
                        <div class=line2></div>
                    </div>
                </div>
                <p>{{ $about->descchoose }}</p>
            </div>
        </div>
    </div>
</section>
<section class=message-from-md>
    <div class="row px-0 mx-0">
        <div class="col-lg-6 bg-red-sec">
            <h2 class=heading>{{ $about->message }}</h2>
            <p>{{ $about->descmessage }}</p>
        </div>
        <div class="col-lg-6 image-col">
            <div class=img-container> <img src="{{ $about->photo1 }}" alt=""> </div>
        </div>
    </div>
</section> --}}
    <section class=body-top-section>
        <div class=container>
            <div class=row>
                <div class="col-6 col-lg-8">
                    <div class=text-container>
                        <h1>About Us</h1>
                        <p>Serving since 2015</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class=img-container> <img src=assets/images/logo.png alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <main class=about-page>
        <section class="container desire-mission">
            <h4 class=top-heading>About</h4>
            <div class="row top-1">
                <div class=col-lg-7>
                    <div class=heading-main-container>
                        <h2 class=heading-main>{{ $about->about }}</h2>
                        <div class=two-line>
                            <div class=line1></div>
                            <div class=line2></div>
                        </div>
                    </div>
                    <p class=desire-mission-desc>{{ $about->desc }}
                    </p>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class=heading-main-container>
                        <h2 class=heading-main>{{ $about->mission }}</h2>
                        <div class=two-line>
                            <div class=line1></div>
                            <div class=line2></div>
                        </div>
                    </div>
                    <p class=desire-mission-desc>{{ $about->descmission }}</p>
                </div>
            </div>
        </section>
        <section class=logo-why-choose>
            <div class="row mx-0">
                <div class="col-lg-6 image-col">
                    <div class=img-container> <img src="{{ $about->photo }}" alt=""> </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class=blue-text-container>
                        <div class=heading-main-container>
                            <h2 class=heading-main>{{ $about->choose }}</h2>
                            <div class=two-line>
                                <div class=line1></div>
                                <div class=line2></div>
                            </div>
                        </div>
                        <p>{{ $about->descchoose }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class=message-from-md>
            <div class="row mx-0">
                <div class="col-lg-6 bg-red-sec">
                    <h2 class=heading>{{ $about->message }}</h2>
                    <p>{{ $about->descmessage }}</p>
                </div>
                <div class="col-lg-6 image-col">
                    <div class=img-container> <img src="{{ $about->photo1 }}" alt=""> </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@extends('frontend.include.master')
@section('content')
<section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1>Testimonials</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src=assets/images/logo.png alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="testimonial-page mx-auto">
    <section class="container-fluid testimonial">
        <div class=heading-main-container>
            <h2 class=heading-main>Student Testimonials</h2>
            <div class=two-line>
                <div class=line1></div>
                <div class=line2></div>
            </div>
        </div>
        <div class=row>
            @foreach ($testimonial as $test )
            <div class="col-lg-12 col-md-6">
                <div class="testimonial-card bg-blue-17">
                    <div class=row>
                        <div class="col-lg-3 col-12">
                            <div class=img-container> <img src="{{ $test->photo }}" height="308px" width="312px" alt=""> </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class=testimonial-card-body>
                                <p>{!! html_entity_decode($test->desc) !!}</p>
                                <div class=testimonial-card-body-name>
                                    <div class=line></div>
                                    <h4>{{ $test->name }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
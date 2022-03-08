@extends('frontend.include.master')
@section('content')
{{-- <section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1>Our Services</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="blog-detail-page mx-auto">
    <section class=blog-detail>
        <div class=img-container> <img src="{{  $service->photo }}" alt="" > </div>
        <br>
        <div class=container>
            <p class=text-description>{!! html_entity_decode( $service->offer_desc) !!}</p>
      
        </div>
    </section>
</main> --}}

<section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1>Our Services</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="blog-detail-page mx-auto">
    <section class=blog-detail>
        <div class=img-container> <img src="{{  $service->photo }}" alt=""> </div>
        <div class=container>
            <p class=text-description>{!! html_entity_decode( $service->offer_desc) !!}</p>
        </div>
    </section>
</main>


@endsection
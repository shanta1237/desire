@extends('frontend.include.master')
@section('content')
<section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1>Our Offers</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="package-page mx-auto">
    <section class=package-area>
        <div class=container>
            <div class=row>
                @foreach ($offer as $item)
                <div class=col-lg-6>
                    <div class=package-card>
                        <h4 class=package-offer>{{ $item->title }}</h4>
                        <div class=img-container> <img src="{{ asset('assets/images/package-card.png') }}" alt=""> </div>
                        <div class=card-body>
                            <p class=package-description>{{ $item->description }}</p>
                            <a class="btn btn-primary" href="{{route('contact')}}">Contact us</a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                
                <div class=col-lg-6>
                    <div class=package-card>
                        <h4 class=package-offer>Free Ielts Services</h4>
                        <div class=img-container> <img src="{{ asset('assets/images/package-card.png') }}" alt=""> </div>
                        <div class=card-body>
                            <p class=package-description> If you’re someone who just completed a bachelor's and
                                looking forward to a better opportunity for the future, then a M...f you’re someone
                                who just completed a bachelor's and looking forward to a better opportunity for the
                                future, then a M... </p>
                        </div>
                    </div>
                </div>
                <div class=col-lg-6>
                    <div class=package-card>
                        <h4 class=package-offer>Free Ielts Services</h4>
                        <div class=img-container> <img src="{{ asset('assets/images/package-card.png') }}" alt=""> </div>
                        <div class=card-body>
                            <p class=package-description> If you’re someone who just completed a bachelor's and
                                looking forward to a better opportunity for the future, then a M...f you’re someone
                                who just completed a bachelor's and looking forward to a better opportunity for the
                                future, then a M... </p>
                        </div>
                    </div>
                </div>
                <div class=col-lg-6>
                    <div class=package-card>
                        <h4 class=package-offer>Free Ielts Services</h4>
                        <div class=img-container> <img src="{{ asset('assets/images/package-card.png') }}" alt=""> </div>
                        <div class=card-body>
                            <p class=package-description> If you’re someone who just completed a bachelor's and
                                looking forward to a better opportunity for the future, then a M...f you’re someone
                                who just completed a bachelor's and looking forward to a better opportunity for the
                                future, then a M... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection
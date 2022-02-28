@extends('frontend.include.master')
@section('content')
<section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1>Blogs</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="blog-page mx-auto">
    <section class=blog-area>
        <div class=container>
            <div class=row>
                <div class=col-md-6>
                    <div class=blog-card>
                        <div class=img-container> <img src="{{ asset('assets/images/blog-card.png') }}" alt=""> </div>
                        <div class=card-body> <span class=date-badge>01 Janurary 2022</span>
                            <div class=info-icon>
                                <div> <i class=ic-user></i> <span>Desire Edu</span> </div>
                                <div> <i class=ic-tag></i> <span>Desire Edu</span> </div>
                            </div>
                            <h4 class=blog-title>Study In USA</h4>
                            <p class=blog-description> If you’re someone who just completed a bachelor's and looking
                                forward to a better opportunity for the future, then a M...f you’re someone who just
                                completed a bachelor's and looking forward to a better opportunity for the future,
                                then a M... </p>
                        </div>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=blog-card>
                        <div class=img-container> <img src="{{ asset('assets/images/blog-card.png') }}" alt=""> </div>
                        <div class=card-body> <span class=date-badge>01 Janurary 2022</span>
                            <div class=info-icon>
                                <div> <i class=ic-user></i> <span>Desire Edu</span> </div>
                                <div> <i class=ic-tag></i> <span>Desire Edu</span> </div>
                            </div>
                            <h4 class=blog-title>Study In USA</h4>
                            <p class=blog-description> If you’re someone who just completed a bachelor's and looking
                                forward to a better opportunity for the future, then a M...f you’re someone who just
                                completed a bachelor's and looking forward to a better opportunity for the future,
                                then a M... </p>
                        </div>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=blog-card>
                        <div class=img-container> <img src="{{ asset('assets/images/blog-card.png') }}" alt=""> </div>
                        <div class=card-body> <span class=date-badge>01 Janurary 2022</span>
                            <div class=info-icon>
                                <div> <i class=ic-user></i> <span>Desire Edu</span> </div>
                                <div> <i class=ic-tag></i> <span>Desire Edu</span> </div>
                            </div>
                            <h4 class=blog-title>Study In USA</h4>
                            <p class=blog-description> If you’re someone who just completed a bachelor's and looking
                                forward to a better opportunity for the future, then a M...f you’re someone who just
                                completed a bachelor's and looking forward to a better opportunity for the future,
                                then a M... </p>
                        </div>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class=blog-card>
                        <div class=img-container> <img src="{{ asset('assets/images/blog-card.png') }}" alt=""> </div>
                        <div class=card-body> <span class=date-badge>01 Janurary 2022</span>
                            <div class=info-icon>
                                <div> <i class=ic-user></i> <span>Desire Edu</span> </div>
                                <div> <i class=ic-tag></i> <span>Desire Edu</span> </div>
                            </div>
                            <h4 class=blog-title>Study In USA</h4>
                            <p class=blog-description> If you’re someone who just completed a bachelor's and looking
                                forward to a better opportunity for the future, then a M...f you’re someone who just
                                completed a bachelor's and looking forward to a better opportunity for the future,
                                then a M... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=pagination-area>
        <div class=pagination> <button class=active>1</button> <button>2</button> <button>3</button>
            <button>...</button> <button>6</button> <button class=ic-arrow-right2> </button> </div>
    </div>
</main>


@endsection
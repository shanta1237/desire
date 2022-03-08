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
                @foreach ($blogi as $bloge)
                <div class=col-md-6>
                    <a href="{{route('blog.details',$bloge->slug)}}" style="color:black;"><div class=blog-card>
                        <div class=img-container> <img src="{{ $bloge->photo}}" alt=""> </div>
                        <div class=card-body> <span class=date-badge>{{ $bloge->created_at->diffForHumans() }}</span>
                            <div class=info-icon>
                                <div> <i class=ic-user></i> <span>{{ $bloge->cat_id }}</span> </div>
                                <div> <i class=ic-tag></i> <span>{{ $bloge->user_id }}</span> </div>
                            </div>
                            <h4 class=blog-title>{{ $bloge->name }}</h4>
                            <p class=blog-description>{!! html_entity_decode($bloge->description) !!}</p>
                        </div>
                    </div></a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class=pagination-area>
        <div class=pagination> <button class=active>1</button> <button>2</button> <button>3</button>
            <button>...</button> <button>6</button> <button class=ic-arrow-right2> </button> </div>
    </div>
</main>


@endsection
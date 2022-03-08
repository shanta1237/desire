@extends('frontend.include.master')
@section('content')
<section class=body-top-section>
    <div class=container>
        <div class=row>
            <div class="col-6 col-lg-8">
                <div class=text-container>
                    <h1> {{ $blog->name }}</h1>
                    <p>Serving since 2015</p>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class=img-container> <img src=assets/images/logo.png alt=""> </div>
            </div>
        </div>
    </div>
</section>
<main class="blog-detail-page mx-auto">
    <section class=blog-detail>
        <div class=img-container> <img src={{ $blog->photo }} alt=""> <span
                class="date-badge bg-blue-17">{{ $blog->created_at->diffForHumans() }}</span> </div>
        <div class=container>
            <div class=tag-container>
                <div><i class=ic-user></i>{{ $blog->user_id }}</div>
                <div><i class=ic-tag></i>{{ $blog->cat_id }}</div>
            </div>
            <p class=text-description>{!! html_entity_decode($blog->description) !!}</p>
        </div>
    </section>

@endsection
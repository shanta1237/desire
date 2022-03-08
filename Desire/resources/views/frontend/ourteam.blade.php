@extends('frontend.include.master')
@section('content')
    <section class=body-top-section>
        <div class=container>
            <div class=row>
                <div class="col-6 col-lg-8">
                    <div class=text-container>
                        <h1>Our Team</h1>
                        <p>Serving since 2015</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <main class="our-team-page mx-auto">
        <section class="container-fluid our-team">
            <div class=heading-main-container>
                <h2 class=heading-main>Our Creative Team</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>

            <div class=row>
                @foreach ($teams as $team)
                
                    <div class="col-md-6 col-lg-4">
                        <div class=team-card>
                            <div class=img-container> <img src="{{ $team->photo }}" alt=""> </div>
                            <div class="team-card-body bg-red-eb">
                                <h3>{{ $team->full_name }}</h3> <span>{{ $team->employe_status }}</span>
                                <p>{!! html_entity_decode($team->description) !!}</p>
                                <div class=btn-container> <a href="{{ route('team.details',$team->id) }}" class="btn btn-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                
            </div>
        </section>
    </main>
@endsection

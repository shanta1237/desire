@extends('frontend.include.master')
@section('content')
    <section class=body-top-section>
        <div class=container>
            <div class=row>
                <div class="col-6 col-lg-8">
                    <div class=text-container>
                        <h1>Study in Australia</h1>
                        <p>Serving since 2015</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class=img-container> <img src={{ asset('assets/images/logo.png') }} alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <main class="study-detail-page mx-auto">
        <section class="container study-detail">
            <div class=heading-main-container>
                <h2 class=heading-main>{{ $destination['title'] }}</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <p class="text-description">
            <h1><b>{{ $destination->title }} </b></h1> <br>
            <font size="+1.5">{!! html_entity_decode($destination->description) !!}</font>
            </p>
            </font>
            <div class=collapse-section>
                @foreach ($destination as $contry)
                    <div class=collapse-container> <button type=button data-bs-toggle=collapse
                            data-bs-target=#collapseExample aria-expanded=false aria-controls=collapseExample>
                            <span>Australia's States and Territories States: 6, Territories: 2</span> <i class=ic-plus></i>
                        </button>
                        <div class=collapse id=collapseExample>
                            <div class="card card-body mt-2">
                                <img src="trilia.png" alt="Australia">
                                <b>Study in Australia:</b>
                                More than 758,000 international students were studying and living in Australia. More than
                                half of the universities are listed in the Times Higher Education World University
                                Rankings (2021), six are in the top 100. Australia offers prestigious Australia Award
                                scholarships to emerging leaders from around the world to undertake study, research, and
                                professional development in tertiary institutions in Australia and the region.
                                <br>
                                <b>Basic key points to choose Australia for study destination: </b>
                                <ul>
                                    <li> 3rd most popular international student destination </li>
                                    <li> 5 out of 30 best student cities in the world</li>
                                    <li> 43 Universities (40 Australian, 2 International & 1 Private)</li>
                                    <li> 6 of the top 100 universities</li>
                                    <li> More than A$200 million international scholarships provided by the Australian
                                        Government
                                        each year</li>
                                    <li> Part-Time job available for international students Dependent can join</li>
                                    <li> Post- Study Work (PSW) Reasonable tuition fees Aﬀordable living cost</li>
                                    <li> Friendly people & Safe environment Low population</li>
                                    <li> Tuition Protection Program Easy Visa Procedure</li>
                                </ul>
                                <br>
                                <b>Types of tertiary institution:</b>
                                <ul>
                                    <li>Universities</li>
                                    <li>TAFE Institutes</li>
                                    <li>Private Colleges/ VET Colleges</li>
                                </ul>

                                <b>Types of Degree:</b>
                                <li> Vocational Education and Training (VET)</li>
                                <li> Bachelor’s Degree</li>
                                <li> Master’s Degree</li>
                                <li> PhD Degree</li>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <a href="{{ route('contact') }}">
                <div class=btn-container> <button class="btn btn-primary"> <i class=ic-message></i> Contact With Counselor
                    </button> </div>
            </a>
        </section>
    </main>
@endsection

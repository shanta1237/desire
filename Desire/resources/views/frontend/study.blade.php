@extends('frontend.include.master')
@section('content')
@foreach ($destination as $countri)
    
@endforeach
    <section class=body-top-section>
        <div class=container>
            <div class=row>
                <div class="col-6 col-lg-8">
                    <div class=text-container>
                        <h1>{{ $countri->title }}</h1>
                        <p>Serving since 2015</p>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class=img-container> <img src="{{ asset('assets/images/logo.png') }}" alt=""> </div>
                </div>
            </div>
        </div>
    </section>
    <main class="study-detail-page mx-auto">
        <section class="container study-detail">
            <div class=heading-main-container>
                <h2 class=heading-main>Study in Australia</h2>
                <div class=two-line>
                    <div class=line1></div>
                    <div class=line2></div>
                </div>
            </div>
            <p class="text-description">
            <h1><b>About Australia: </b></h1> <br>
            <font size="+1.5">Australia, officially commonwealth of Australia, is one of the most multicultural countries in
                the
                world, and home to the world's oldest continuing culture. The capital city of Australia is Canberra and
                largest city is Sydney (5.3 Million) with the total population of 24.7Million. Main language used in
                Australia is English with more than 300 others. Australia Dollar (AUD) is the currency of Australia.
                Tourism is one of the Australia’s largest export Industries, it employees over 666000 people. Melbourne,
                Sydney and Adelaide were the three Australian cities which were listed in the top ten world's most live
                able cities in 2019 by the Economist Intelligence Unit's global live ability index. Australian cultures
                and festivals are highlights nationally and internationally such as the Sydney Biennale, the OzAsia
                Festival, Splendour in the Grass, WOMADelaide and Vivid Sydney draw large audiences from across
                Australia and the world.</font>
            </p>
            <p class=text-description>
                <font size="+1.5">New Emerging technologies are making an impact across Australia's economy and society and
                    are being
                    support by Australian businesses of different sizes, across different sectors over there. The
                    Commonwealth Scientific and Industrial Research Organization is Australia's most trusted research
                    institution and most connected innovator working with every Australian university, government department
                    and major Australian industry. CSIRO works in over 80 countries and is ranked in the top one per cent of
                    world scientific institutions in 13 of 22 research fields.
                    <h5><i>Source: Australian Government, Department of foreign affairs and trade </i></h5>
            </p>
            </font>
            <div class=collapse-section>
                <div class=collapse-container> <button type=button data-bs-toggle=collapse data-bs-target=#collapseExample
                        aria-expanded=false aria-controls=collapseExample>
                        <span>Australia's States and Territories States: 6, Territories: 2</span> <i class=ic-plus></i>
                    </button>
                    <div class=collapse id=collapseExample>
                        <div class="card card-body mt-2">
                            <img src="{{ asset('assets/trilia.png') }}" alt="Australia">
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
                <div class=collapse-container> <button type=button data-bs-toggle=collapse data-bs-target=#collapseExample1
                        aria-expanded=false aria-controls=collapseExample>
                        <span>Universities and Higher Education</span> <i class=ic-plus></i> </button>
                    <div class=collapse id=collapseExample1>
                        <div class="card card-body mt-2">
                            <b>Living in Australia:</b>
                            One of the most important things to consider is how much money student need to have be
                            comfortable while they are studying in Australia. Australia currently has the 12th highest
                            cost of living in the world, with the USA and UK well behind at 21 and 23rd place
                            respectively. Students have different options to stay in Australia. As a general, the
                            average international student in Australia spends nearly (AUD) $1,550 per month for their
                            accommodation which includes rent, food, clothing, transport, telephone bill, Internet, and
                            so on.
                            <b>Types of accommodation: </b>
                            On-campus Housing
                            Off- Campus Housing:
                            <li>Homestay</li>
                            <li>Rental</li>
                            <li>Apartment</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class=btn-container> <button class="btn btn-primary"> <i class=ic-message></i> Contact With Counselor
                </button> </div>
        </section>
    </main>
@endsection

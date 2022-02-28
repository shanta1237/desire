<footer class=footer-section>
    <div class=footer-main>
        <div class="container-fluid px-0">
            <div class="row mx-0">
                <div class="col-lg-8 text-col">
                    <div class=row>
                        <div class=col-md-6>
                            <div class=footer-heading>Office Location-Reach Us</div>
                            <ul class=office-location>
                                <li> <i class=ic-marker></i>
                                    <p>{{ \App\Models\Setting::value('footer_address') }}</p>
                                </li>
                                <li> <i class=ic-phone></i>
                                    <div class=tel-container> <a href=tel:{{ \App\Models\Setting::value('footer_phoneone') }}>{{ \App\Models\Setting::value('footer_phoneone') }}</a>, <a
                                            href=tel:{{ \App\Models\Setting::value('footer_phonetwo') }}> {{ \App\Models\Setting::value('footer_phonetwo') }}</a>, <a href=tel:{{ \App\Models\Setting::value('footer_phonethree') }}> {{ \App\Models\Setting::value('footer_phonethree') }}</a>
                                    </div>
                                </li>
                                <li> <i class=ic-mail></i> <a
                                        href=mailto:{{ \App\Models\Setting::value('footer_email') }}>{{ \App\Models\Setting::value('footer_email') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class=col-md-6>
                            <div class=useful-links>
                                <div class=footer-heading>Useful Links</div>
                                <div class=red-underline></div>
                                <ul>
                                    <li>Study In Australia</li>
                                    <li>Study In USA</li>
                                    <li>Study In UK</li>
                                    <li>Study In Canada</li>
                                    <li>Study In Ireland</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 image-col bg-white">
                    <div class=img-container> <img src={{ \App\Models\Setting::value('footer_logo') }} alt=""> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom container-fluid">
        <div class=row>
            <div class="col-md-6 col-lg-4">
                <p class="font-bold text-center"> DESIRE EDUCATION <br>CONSULTANCY</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <p>© Copyright 2021 ALL rights reserve. Desire Consultancy</p>
            </div>
            <div class="col-md-6 col-lg-4">
                <p>Developed by Trioplus Technology</p>
            </div>
        </div>
    </div>
</footer>
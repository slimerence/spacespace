@extends( _get_frontend_layout_path('frontend') )

@section('content')

    @include(_get_frontend_theme_path('pages.elements.homeslider'))

    <!--== Hero BOx Start ==-->
    <section id="hero-box-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-box-area">
                        <div class="row">
                            <div class="col-lg-11 aligncenter">
                                <div class="row">
                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <div class="font-as"><i class="fa fa-star fa-fw" aria-hidden="true"></i></div>
                                            <h3>Best Quailty</h3>
                                            <p>Ours are carefully constructed from durable materials and securely fastened to last a very long time.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <div class="font-as"><i class="fa fa-usd fa-fw" aria-hidden="true"></i></div>
                                            <h3>Best Price</h3>
                                            <p>Little things like shipping display racks unassembled and manufacturing in large quantities save you money.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox Start -->
                                    <div class="col-lg-4 text-center">
                                        <div class="single-hero-box">
                                            <div class="font-as"><i class="fa fa-truck fa-fw" aria-hidden="true"></i></div>
                                            <h3>Best Delivery</h3>
                                            <p>With an extensive, in-stock inventory that you won't waste time waiting on fixtures to arrive.</p>
                                        </div>
                                    </div>
                                    <!-- Single HeroBox End End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Hero Box End ==-->

    <!--== About Area Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>About <span>Us</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- About Text Start -->
                <div class="col-lg-6">
                    <div class="about-text">
                        <p>Are you setting up a new shop or looking for more display shelves or cabinets for your shop? We are here to help. </p>
                        <p>Victoria Technology Pty Ltd trading as SpaceSapce are a direct importer of shop fittings and storage solutions. We have been in this line for more than 13 years and we stored wide range of quality shop fittings and shelves including gondola shelving, slat wall shelving/panels, counters, showcases and storage shelving.</p>
                        <p>We could make special offer according to your shop plan. Please contact us with your shop measurement or drawing design. Our products could satisfy different level of requirement. You’re also welcomed to visit our warehouse and shown room in Unit 10/111 Lewis Road, Wantirna South VIC 3152.</p>
                        <p>We look forward to supporting your business.</p>
                    </div>
                </div>
                <!-- About Text End -->

                <!-- About Video Start -->
                <div class="col-lg-6">
                    <div class="about-video">
                        <iframe src="https://www.youtube-nocookie.com/embed/O69q6FHR99U?rel=0&amp;showinfo=0"></iframe>
                    </div>
                </div>
                <!-- About Video End -->
            </div>
        </div>
    </section>
    <!--== About Area End ==-->

    @include(_get_frontend_theme_path('pages.elements.home_review'))

    @include(_get_frontend_theme_path('pages.elements.home_ourwork'))

@endsection
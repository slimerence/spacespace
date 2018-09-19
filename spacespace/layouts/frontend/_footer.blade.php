<!--== Footer Area Start ==-->
<footer id="footer-area">
    <div class="container">
        <div class="footer-widget">
            <div class="row">
                <!--Desktop Version 1st Single Widget Start -->
                <div class="col-lg-4 d-none d-xl-block">
                    <div class="single-widget footer-about">
                        <div class="widget-body">
                            <img src="{{ asset('images/footer-logo.png') }}" alt="Space">
                        </div>
                    </div>
                </div>
                <!--Desktop Version 1st Single Widget End -->

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6 d-xl-none">
                            <div class="single-widget footer-about">
                                <div class="widget-body">
                                    <img src="{{ asset('images/footer-logo.png') }}" alt="Spce">
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                        <li><a href="{{ url('/page/blog') }}">Our Work</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Info</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="{{ url('/term') }}">Terms & Conditions</a></li>
                                        <li><a href="{{ 'tel:'.$siteConfig->contact_phone }}"><span>Tel:</span>{{$siteConfig->contact_phone}}</a></li>
                                        <li><a href="{{ 'mailto:'.$siteConfig->contact_email }}"><span>Email:</span>{{ $siteConfig->contact_email }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->

                        <!-- Single Widget Start -->
                        <div class="col-lg-4 col-md-6">
                            <div class="single-widget">
                                <div class="widget-title">
                                    <h4>Address</h4>
                                </div>
                                <div class="widget-body address-content">
                                    <p class="address">{{ $siteConfig->contact_address }}</p>

                                    <a href="{{ url('contact-us') }}" class="con-btn">Get Direction on Map <i class="fa fa-long-arrow-right"></i></a>
                                    @if(isset($siteConfig))
                                    <ul class="social-icon">
                                        @if(!empty($siteConfig->facebook))
                                            <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if(!empty($siteConfig->twitter))
                                            <li><a href="{{ $siteConfig->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if(!empty($siteConfig->linked_in))
                                            <li><a href="{{ $siteConfig->linked_in }}"><i class="fa fa-linkedin"></i></a></li>
                                        @endif
                                    </ul>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <!-- Single Widget End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="copyright-content">
                        <p>&copy; Copyright 2018 SpaceSpace. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="powerby-content">
                        <p>Powered by <a href="https://www.webmelbourne.com/" target="_blank">Webmelbourne</a></p>
                    </div>
                </div>
            </div>
            <!--== Scroll Top ==-->
            <div id="scroll-top">Top</div>
            <!--== Scroll Top ==-->
        </div>
    </div>
</footer>
<!--== Footer Area End ==-->


@extends( _get_frontend_layout_path('frontend') )

@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>Contact <span>Us</span></h2>
                        <p>contact us for any kind of support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Information Start ==-->
    <div id="contact-information">
        <div class="container">
            <div class="row">
                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/support.svg') }}" alt="">
                        <p><span>Tel: </span> +000 875 7859</p>
                        <p><span>Mob: </span> +000 897 2547</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/map.svg') }}" alt="">
                        <p><span>Head Office: </span>: 283 Richland <br>Avenue Stafford, TX 774</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/mail.svg') }}" alt="">
                        <p><span>Email: </span> mail@rajmistri.com</p>
                        <p><span>Web: </span> www.rajmistri.com</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->

                <!-- Single Contact Info Start -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-contact-info">
                        <img src="{{ asset('img/svg-icon/clock.svg') }}" alt="">
                        <p><span>Week Days: </span> 05:00 – 22:00</p>
                        <p><span>Sunday: </span> Closed</p>
                    </div>
                </div>
                <!-- Single Contact Info End -->
            </div>
        </div>
    </div>
    <!--== Contact Information End ==-->

    <!--== Contact Us Form Start ==-->
    <section id="contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-contant">
                        <h3>Contact us for help!</h3>
                        <form id="contactForm" name="sentMessage" novalidate>
                            <div class="row">
                                <!-- Name Input Start -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please Write your Name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Name Input End -->

                                <!-- Email Input Start -->
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please Enter your Email Address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Email Input End -->

                                <!-- Subject Input Start -->
                                <div class="col-lg-6  col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" type="text" placeholder="Subject *" required data-validation-required-message="Please Write your Contact Subject.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Subject Input End -->

                                <!-- City Input Start -->
                                <div class="col-lg-6  col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="city" type="text" placeholder="City Name">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- City Input End -->

                                <!-- Message Input Start -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please Write Your message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <!-- Message Input End -->

                                <!-- Submit Input Start -->
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="raj_btn" type="submit">Send Now <i class="fa fa-send-o"></i></button>
                                </div>
                                <!-- Submit Input End -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Contact Us Form End ==-->

    <!--== Google Map Area Start ==-->
    <div id="google-map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3660.6768235772975!2d91.13049751440194!3d23.43603870663053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1508563567887"></iframe>
    </div>
    <!--== Google Map Area End ==-->

@endsection
@extends( _get_frontend_layout_path('frontend') )

@section('content')
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title section-title">
                        <h2>Find <span>More</span></h2>
                        <p>about our products</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->



    <!--== News Open Page Start ==-->
    <section id="news-open-area" class="section-padding">
        <div class="container">
            <!-- News Open page News Heading or Title Start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-heading">
                        <h1>Product Name</h1>
                    </div>
                </div>
            </div>
            <!-- News Open page News Heading or Title End -->

            <!-- News Open page Contant Start -->
            <div class="row">
                <!-- News Open page News Content Start -->
                <div class="col-lg-8 col-md-12">
                    <div class="single-content-open project-open">

                        <a data-fancybox="gallery" href="{{ asset('img/spacespace/product1.jpg') }}"><img src="{{ asset('img/spacespace/product1.jpg') }}" alt=""></a>

                        <div class="project-infor">
                            <h3>Project Info:</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam at dolorem doloremque ducimus harum impedit iusto labore neque nihil nulla quae, sequi soluta tempore ullam ut vel voluptatem? Enim?</p>
                       </div>
                    <!-- Product Details Start-->
                        <div class="p-t-md project-infor">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#currentPreferences">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#alternative"> Details </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#link">Warranty</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="currentPreferences">
                                            <ul class="list-group media-list media-list-stream">
                                                <p>Crafted from eco-friendly MDF board, the Console Table features a timeless design that is well proportioned and durable in every aspect. Simple as it may look, the Console Table actually utilizes the side cross bracing to depict a distinctive style as well as to provide reinforced supports. Smart touches that integrate form and function so well. The three tiers of shelving offer ample space for decorative displays, collectibles and even books. Which means that the Console Table can be re-purposed in a number of ways to suit your décor requirements. Not least, the NC lacquer paint finish is absolutely flawless and smooth to the touch.</p>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade in" id="alternative">
                                            <ul class="list-group media-list media-list-stream">
                                                <ul>
                                                    <h3>Specifications</h3>
                                                    <li><p>Premium MDF frame</p></li>
                                                    <li><p>15mm thick board</p></li>
                                                    <li><p>Quality NC lacquer painting</p></li>
                                                    <li><p>Shelf height: 27cm</p></li>
                                                    <li><p>Ground clearance: 9cm</p></li>
                                                    <li><p>Overall dimension: 100 x 40 x 76cm</p></li>
                                                    </li>
                                                    <li>12 month warranty</li>
                                                </ul>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade in" id="link">
                                            <ul class="list-group media-list media-list-stream">
                                                <p>At MyDeal.com.au it is our top priority to provide customers with a secure and enjoyable shopping experience. If there are any problems with your purchase please do not hesitate to contact us and our friendly Customer Support Team will assist you promptly.</p>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Product Details End-->
                    </div>

                    <!-- News Share Like Button -->
                    <div class="content-share-btn project-share">
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-facebook"></i> Like</a>
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                        <a href="http://facebook.com/divergentstudiobd" target="_blank"><i class="fa fa-share-alt"></i> Share</a>
                    </div>
                    <!-- News Share Like Button -->
                </div>
                <!-- News Open page News Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">
                        <!-- Single Sidebar Start -->
                        <aside class="single-sidebar">
                            <div class="sidebar-title">
                                <h3><i class="fa fa-leanpub"></i>Related Products</h3>
                            </div>

                            <div class="sidebar-body">
                                <div class="recent-news-side">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <img class="mr-3" src="{{ asset('img/spacespace/product2.jpg') }}" alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1"><a href="news-open.html">No. 7 Line Subway Extist Project Won ENR.</a></h5>
                                                <a href="news-open.html" class="recent-news-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3" src="{{ asset('img/spacespace/product3.jpg') }}" alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1"><a href="news-open.html">CCNA Featured in Multiple Media Reports on US.</a></h5>
                                                <a href="news-open.html" class="recent-news-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="mr-3" src="{{ asset('img/spacespace/product4.jpg') }}" alt="">
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-1"><a href="#">Working from home mean we could vary snack</a></h5>
                                                <a href="news-open.html" class="recent-news-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <aside class="single-sidebar">
                            <div class="sidebar-title">
                                <h3><i class="fa fa-folder-open-o"></i> Categories</h3>
                            </div>

                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    <li><a href="#">Frame1</a></li>
                                    <li><a href="#">Frame2</a></li>
                                    <li><a href="#">Frame3</a></li>
                                    <li><a href="#">Frame4</a></li>
                                </ul>
                            </div>
                        </aside>
                        <!-- Single Sidebar End -->

                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
            <!-- News Open page Contant End -->
        </div>
    </section>
    <!--== News Open Page End ==-->



@endsection
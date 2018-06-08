@extends(_get_frontend_layout_path('frontend'))
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
                        <h2>
                            {{ $product->name }}&nbsp;
                            @if($product->manage_stock && $product->stock<$product->min_quantity)
                                <span class="badge badge-pill badge-danger">Out of Stock</span>
                            @endif
                        </h2>
                    </div>
                </div>
            </div>
            <!-- News Open page News Heading or Title End -->

            <!-- News Open page Contant Start -->
            <div class="row">
                <!-- News Open page News Content Start -->
                <div class="col-lg-8 col-md-12">
                    <div class="single-content-open project-open">
                        <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-navposition="left" data-arrows="false" data-autoplay="true" data-height="350" data-maxheight="100%">
                            @foreach($product_images as $key=>$media)
                                <img src="{{ asset($media->url) }}">
                            @endforeach
                        </div>
                        <div class="project-infor">
                            <h3>Product Info:</h3>
                            @include(_get_frontend_theme_path('catalog.elements.sections.short_description'))
                        </div>
                        <!-- Product Details Start-->
                        <div class="p-t-md project-infor">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            @if(!empty($product->description))
                                                <a class="nav-link active" data-toggle="tab" href="#currentPreferences">Description</a>
                                            @endif
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#alternative"> Details </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="currentPreferences">
                                            <ul class="list-group media-list media-list-stream">
                                                {!! $product->description !!}
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade in" id="alternative">
                                            <ul class="list-group media-list media-list-stream">
                                                <ul>
                                                    {!! $product->description !!}
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

                        <!-- Single Sidebar End -->
                        <?php
                        $relatedProducts = $product->loadRelatedProducts();
                        ?>
                        @if(count($relatedProducts))
                            <aside class="single-sidebar">
                                <div class="sidebar-title">
                                    <h3><i class="fa fa-leanpub"></i>Related Products</h3>
                                </div>

                                <div class="sidebar-body">
                                    <div class="recent-news-side">
                                        <ul class="list-unstyled">
                                            @foreach($relatedProducts as $rp)
                                                <li class="media">
                                                    <img class="mr-3" src="{{ $rp->getProductDefaultImageUrl() }}" alt="{{ $rp->name }}">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-1"><a href="{{ url('catalog/product/'.$rp->uri) }}">{{ $rp->name }}</a></h5>
                                                        <p class="is-pulled-left {{ $rp->special_price ? 'has-text-grey-lighter' : 'has-text-danger' }} is-size-5">${{ $rp->getDefaultPriceGST() }}</p>
                                                        <a href="{{ url('catalog/product/'.$rp->uri) }}" class="recent-news-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        @endif
                        <!-- Single Sidebar Start -->
                        <aside class="single-sidebar">
                            <div class="sidebar-title">
                                <h3><i class="fa fa-folder-open-o"></i> Categories</h3>
                            </div>

                            <div class="sidebar-body">
                                <ul class="sidebar-list">
                                    @foreach ($categoriesTree as $item)
                                        <li><a href="{{ url('category/view/'.$item->uri) }}">{{$item ->name}}</a></li>
                                    @endforeach
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
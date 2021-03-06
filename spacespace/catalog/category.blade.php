@extends(_get_frontend_layout_path('frontend'))
@section('content')
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
    <section id="category-view-manager" class="section-padding ">
        <div class="container">

            <!-- News Open page Contant Start -->
            <div class="row">
                <!-- Sidebar Area Start -->
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-area">
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
                <!-- News Open page News Content Start -->
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php
                                $productsChunk = $products->chunk(3);
                                ?>
                                @foreach ($productsChunk as $row)

                                    @foreach($row as $key=>$product)
                                        <div class="col-lg-4 col-md-6 news-slice">
                                            <div class="single-news-content">
                                                <a href="{{ url('catalog/product/'.$product->uri) }}" class="news-thum" style="background-image: url({{ $product->getProductDefaultImageUrl() }})"></a>
                                                <div class="product-content">
                                                    <h4><a href="{{ url('catalog/product/'.$product->uri) }}">{{ $product->name }}</a></h4>
                                                    <div class="news-meta">
                                                        @if($product->special_price)
                                                            <a href="{{ url('catalog/product/'.$product->uri) }}"><strong style="text-decoration: line-through;">${{ $promotionProduct->getSpecialPriceGST() }}</strong> <span>${{ $promotionProduct->getDefaultPriceGST() }}</span></a>
                                                        @else <a href="{{ url('catalog/product/'.$product->uri) }}">${{ $product->getDefaultPriceGST() }}</a>
                                                        @endif
                                                        <a href="{{ url('catalog/product/'.$product->uri) }}" class="alignright rd-btn">View Now <i class="fa fa-eye fa-fw"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <a href="{{ url('contact-us') }}" class="news-see-more-btn raj_btn">See More</a>
                                </div>
                            </div>
                            <!-- Project Gird End -->
                        </div>
                    </div>
                </div>
                <!-- News Open page News Content End -->


            </div>
            <!-- News Open page Contant End -->
        </div>
    </section>

@endsection
<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!--=== Isotope Min Js ===-->
<script src="{{ asset('js/plugins/isotope.min.js') }}"></script>
<!--=== PortfoloHover Min Js ===-->
<script src="{{ asset('js/plugins/hover.min.js') }}"></script>
<!--=== Owl Carousel Min Js ===-->
<script src="{{ asset('js/plugins/owl.carousel.min.js') }}"></script>
<!--=== SlickNav Min Js ===-->
<script src="{{ asset('js/plugins/slicknav.js') }}"></script>
<!--=== Parallax Bg Js ===-->
<script src="{{ asset('js/plugins/parallax-bg.js') }}"></script>

<!--=== Mian Js ===-->
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/all.js') }}"></script>
@if(isset($vuejs_libs_required))
    @foreach($vuejs_libs_required as $lib)
        @include('frontend.vuejs.'.$lib)
    @endforeach
@endif
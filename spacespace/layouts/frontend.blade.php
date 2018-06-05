<!DOCTYPE html>
<html class="no-js" lang="en">
@include(_get_frontend_layout_path('frontend._head'))

<body class="loader-active">

@yield('content')
@include(_get_frontend_layout_path('frontend._footer'))
@include( _get_frontend_layout_path('frontend._js') )

</body>

</html>
@include('frontviews.layouts.partials._head')
@include('frontviews.layouts.partials._navigation')
@include('frontviews.layouts.partials._header')
@include('admin.adminlayouts.includes.error')

@yield('content')
@include('frontviews.layouts.partials._footer')

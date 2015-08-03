<!DOCTYPE html>
<html lang="en" style="background-image: url('/uploads/track.jpg')">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <title>{{ $title or config('blog.title') }}</title>

    <link rel="alternate" type="application/rss+xml" href="{{ url('rss') }}"
          title="RSS Feed {{ config('blog.title') }}">

    {{-- Styles --}}
    <link href="/assets/css/app.css" rel="stylesheet">
    @yield('styles')

    {{-- HTML5 Shim and Respond.js for IE8 support --}}
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@include('blog.partials.page-nav')

@yield('page-header')

<div class="container a">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{--<div>Here it is</div>--}}
        </div>
    </div>
</div>

{{--Footer we're leaving off for now.--}}
{{--@include('blog.partials.page-footer')--}}

{{-- Scripts --}}
<script src="/assets/js/blog.js"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55bbd66e1715006c" async="async"></script>

@yield('scripts')

{{--vCita Contact Form.  Keep hidden for now....--}}
{{--@include('blog.partials.vcita')--}}

</body>
</html>

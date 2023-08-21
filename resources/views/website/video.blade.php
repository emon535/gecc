@extends('website.layout.default')
@section('title')
    GECC-Videos
@endsection
@section('content')

@isset($page)
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}img/bg/breadcrumb-bg-10.jpg);">
            <h2>{{ $page->title }}</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>{{ $page->title }}</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-register-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-top">
                        <div class="blog-details-content-wrap vvideo">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="timeline-panel">
                                        <img src="{{ url($page->image) }}" class="img-fluid lazyloaded" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h3>{{ $page->title }}</h3>
                                    <p>{!! $page->content !!}</</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endisset

@endsection
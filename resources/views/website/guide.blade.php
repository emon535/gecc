@extends('website.layout.default')
@section('title')
    GECC-Guide
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-9.jpg);">
            <h2>Career Guidance</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Career Guidance</span></li>
            </ul>
        </div>
    </div>
</div>

@isset($page)
<div class="login-register-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-top">
                        <div class="blog-details-content-wrap">
                            <h3>{!! $page->title !!}</h3>
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endisset
@endsection
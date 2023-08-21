@extends('website.layout.default')
@section('title')
    GECC-Success
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web') }}/img/bg/breadcrumb-bg-5.jpg);">
            <h2>Our Success Stories</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Our Success Stories</span></li>
            </ul>
        </div>
    </div>
</div>
@php
$glance = DB::table('glances')->first();
@endphp
<div class="achievement-area pt-50 pb-50" style="background:#f2f3f8">
    <div class="container animatable">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="header-line">
                    <h3>Success By Numbers</h3>
                    <h1>At A Glance</h1>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-9.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->global_offices }}</h2>
                        <span>Global Offices</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-3.png" alt="">
                    </div>
                    
                    <div class="count-content">
                        <h2 class="count">{{ $glance->global_counsellors }}</h2>
                        <span>Global Counsellors</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-10.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->education_fair }}</h2>
                        <span>UK Education Fair/Expo</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->virtual_events }}</h2>
                        <span>Virtual Events</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-11.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->courses_offered }}</h2>
                        <span>Courses Offered</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->students_served }}</h2>
                        <span>Students Served</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-7.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->free_service }}</h2>
                        <b>%</b>
                        <span>Free Service</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-6.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->student_satisfaction }}</h2>
                        <b>%</b>
                        <span>Student Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@php
$videos = DB::table('videos')->get();
@endphp

@isset($videos)
<div class="event-area bg-img default-overlay ptb-100 latest-eve">
    <div class="container">
        <div class="header-line">
            <h3>Student and partner’s Insights</h3>
            <h1>Student and partner’s testimonials</h1>
        </div>
        <div class="video-active-also owl-carousel nav-style-1">
            @if(count($videos))
            @foreach($videos as $key => $row)
            <div class="single-event event-white-bg">
                <div class="event-content testi">
                    <div class="front-header">
                        {!! $row->url !!}
                    </div>
                </div>
            </div>
            @endforeach
            @endif            
        </div>
    </div>
</div>
@endisset

<style>
   .front-header iframe{
        width: 100% !important;
        height: 220px !important;
    }
</style>
@endsection
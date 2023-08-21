@extends('website.layout.default')

@section('title')
    GECC-Course Details
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg.jpg);">
            <h2>{{ $single->course_name }}</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>{{ $single->course_name }}</span></li>
            </ul>
	    </div>
	</div>
</div>

<div class="course-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="tab-content jump">
                        <div id="course-details-1">
                            <div class="over-view-content">
                                <h3 style="font-weight:700">Course Name : {{ $single->course_name }}</h3>
                                <p>{!! $single->description !!}</p>
                                <div class="course-details-img">
                                    <img src="{{ url($single->image)}}" alt="">
                                </div>
                                <div class="course-summary-wrap">
                                    <div class="single-course-summary">
                                        <h4>Total Students</h4>
                                        <span><i class="fa fa-user"></i> {{ $single->total_student }}</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Duration</h4>
                                        <span><i class="fa fa-clock-o"></i> {{ $single->course_duration }}</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Credits</h4>
                                        <span><i class="fa fa-diamond"></i> {{ $single->course_credit }}</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Total Semester</h4>
                                        <span><i class="fa fa-book"></i> {{ $single->total_semester }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style sidebar-res-mrg-none">
                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Course Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                @foreach($study_option as $value)
                                    <li><a href="{{ route('course-details',['id'=>$value->id]) }}">{{ $value->course_name }} <span>{{ $value->total_student }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
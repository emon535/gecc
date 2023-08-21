@extends('website.layout.default')

@section('title')
    GECC-University
@endsection
@section('content')

<div class="course-details-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4>{{ $single->university_name }}</h4>
                                <h5>University Address: {{ $single->address }}</h5>
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
                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Post</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @foreach($events as $value)
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="{{ route('event-details',['id'=>$value->id]) }}"><img src="{{ url($value->image)}}" ></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="{{ route('event-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h5>
                                        <p>{{ $value->title }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
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
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
                                <h4>{{ $accreditation->name }}</h4>
                                <p>{!! $accreditation->details !!}</p>
                                <div class="course-details-img">
                                    <img src="{{ $accreditation->image ? asset($accreditation->image) : asset('public/blank.jpg') }}" alt="">
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
                                <div class="accreditation-recent-post">
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
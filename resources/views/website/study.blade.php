@extends('website.layout.default')
@section('title')
    GECC-Study
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-1.jpg);">
            <h2>Study Options</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Study Options</span></li>
            </ul>
	    </div>
	</div>
</div>

<div class="event-area bg-img default-overlay ptb-60">
    <div class="container">
        <div class="row">
            @foreach($study_option as $value)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-event event-white-bg">
                        <div class="event-content">
                            <h3><a href="{{ route('course-details') }}">{{ $value->course_name }}</a></h3>
                            {!! $value->description !!}
                            <a href="{{ route('course-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 

@endsection

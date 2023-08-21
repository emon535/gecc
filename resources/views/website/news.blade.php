
@extends('website.layout.default')
@section('title')
    GECC-News
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg.jpg);">
            <h2>News Updates</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>News Updates</span></li>
            </ul>
	    </div>
	</div>
</div>


<div class="event-area bg-img default-overlay ptb-60 latest-eve" style="background:#f2f3f8">
    <div class="container">
        <div class="row">
            @foreach($news as $value)
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="single-event event-white-bg" style="margin:15px 0">
                        <div class="event-img">
                            <a href="{{ route('news-details',['id'=>$value->id]) }}"><img src="{{ url($value->image) }}" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">{{ $value->date }}</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="{{ route('news-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>
                            {!! $value->details !!}
                            <a href="{{ route('news-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
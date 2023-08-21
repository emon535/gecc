@extends('website.layout.default')
@section('title')
    GECC-Events
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-10.jpg);">
            <h2>Events</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Events</span></li>
            </ul>
        </div>
    </div>
</div>


<div class="event-area bg-img default-overlay ptb-60 latest-eve" style="background:#f2f3f8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="event-search">
                    <form style="width:100%;margin-bottom:0" action="{{ route('get-event') }}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="col-md-9 col-xs-12">
                          <input type="date" name="date" placeholder="Select date or Type events name" style="margin-bottom:0"/>
                        </div>
                        <div class="col-md-3 col-xs-12">
                          <button type="submit" class="event-bt default-btn" style="margin:0;width:100%">Search Now</button>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            @if(isset($events))
                @foreach($events as $value)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="single-event event-white-bg" style="margin:15px 0">
                            <div class="event-img">
                                <a href="{{ route('event-details',['id'=>$value->id]) }}"><img src="{{ url($value->image) }}" alt=""></a>
                                <div class="event-date-wrap">
                                    <span class="event-date">{{ $value->date }}</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h3><a href="{{ route('event-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>

                                <p>{!! \Illuminate\Support\Str::limit(strip_tags($value->details), 150,'....')  !!}</p>
                                <a href="{{ route('event-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            @if(isset($search))
                @foreach($search as $value)
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        Total ({{ count($search)}}) results found.
                        <div class="single-event event-white-bg" style="margin:15px 0">
                            <div class="event-img">
                                <a href="{{ route('event-details',['id'=>$value->id]) }}"><img src="{{ url($value->image) }}" alt=""></a>
                                <div class="event-date-wrap">
                                    <span class="event-date">{{ $value->date }}</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h3><a href="{{ route('event-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>
                                <p>
                                {!! \Illuminate\Support\Str::limit(strip_tags($value->details), 150,'....')  !!}</p>
                                <a href="{{ route('event-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            
        </div>
    </div>
</div>

@endsection


@extends('website.layout.default')
@section('title')
    GECC-Blog
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-3.jpg);">
            <h2>Blogs</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Blogs</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay ptb-80 latest-eve" style="background:#f2f3f8">
    <div class="container">
        <div class="header-line">
            <!-- <h3>Catalysing the Global Citizens of tomorrow, today</h3> -->
            <h1>Blogs</h1>
        </div>
        <div class="news-feed-active nav-style-1 owl-carousel">
            @foreach($blogs as $value)
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="{{ route('website.blogs.show', $value->slug) }}"><img src="{{ url($value->image)}}" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">{{ format_date($value->created_at, 'Y-m-d') }}</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="{{ route('website.blogs.show', $value->slug) }}">{{ $value->title }}</a></h3>
                         <p>{!! \Illuminate\Support\Str::limit(strip_tags($value->description), 150,'....')  !!}</p>
                        <a href="{{ route('website.blogs.show', $value->slug) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
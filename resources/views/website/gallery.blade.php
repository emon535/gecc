@extends('website.layout.default')
@section('title')
    GECC-Gallery
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-1.jpg);">
            <h2>Picture Gallery</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Picture Gallery</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay ptb-60">
    <div class="container">
        <div class="row">
            @foreach($album as $value)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-event event-white-bg" style="margin:15px 0">
                        <div class="event-content folder-con" style="text-align:center;">
                            <a href="{{ route('gallery-details',['id'=>$value->id]) }}"><img src="{{ url($value->photo) }}"  alt="fol" style="height: 150px !important;"/></a>
                            <h3 class="fol-ti">{{$value->title}}</h3>
                            <a href="{{ route('gallery-details',['id'=>$value->id]) }}" class="event-bt default-btn">View All Photos</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 

@endsection
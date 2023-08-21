@extends('website.layout.default')
@section('title')
    GECC-Gallery Pictures
@endsection
@section('content')

<div class="event-area bg-img ptb-60">
    <div class="container">
        <h3 style="font-weight:600">{{ $album->title }}</h3>
        <div class="row">
            <div class="col-sm-12">
                <h4><strong style="color: #4DC247;">Share On Social Site</strong> </h4>
            </div>
            <div class="col-sm-12">
                <a class="btn btn-sm btn-primary" href="jabascript:void(0)" onclick="shareOnFB()" style="color: white;"><i class="fa fa-facebook"></i>  Facebook</a>
                <a class="btn btn-sm btn-primary" style="color:  white; background-color: #00acee !important;" href="jabascript:void(0)" onclick="shareOntwitter()"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="jabascript:void(0)" class="btn btn-sm btn-danger" style="color: white; background-color:  #c8232c !important;" onclick="shareOnPintarest()"><i class="fa fa-pinterest"></i> Pinterest</a>
                <a href="jabascript:void(0)" class="btn btn-sm btn-success" style="color: white;" onclick="shareOnMail()"><i class="fa fa-envelope"></i> Mail</a>

            </div>
        </div>
        <div id="shareBlock"></div>
        <div class="row">
            @foreach($gallery as $value)
                <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                    <div class="gal_details_box">
                        <a data-toggle="lightbox" data-gallery="gallery" href="{{$value->photo}}">
                            <img class="img-fluid rounded" alt="" src="{{ url($value->photo) }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 

@endsection
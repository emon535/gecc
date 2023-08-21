@extends('website.layout.default')

@section('title')
     GECC-Partners
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-11.jpg);">
            <h2>Partner Universities</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Partner Universities</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="teacher-area ptb-80">
    <div class="container">
        <div class="brand-logo-area">
            <div class="row innn-part">
                @foreach($university as $value)
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <div class="single-brand-logo">
                            <a href="{{ route('uni-details',['id'=>$value->id]) }}"><img src="{{ url($value->logo) }}" alt=""></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

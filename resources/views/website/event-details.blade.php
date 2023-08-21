@extends('website.layout.default')

@section('title')
    GECC-Event Details
@endsection
@section('content')

<div class="event-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <div class="description-date-social mb-45">
                            <div class="description-date-time">
                                <div class="description-date">
                                    <span class="event-date">{{ $single->date }}</span>
                                </div>
                                <div class="description-meta-wrap">
                                    <div class="description-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{ $single->location }}</span>
                                    </div>
                                    <div class="description-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{ $single->time }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ url($single->image)}}" alt="">
                        <h3>{{ $single->title }}</h3>
                        <p>{!! $single->details !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="cart-wrap">
                    <h3>Submit Registration Form</h3>
                    <div class="shopping-cart-content detail-form" style="display: block;">
                        <form action="{{ route('event-registration') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $single->id }}" name="event_id">
                            <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
                            <input type="text" name="phone" placeholder="Phone number" value="{{ old('phone') }}" required>
                            <input type="text" name="email" placeholder="Email address" value="{{ old('email') }}" required>
                            <input type="text" name="qualification" placeholder="Current qualification" value="{{ old('qualification') }}" required>
                            <input type="text" name="course" placeholder="Course you are interested in" value="{{ old('english_score') }}" required>
                            <input type="text" name="english_score" placeholder="English Test Certificate IELTS, Duolingo etc." value="{{ old('english_score') }}" required>
                            <div class="shopping-cart-btn">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                @if(count($faqs)>0)
                <div id="accordion">
                    <h2>FAQs</h2>
                    @foreach($faqs as $key=> $row)
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$row->id }}" @if($key==0) aria-expanded="true" @endif aria-controls="collapse{{$row->id }}">{{ $row->question }}<span class="fa fa-caret-up"></span></a>
                            </h3>
                        </div>
                        <div id="collapse{{$row->id }}" class="collapse @if($key==0)show @endif">
                            <div class="card-block">
                                <p>{!! $row->answer !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
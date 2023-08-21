@extends('website.layout.default')

@section('title')
    GECC-News Details
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
                        <form>
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="text" name="email" placeholder="Email Address">
                            <input type="text" name="email" placeholder="Location Address">
                            <input type="text" name="phone" placeholder="Phone Number">
                            <div class="shopping-cart-btn">
                                <a class="default-btn btn-hover" href="checkout.html">Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="accordion">
                    <h2>FAQs</h2>
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Question Number one?<span class="fa fa-caret-up"></span></a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="collapse show">
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapseT">Question Number two?<span class="fa fa-caret-down"></a></span></h3>
                        </div>
                        <div id="collapseT" class="collapse">
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapseg">Question Number three?<span class="fa fa-caret-down"></a></span></h3>
                        </div>
                        <div id="collapseg" class="collapse">
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3><a data-toggle="collapse" data-parent="#accordion" href="#collapseh">Question Number four?<span class="fa fa-caret-down"></a></span></h3>
                        </div>
                        <div id="collapseh" class="collapse">
                            <div class="card-block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
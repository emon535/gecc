@extends('website.layout.default')
@section('title')
    GECC-Appoinment
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-4.jpg);">
            <h2>Get An Appointment</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Appointment</span></li>
            </ul>
	    </div>
	</div>
</div>
<div class="login-register-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active">
                            <h4> Appointment Form </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form action="{{ route('store-appoinment') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="people_id" value="{{ $people->id }}" required>
                                    <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                    <input type="text" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                    <input type="text" name="phone" placeholder="Your Phone" value="{{ old('phone') }}" required>
                                    <input name="sub" placeholder="Appoint Subject" type="sub" value="{{ old('sub') }}" required>
                                    <div class="button-box">
                                        <button class="default-btn" type="submit"><span>Submit</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
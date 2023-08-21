@extends('website.layout.default')

@section('title')
    GECC-Apply
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-4.jpg);">
            <h2>Course Apply</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Course</a> <span><i class="fa fa-angle-double-right"></i>Course Apply</span></li>
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
                            <h4> Course Apply Form </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div class="login-form-container">
                            <div class="login-register-form">
                                <form action="{{ route('sendApplyMail') }}" method="POST">
                                @csrf
                                    <input type="text" value="{{ $std_info->name }}" name="name" placeholder="Your Name">
                                    <input type="text" value="{{ $std_info->email }}" name="fromEmail" placeholder="Your Email">
                                    <input type="text" value="{{ $std_info->phone }}" name="phone" placeholder="Your Phone">
                                    <input name="" value="{{ $applied_subject}}" type="text" readonly>
                                    <input name="applied_subject" value="{{ $applied_subject}}"  type="hidden">
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

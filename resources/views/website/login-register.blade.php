
@extends('website.layout.default')

@section('title')
    GECC-Login
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/img/bg/breadcrumb-bg-4.jpg') }});">
            <h2>Login/Register</h2>
            <p>New member? Please register. <br>Or, have an account? Please Login.</p>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>login/Register</span></li>
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
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                     <form action="{{ route('checkCredintial') }}" method="post">
                                    @csrf
                                        <input type="text" name="email" value="" placeholder="Email">
                                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                                        <input type="password" value="" name="password" placeholder="Password">
                                        {{ $errors->has('password') ? $errors->first('password') : '' }}
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button class="default-btn" type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="{{ route('save-student') }}" method="post">
                                    @csrf
                                        <input type="text" name="name" value="" placeholder="Full Name" required>
                                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                                        <input type="text" name="email" value="" placeholder="Email" required>
                                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                                        <input type="text" name="phone" value="" placeholder="Phone Number" required>
                                        {{ $errors->has('phone') ? $errors->first('phone') : '' }}
                                        <input type="text" name="address" value="" placeholder="Address" required>
                                        {{ $errors->has('address') ? $errors->first('address') : '' }}
                                        <input type="password" name="password" value="" placeholder="Password" required>
                                        {{ $errors->has('password') ? $errors->first('password') : '' }}
                                        <input type="password" name="con_password" value="" placeholder="Retype Password" required>
                                        {{ $errors->has('con_password') ? $errors->first('con_password') : '' }}
                                        <div class="button-box">
                                            <button class="default-btn" type="submit"><span>Register</span></button>
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
</div>

@endsection

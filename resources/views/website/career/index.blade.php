
@extends('website.layout.default')
@section('title')
    GECC-Career
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-9.jpg);">
            <h2>Career</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Career</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="ptb-70">
    <div class="container">
        <div class="header-line">
            <h1>Career at GECC</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <span class="text-dark">
                        Submit your CV to the following email - 
                    </span>
                    <a href="mailto:info@gecconsultant.co.uk">info@gecconsultant.co.uk</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
@endpush
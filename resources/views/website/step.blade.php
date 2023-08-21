@extends('website.layout.default')
@section('title')
    GECC-Step
@endsection
@section('content')

<div class="breadcrumb-area" style="background:#E9E9E9">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-9.jpg);">
            <h2>Step by Step Guideline</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Step by Step Guideline</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="choose-us section-padding-1 pt-30 pb-70" style="background:#fff">
    <div class="container">
        <div class="row no-gutters choose-negative-mrg">
            <div class="row justify-content-center">
                <div class="col-sm-10 mt-3">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-panel">
                                <h4>
                                    <span class="d-block">Step 01: Our representatives resources a million</span>
                                </h4>
                                <p>
                                    GECC’s consultants are experts in the UK Higher education. All of our consultants are UK or European  graduate and multi-lingual. GECC works closely with a network of immigration visa specialists and authorized representatives in UK who will fix the student’s dilemma.
                                </p>
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-badge warning">
                                    <img src="{{ url('public/web/') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                                </div>
                                <div class="timeline-panel float-right">
                                    <img src="{{ url('public/web/') }}/img/event/e-1.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web/') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-panel">
                                    <img src="{{ url('public/web/') }}/img/event/e-2.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                            <div class="timeline-panel float-right">
                                <h4><span class="d-block"> Step 02: GECC for students</span>a learning community</h4>
                                <p>
                                    Our counsellors are European graduate and British council certified agents.We provide support to stu dent in profiling, free counseling, admittance support, documents editing, interview preparation and visa application.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web/') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                            </div>
                            <div class="timeline-panel" style="margin-bottom:0">
                                <h4>
                                    <span class="d-block"> Step 03: We are harnessing the power, Why choose us?</span>
                                </h4>
                                <p>
                                    GECC UK (Global Education and Career Consultants) has been formed with the commitment to fulfil the  dream of the ambitious person. We are a UK based Company, providing exceptional Student recruitment services at affordable tuition fees. Our presence in the country will enable the student to know the right track of applying to the right University at the right country.
                                </p>
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-panel float-right" style="margin-bottom:0">
                                    <img src="{{ url('public/web/') }}/img/event/e-3.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
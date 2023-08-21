@extends('website.layout.default')
@section('title')
    GECC-Who We Are
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg.jpg);">
            <h2>Who We Are?</h2>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Who We Are?</span></li>
            </ul>
	    </div>
	</div>
</div>

<div class="choose-us section-padding-1 ptb-70" style="background:#fff; margin-top:10px">
    <div class="container">
        <div class="row no-gutters choose-negative-mrg">
            <!-- <div class="header-line">
                <h3>Catalyzing World Citizenship</h3>
                <h1>Who We Are?</h1>
            </div> -->
            <div class="row justify-content-center">
                <div class="col-sm-10 mt-3">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-panel">
                                <h4>
                                    <span class="d-block">Our representatives resources</span> a million beginnings
                                </h4>
                                <p>
                                    GECC’s consultants are experts in the UK Higher education. All of our consultants are UK or European  graduate and multi-lingual. GECC works closely with a network of immigration visa specialists and authorized representatives in UK who will fix the student’s dilemma.
                                </p>
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-badge warning">
                                    <img src="{{ url('public/web') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                                </div>
                                <div class="timeline-panel float-right">
                                    <img src="{{ url('public/web') }}/img/event/e-1.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-panel">
                                    <img src="{{ url('public/web') }}/img/event/e-2.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                            <div class="timeline-panel float-right">
                                <h4><span class="d-block">GECC for students</span>a learning community</h4>
                                <p>
                                    Our counsellors are European graduate and British council certified agents.We provide support to stu dent in profiling, free counseling, admittance support, documents editing, interview preparation and visa application.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web') }}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                            </div>
                            <div class="timeline-panel" style="margin-bottom:0">
                                <h4>
                                    <span class="d-block">We are harnessing the power,</span>
                                    <span class="d-block">Why choose us?</span>
                                </h4>
                                <p>
                                    GECC UK (Global Education and Career Consultants) has been formed with the commitment to fulfil the  dream of the ambitious person. We are a UK based Company, providing exceptional Student recruitment services at affordable tuition fees. Our presence in the country will enable the student to know the right track of applying to the right University at the right country.
                                </p>
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-panel float-right" style="margin-bottom:0">
                                    <img src="{{ url('public/web') }}/img/event/e-3.png" class="img-fluid lazyloaded" alt="">
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
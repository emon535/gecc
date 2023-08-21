
@extends('website.layout.default')
@section('title')
    GECC-History
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-2.jpg);">
            <h2>Our History</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>History</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="login-register-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="blog-details-wrap">
                    <div class="blog-details-top">
                        <div class="blog-details-content-wrap">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <h3>History of GECC</h3>
                                    <p>
                                        <img src="{{ url('public/web') }}/img/testimonial/testi-b1.jpg" class="img-fluid lazyloaded" alt="">
                                        GECC was founded with the aspiration of some highly qualified and experience individuals to serve the potential international students based on their career objectives. Initial brainstorming was began three years prior to its practical implementation. Since October 2012, company started functioning in formally. However, it was registered in the UK Company House at the beginning of 2014 under its current trading name.<br><br>
                                        At the core of its activities, the GECC has been delivering the services to the international student in relation to their admission in English Language and Academic Courses. Furthermore, students are assisted with career counselling, VISA processing and other pre- & post- arrival requirements.<br><br>
                                        GECC represents leading Higher Educational Institutions, Further Education Colleges and Language Schools around the world who are committed to providing with outstanding experience to the international students. GECC promotes quality education providers to the prospective students around the globe. GECC is a British Council and ICEF accredited agency for recruiting international students. All of our counsellors are highly qualified, multi-lingual and possess many years of experience in education sector.
                                    </p>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="timeline-panel">
                                    </div>
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
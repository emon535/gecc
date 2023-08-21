@extends('website.layout.default')

@section('title')
    GECC- Study in the UK
@endsection
@section('content')

<div class="slider-area" style="background:#f2f3f8">
    <div class="container">
        <div class="slider-active owl-carousel nav-style-1">
            @foreach($slider as $value)
                <div class="single-slider slider-height-1 bg-img" style="background-image:url({{ url($value->image) }});">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-12 col-sm-12">
                                <div class="slider-content slider-animated-1" style="padding:100px 50px">
                                    <h1 class="animated">{{ $value->title }}</h1>
                                    <p class="animated">{!! $value->description !!}</p>
                                    <a class="btn btn-find" href="{{ settings('regsitration_btn_link') ?? route('login') }}">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="choose-us section-padding-1 ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-xs-12">
                <div class="row no-gutters choose-negative-mrg">
                    <div class="header-line">
                        <h3>Select Your</h3>
                        <h1>Popular Courses</h1>
                    </div>
                    @isset($p_subjects)
                    @if(count($p_subjects)>0)
                    @foreach($p_subjects as $sub)
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="single-choose-us choose-bg-blue">
                            <div class="choose-img">
                                <a href="{{ route('course-finder',$sub->id) }}"><img class="animated" src="{{ $sub->image ? asset($sub->image) : asset('public/blank.jpg') }}" style="max-width: 80px;" alt=""></a>
                            </div>
                            <div class="choose-content">
                                <a href="{{ route('course-finder',$sub->id) }}"> <h3>{{ $sub->name }}</h3> </a>
                            
                                {{--<p>{!!\Illuminate\Support\Str::limit(strip_tags($sub->details),150,'....')!!}--}}
                                @php
                                $details = strip_tags($sub->details);
                                @endphp
                                @if(strlen($details)>150)
                                <p>{{substr($details,0,150)}}<span class="read-more-show hide_content">More <i class="fa fa-angle-down"></i></span><span class="read-more-content">{{substr($details,150,strlen($details))}}<span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span></span>
                              	</p>
                                @else
                                <p>{!! $details !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    @endisset

                    <a href="{{ route('course-finder') }}" class="event-bt default-btn">View All Courses</a>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-xs-12" style="padding:0 !important">
                <div class="register-area bg-img">
                    <div class="container">
                        <div class="header-line">
                            <h3 class="scl">Prefering Global Education</h3>
                            <h1 class="hdl">Social Activities</h1>
                        </div>
                        <div class="register-wrap">
                            <div class="row">
                                <!--<div class="col-lg-12 col-md-12 col-sm-12">-->
                                <!--    <div class="register-form animatable">-->
                                <!--        <div class="fb-post">-->
                                <!--            <h4 class="gb" style="text-align:center">Instagram Feed</h4>-->
                                <!--            <div id="instagramfeed"></div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="register-form animatable">
                                        <div class="fb-post">
                                            <h4 class="gb" style="text-align:center;margin-top:10px">Facebook Posts</h4>
                                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGECCUK%2F&tabs=timeline&width=270&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=246698990400001" width="270" height="376" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
</div>

<div class="search-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-line pt-30">
                <h3>Drawing on our past to create a future with the Top Universities</h3>
                <h1>Discover Your Course!</h1>
                <ul>
                    <li><i class="fa fa-check-square-o"></i>Select Level of Your Course</li>
                    <li><i class="fa fa-check-square-o"></i>Select Method of Study</li>
                    <li><i class="fa fa-check-square-o"></i>Choose Your Start Date</li>
                    <li><i class="fa fa-check-square-o"></i>Choose The Subject to Find</li>
                    <li><i class="fa fa-check-square-o"></i>Choose Institution on the world!</li>
                    <li><i class="fa fa-check-square-o"></i>Find Your Course On Your Criteria From the Given List</li>
                </ul>
            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="search-box animatable">

                    <form action="{{ route('course-finder') }}" method="GET">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <label for="level_id">Level</label>
                        <select name="option_id" id="option_id" required>
                        <option value="">Kindly Please Select</option>
                            @if(count($options))
                            @foreach($options as $option)
                            <option value="{{ $option->id }}" >{{ $option->course_name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <label for="">Method of Study</label>
                        <select name="type" id="type" required>
                        <option value="">Kindly Please Select</option>
                            <option value="full" >Full Time</option>
                            <option value="part"  >Part Time</option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <label >Start Date</label>
                        <select name="month" id="month" required>
                        <option value="">Kindly Please Select</option>
                              
                            <option value="January"  >
                                January ({{ count(DB::table('tbl_course')->where('month','January')->get()) }})
                            </option>     
                            <option value="February" >
                                February ({{ count(DB::table('tbl_course')->where('month','February')->get()) }})
                            </option>     
                            <option value="March" >
                                March ({{ count(DB::table('tbl_course')->where('month','March')->get()) }})
                            </option>     
                            <option value="April" >
                                April ({{ count(DB::table('tbl_course')->where('month','April')->get()) }})
                            </option>     
                            <option value="May" >
                                May ({{ count(DB::table('tbl_course')->where('month','May')->get()) }})
                            </option>     
                            <option value="June" >
                                June ({{ count(DB::table('tbl_course')->where('month','June')->get()) }})
                            </option>     
                            <option value="July">
                                July ({{ count(DB::table('tbl_course')->where('month','July')->get()) }})
                            </option>     
                            <option value="August" >
                                August ({{ count(DB::table('tbl_course')->where('month','August')->get()) }})
                            </option>     
                            <option value="September" >
                                September ({{ count(DB::table('tbl_course')->where('month','September')->get()) }})
                            </option>     
                            <option value="October" >
                                October ({{ count(DB::table('tbl_course')->where('month','October')->get()) }})
                            </option>     
                            <option value="November" >
                                November ({{ count(DB::table('tbl_course')->where('month','November')->get()) }})
                            </option>     
                            <option value="December" >
                                December ({{ count(DB::table('tbl_course')->where('month','December')->get()) }})
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <label for="">Subject</label>
                        <select name="subject_id" id="subject_id" required>
                        <option value="">Kindly Please Select</option>
                            @if(count($subjects))
                            @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}" >{{ $subject->name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <label >University</label>
                        <select name="university_id" id="university_id" required>
                        <option value="">Kindly Please Select</option>
                            @if(count($universities))
                            @foreach($universities as $university)
                            <option value="{{ $university->id }}" >{{ $university->university_name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="event-bt default-btn">Search Now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="choose-us section-padding-1 pt-30 pb-70" style="background:#fff">
    <div class="container">
        <div class="row no-gutters choose-negative-mrg">
            <div class="header-line">
                <!-- <h3>Catalyzing World Citizenship</h3> -->
                <h1>Who We Are?</h1>
            </div>
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
                                    <img src="{{ url('public/web')}}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                                </div>
                                <div class="timeline-panel float-right">
                                    <img src="{{ url('public/web')}}/img/event/e-1.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web')}}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
                            </div>
                            <div class="timeline-inverted">
                                <div class="timeline-panel">
                                    <img src="{{ url('public/web')}}/img/event/e-2.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                            <div class="timeline-panel float-right">
                                <h4><span class="d-block">GECC for students</span>a learning community</h4>
                                <p>
                                    Our counsellors are European graduate and British council certified agents.We provide support to student in profiling, free counseling, admittance support, documents editing, interview preparation and visa application.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge">
                                <img src="{{ url('public/web')}}/img/logo/small.png" class="img-fluid lazyloaded" alt="">
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
                                    <img src="{{ url('public/web')}}/img/event/e-3.png" class="img-fluid lazyloaded" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="achievement-area pt-50 pb-50" style="background:#f2f3f8">
    <div class="container animatable">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="header-line">
                    <h3>Success By Numbers</h3>
                    <h1>At A Glance</h1>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-9.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->global_offices }}</h2>
                        <span>Global Offices</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-3.png" alt="">
                    </div>
                    
                    <div class="count-content">
                        <h2 class="count">{{ $glance->global_counsellors }}</h2>
                        <span>Global Counsellors</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-10.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->education_fair }}</h2>
                        <span>UK Education Fair/Expo</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-1.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->virtual_events }}</h2>
                        <span>Virtual Events</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-11.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->courses_offered }}</h2>
                        <span>Courses Offered</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-2.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->students_served }}</h2>
                        <span>Students Served</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-7.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->free_service }}</h2>
                        <b>%</b>
                        <span>Free Service</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="single-count count-two">
                    <div class="count-img">
                        <img src="{{ url('public/web')}}/img/icon-img/achieve-6.png" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $glance->student_satisfaction }}</h2>
                        <b>%</b>
                        <span>Student Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay pt-80 pb-110">
    <div class="container animatable">
        <div class="header-line">
            <!-- <h3>Catalyzing World Citizenship</h3> -->
            <h1>Study Categories</h1>
        </div>
        <div class="event-active owl-carousel nav-style-1">
            @foreach($options as $value)
                <div class="single-event event-white-bg">
                    <div class="event-content">
                        <h3><a href="{{ route('course-details') }}">{{ $value->course_name }}</a></h3>
                        {!! $value->description !!}
                        <a href="{{ route('course-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> 

<div class="teacher-area ptb-80" style="background:#f2f3f8">
    <div class="container animatable">
        <div class="header-line">
            <h3>Our</h3>
            <h1>Accreditation</h1>
        </div>
        <div class="brand-logo-area">
            <div class="event-active-also brand-logos nav-style-1 owl-carousel">
                @if(count($accreditations)>0)
                @foreach($accreditations as $row)
                <div class="single-brand-logo">
                    <a href="{{ route('accreditation',$row->id) }}"><img src="{{ $row->image ? asset($row->image) : asset('public/blank.jpg') }}" alt="" width="100px" height="80px"></a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>  

<div class="teacher-area ptb-80" style="background:#f2f3f8">
    <div class="container animatable">
        <div class="header-line">
            <h3>Our</h3>
            <h1>Partners Institutes</h1>
        </div>
        <div class="brand-logo-area">
            <div class="event-active-also brand-logos nav-style-1 owl-carousel">
                @foreach($universities as $value)
                    <div class="single-brand-logo">
                        <a href="{{ route('uni-details',['id'=>$value->id]) }}" target="blank"><img src="{{ url($value->logo)}}" alt="" width="100px" height="80px"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>              

<div class="event-area bg-img default-overlay ptb-80 latest-eve" style="background:#f2f3f8">
    <div class="container">
        <div class="header-line">
            <!-- <h3>Catalysing the Global Citizens of tomorrow, today</h3> -->
            <h1>Upcoming Events</h1>
        </div>
        <div class="event-active-also owl-carousel nav-style-1">
            @foreach($events as $value)
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="{{ route('event-details',['id'=>$value->id]) }}"><img src="{{ url($value->image)}}" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">{{ $value->date }}</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="{{ route('event-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>
                         <p>{!! \Illuminate\Support\Str::limit(strip_tags($value->details), 150,'....')  !!}</p>
                        <a href="{{ route('event-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="slider-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <div class="slider-content student-access slider-animated-1 ptb-90">
                    <h1>Discover your Future</h1>
                    <p>Tell us your story - and we'll translate your aspirations and goals into curated recommendations that will suit your needs.</p>
                    <a class="event-bt default-btn" href="{{ route('login') }}" style="float:right">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                <div class="slider-content student-access">
                    <img src="{{ url('public/web')}}/img/slider/sss.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register-area bg-img pt-90 pb-80" style="background:#f2f3f8">
    <div class="container">
        <div class="register-wrap">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="register-form animatable">
                        <h4>Book your Free Consultation</h4>
                        <h5>A member of the GECC team will be in touch within 24 hours to arrange your initial online consultation with one of our of UK education experts.</h5>
                        <form action="{{ route('sendConsultationMail') }}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-10">
                                        <input name="first_name" value="" placeholder="First Name" type="text" required>
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-10">
                                        <input name="last_name" value="" placeholder="Last Name" type="text" required>
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-10">
                                        <input name="phone" value="" placeholder="Phone" type="text" required>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-10">
                                        <input name="fromEmail" value="" placeholder="Email" type="text" required>
                                        @error('fromEmail')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <textarea name="bodymessage" placeholder="Message" required></textarea>
                                        @error('bodymessage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="register-form animatable bounceInRight">
                        <div class="share-body">
                            <h2>Social Share</h2>
                            <h5>Share this website and help build trust.</h5>
                            <ul>
                                <li><a target="blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fgecconsultant.co.uk%2F&amp;src=sdkpreparse"><i class="fa fa-facebook"></i> </a></li>
                                <li><a target="blank" href="https://twitter.com/intent/tweet?text=https://gecconsultant.co.uk/"><i class="fa fa-twitter"></i> </a></li>
                                <li><a target="blank" href="https://www.instagram.com/gecconsultant/"><i class="fa fa-instagram"></i> </a></li>
                                <li><a target="blank" href="https://www.linkedin.com/shareArticle?mini=true&url=https://gecconsultant.co.uk/"><i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay ptb-100 latest-eve" style="background:#f2f3f8">
    <div class="container">
        <div class="header-line">
            <!-- <h3>Catalysing the Global Citizens of tomorrow, today</h3> -->
            <h1>News Feed</h1>
        </div>
        <div class="news-feed-active owl-carousel nav-style-1">
            @foreach($news as $value)
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="{{ route('news-details',['id'=>$value->id]) }}"><img src="{{ url($value->image)}}" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">{{ $value->date }}</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="{{ route('news-details',['id'=>$value->id]) }}">{{ $value->title }}</a></h3>
                        {!! $value->details !!}
                        <a href="{{ route('news-details',['id'=>$value->id]) }}" class="event-bt default-btn e-meet pull-left">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="event-area bg-img default-overlay pt-100 latest-eve">
    <div class="container">
        <div class="header-line">
            <h3>Student Success Insights</h3>
            <h1>Student Reviews</h1>
        </div>
        <div class="test-active-also owl-carousel stu-test nav-style-1">

            @foreach($testimonial as $value)
                <div class="single-event event-white-bg" style="cursor: pointer" onclick="showReviewModal({{ $value->id }})">
                    <div class="event-content testi">
                        <img src="{{ $value->photo ? asset($value->photo) : asset('public/blank.jpg') }}" alt="#"/>
                        <h3>{{ $value->name }}</h3>
                        <h5>{{ $value->university }}</h5>
                        @php
                        $details = strip_tags($value->details);
                        @endphp
                        @if(strlen($details) > 250)
                        <p>{{substr($details,0,250)}}</p>
                        <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                        <span class="read-more-content"> <p>{{substr($details,100,strlen($details))}}</p> 
                        <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                        @else
                        <p>{!! $details !!}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


@foreach ($testimonial as $value)
<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title">
            <h4>Review form: {{ $value->name }}</h4>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" style="color:#555">
            {!! $value->details !!}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>    
@endforeach

@isset($videos)
<div class="event-area bg-img default-overlay ptb-100 latest-eve">
    <div class="container">
        <div class="header-line">
            <h3>Student and partner’s Insights</h3>
            <h1>Student and partner’s testimonials</h1>
        </div>
        <div class="video-active-also owl-carousel nav-style-1">
            @if(count($videos))
                @foreach($videos as $key => $row)
                <div class="single-event event-white-bg">
                    <div class="event-content testi">
                        <div class="front-header">
                            {!! $row->url !!}
                        </div>
                    </div>
                </div>
                @endforeach
            @endif            
        </div>
    </div>
</div>
@endisset

<style>
.front-header iframe{
	width: 100% !important;
	height: 220px !important;
} 
.read-more-show,.read-more-hide {
	font-weight: 600;
	padding-left: 6px;
}
</style>

<script>
    function showReviewModal(id) {
        $(`#exampleModalLong${id}`).modal('show');
    }
</script>

@endsection

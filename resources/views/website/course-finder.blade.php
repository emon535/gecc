@extends('website.layout.default')

@section('title')
    GECC-Find Your Course
@endsection
@section('content')

<div class="breadcrumb-area">
	<div class="container">
	    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/img/bg/breadcrumb-bg-7.jpg') }});">
            <h2>Course Finder</h2>
            <p>Discover your course by selecting your choice!</p>
	    </div>
	    <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Finder</span></li>
            </ul>
	    </div>
	</div>
</div>


<div class="search-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="{{ route('course-finder') }}" method="GET">
                <div class="search-box animatable">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <label for="level_id">Level</label>
                            <select name="option_id" id="option_id" required>
                                <option value="">Kindly Please Select</option>
                                @if(count($options))
                                @foreach($options as $option)
                                <option value="{{ $option->id }}" @if($q->option_id) {{ $q->option_id == $option->id ?  'selected' : null }} @endif>{{ $option->course_name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <label for="">Method of Study</label>
                            <select name="type" id="type" required>
                                <option value="">Kindly Please Select</option>
                                <option value="full" @if($q->type) {{ $q->type =='full'?  'selected' : null }} @endif>Full Time</option>
                                <option value="part"  @if($q->type) {{ $q->type =='part'?  'selected' : null }} @endif>Part Time</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                                <label >Start Date</label>
                          	<select name="month" id="month" required>
                                <option value="">Kindly Please Select</option>
                                  
                                <option value="January" @if($q->month) {{ $q->month == 'January'  ? 'selected' : null}} @endif >
                                    January ({{ count(DB::table('tbl_course')->where('month','January')->get()) }})
                                </option>     
                                <option value="February" @if($q->month) {{ $q->month == 'February'  ? 'selected' : null}} @endif>
                                    February ({{ count(DB::table('tbl_course')->where('month','February')->get()) }})
                                </option>     
                                <option value="March" @if($q->month) {{ $q->month == 'March'  ? 'selected' : null}} @endif >
                                    March ({{ count(DB::table('tbl_course')->where('month','March')->get()) }})
                                </option>     
                                <option value="April" @if($q->month) {{ $q->month == 'April'  ? 'selected' : null}} @endif >
                                    April ({{ count(DB::table('tbl_course')->where('month','April')->get()) }})
                                </option>     
                                <option value="May" @if($q->month) {{ $q->month == 'May'  ? 'selected' : null}} @endif >
                                    May ({{ count(DB::table('tbl_course')->where('month','May')->get()) }})
                                </option>     
                                <option value="June" @if($q->month) {{ $q->month == 'June'  ? 'selected' : null}} @endif >
                                    June ({{ count(DB::table('tbl_course')->where('month','June')->get()) }})
                                </option>     
                                <option value="July" @if($q->month) {{ $q->month == 'July'  ? 'selected' : null}} @endif >
                                    July ({{ count(DB::table('tbl_course')->where('month','July')->get()) }})
                                </option>     
                                <option value="August" @if($q->month) {{ $q->month == 'August'  ? 'selected' : null}} @endif >
                                    August ({{ count(DB::table('tbl_course')->where('month','August')->get()) }})
                                </option>     
                                <option value="September" @if($q->month) {{ $q->month == 'September'  ? 'selected' : null}} @endif >
                                    September ({{ count(DB::table('tbl_course')->where('month','September')->get()) }})
                                </option>     
                                <option value="October" @if($q->month) {{ $q->month == 'October'  ? 'selected' : null}} @endif >
                                    October ({{ count(DB::table('tbl_course')->where('month','October')->get()) }})
                                </option>     
                                <option value="November" @if($q->month) {{ $q->month == 'November'  ? 'selected' : null}} @endif >
                                    November ({{ count(DB::table('tbl_course')->where('month','November')->get()) }})
                                </option>     
                                <option value="December" @if($q->month) {{ $q->month == 'December'  ? 'selected' : null}} @endif >
                                    December ({{ count(DB::table('tbl_course')->where('month','December')->get()) }})
                                </option>
                            </select>
                          
                          
                            <!--<input placeholder="Start Date" id="datepicker" width="100%" />
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>--->

                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                                <label>Subjects</label>  
                            <select name="subject_id" id="subject_id" required>
                                <option value="">Kindly Please Select</option>
                                @if(count($subjects))
                                @foreach($subjects as $subject)
                                <option value="{{ $subject->id }}"  @if($q->subject_id) {{ $q->subject_id == $subject->id ?  'selected' : null }} @endif>{{ $subject->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-6 col-xs-12">
                            <label >University</label>
                            <select name="university_id" id="university_id" required>
                                <option value="">Kindly Please Select</option>
                                @if(count($universities))
                                @foreach($universities as $university)
                                <option value="{{ $university->id }}"   @if($q->university_id) {{ $q->university_id == $university->id ?  'selected' : null }} @endif>{{ $university->university_name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <button type="submit" href="" class="event-bt default-btn" style="margin: 0px auto">Search Now</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="event-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <div class="blog-details-top">
                        
                        @if(count($result)>0)
                        @foreach($result as $value)
                            <div class="blog-details-content-wrap course-find">
                                <div class="b-details-meta-wrap">
                                    <div class="b-details-meta">
                                        <ul>
                                            <li><i class="fa fa-globe"></i>{{ $value->con_name }}</li>
                                            <li><i class="fa fa-user"></i> Waiver {{ $value->waiver }}</li>
                                            <li><i class="fa fa-clock-o"></i> {{ $value->duration }}</li>
                                            <li><i class="fa fa-payment"></i>  $ {{ $value->fee }}</li>
                                        </ul>
                                    </div>
                                    @if(!empty(Session::get('studentID')))
                                    <a href="{{ route('apply',['applied_subject'=>$value->title]) }}"><span>Apply Now</span></a>
                                    @else
                                    <a href="{{ route('login') }}"><span>Apply Now</span></a>
                                    @endif
                                </div>
                                <h3>{{ $value->title }}</h3>
                            </div>
                        @endforeach

                        @else
                        <div class="blog-details-content-wrap course-find">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    {{ _('No Course Found') }}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-category course-side mb-40">
                    <div class="sidebar-title mb-40">
                        <h4>UK Universities</h4>
                    </div>
                    <div class="category-list">
                        <ul>
                            @foreach($universities as $value)
                                <li><a href="{{ route('uni-details',['id'=>$value->id]) }}">{{$value->university_name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@extends('admin.layout.default')

@section('title')
    Create Course
@endsection

@section('content')
    
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            @isset($add)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Create Course</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('save-course') }}" method="post" enctype="multipart/form-data" >
                            @csrf
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Title</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="title" class="col-xs-12 col-sm-4" value="{{ old('title') }}" required />
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Country</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="country" id="country" class="col-xs-12 col-sm-4" required>
                                                @isset($countries)
                                                @if(count($countries)>0)
                                                @foreach($countries as $country)
                                                <option value="{{ $country->sortname }}" {{ old('country') == $country->sortname  ? 'selected' : null}} >{{ $country->con_name .' '. $country->con_name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Subject</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="subject_id" id="subject_id" class="col-xs-12 col-sm-4" required>
                                                @isset($subjects)
                                                @if(count($subjects)>0)
                                                @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id  ? 'selected' : null}} >{{ $subject->name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">University</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="university_id" id="university_id" class="col-xs-12 col-sm-4" required>
                                                @isset($universities)
                                                @if(count($universities)>0)
                                                @foreach($universities as $university)
                                                <option value="{{ $university->id }}" {{ old('university_id') == $university->id  ? 'selected' : null}} >{{ $university->university_name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Lavel</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="option_id" id="option_id" class="col-xs-12 col-sm-4" required>
                                                @isset($options)
                                                @if(count($options)>0)
                                                @foreach($options as $option)
                                                <option value="{{ $option->id }}" {{ old('option_id') == $option->id  ? 'selected' : null}} >{{ $option->course_name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Method Of Study</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="type" id="type" class="col-xs-12 col-sm-4" required>
                                                <option value="full" {{ old('type') == 'full'  ? 'selected' : null}} >Full time</option>     
                                                <option value="type" {{ old('type') == 'part'  ? 'selected' : null}} >Part time</option>     
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Month</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="month" id="month" class="col-xs-12 col-sm-4" required>
                                                <option value="">Start Date</option>
                                                <option value="January" {{ old('month') == 'January'  ? 'selected' : null}} >January</option>     
                                                <option value="February" {{ old('month') == 'February'  ? 'selected' : null}} >February</option>     
                                                <option value="March" {{ old('month') == 'March'  ? 'selected' : null}} >March</option>     
                                                <option value="April" {{ old('month') == 'April'  ? 'selected' : null}} >April</option>     
                                                <option value="May" {{ old('month') == 'May'  ? 'selected' : null}} >May</option>     
                                                <option value="June" {{ old('month') == 'June'  ? 'selected' : null}} >June</option>     
                                                <option value="July" {{ old('month') == 'July'  ? 'selected' : null}} >July</option>     
                                                <option value="August" {{ old('month') == 'August'  ? 'selected' : null}} >August</option>     
                                                <option value="September" {{ old('month') == 'September'  ? 'selected' : null}} >September</option>     
                                                <option value="October" {{ old('month') == 'October'  ? 'selected' : null}} >October</option>     
                                                <option value="November" {{ old('month') == 'November'  ? 'selected' : null}} >November</option>     
                                                <option value="December" {{ old('month') == 'December'  ? 'selected' : null}} >December </option>     
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Duration</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="duration" class="col-xs-12 col-sm-4" value="{{ old('duration') }}" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Cost</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="fee" class="col-xs-12 col-sm-4" value="{{ old('fee') }}" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Detailst</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" id="details" class="form-control" cols="30" rows="10">{!! old('details') !!}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Waiver</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="waiver" id="waiver" class="col-xs-12 col-sm-4" required>
                                                <option value="Running" {{ old('waiver') == 'Running'  ? 'selected' : null}}>Running</option>
                                                <option value="Closed" {{ old('waiver') == 'Closed'  ? 'selected' : null}}>Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-sm btn-info" type="submit">
                                            <i class="ace-icon fa fa-check"></i>
                                            Save
                                        </button>
                                        &nbsp; &nbsp;
                                        <button class="btn btn-sm cancel" type="button">
                                            <i class="ace-icon fa fa-times"></i>
                                            Cancle
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
            @endisset
            @isset($edit)
            <div class="widget-header widget-header-blue widget-header-flat">
                <i class="fa fa-refresh"></i>&nbsp;                             
                <h4 class="widget-title lighter">Update Course</h4>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="step-content pos-rel" id="step-container">
                        <div class="step-pane active" id="step1">
                            <form class="form-horizontal" action="{{ url('update-course') }}" method="post" enctype="multipart/form-data" >
                            @csrf

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Title</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="title" class="col-xs-12 col-sm-4" value="{{ $single->title }}" required />
                                            <input type="hidden" name="id" class="col-xs-12 col-sm-4" value="{{ $single->id }}" />
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Country</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="country" id="country" class="col-xs-12 col-sm-4" required>
                                                @isset($countries)
                                                @if(count($countries)>0)
                                                @foreach($countries as $country)
                                                <option value="{{ $country->sortname }}" {{ $single->country == $country->sortname  ? 'selected' : null}} >{{ $country->sortname .' - '. $country->con_name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Subject</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="subject_id" id="subject_id" class="col-xs-12 col-sm-4" required>
                                                @isset($subjects)
                                                @if(count($subjects)>0)
                                                @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}" {{ $single->subject_id == $subject->id  ? 'selected' : null}} >{{ $subject->name }}</option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">University</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="university_id" id="university_id" class="col-xs-12 col-sm-4" required>                                                
                                                @isset($universities)
                                                @if(count($universities)>0)
                                                @foreach($universities as $university)
                                                <option value="{{ $university->id }}" {{ $single->university_id == $university->id  ? 'selected' : null}}>
                                                    {{ $university->university_name }}
                                                </option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Lavel</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="option_id" id="option_id" class="col-xs-12 col-sm-4" required>                                                
                                                @isset($options)
                                                @if(count($options)>0)
                                                @foreach($options as $option)
                                                <option value="{{ $option->id }}" {{ $single->option_id == $option->id  ? 'selected' : null}}  >
                                                    {{ $option->course_name }}
                                                </option>     
                                                @endforeach
                                                @endif 
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Method Of Study</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="type" id="type" class="col-xs-12 col-sm-4" required>
                                                <option value="full" {{ $single->type == 'full'  ? 'selected' : null}} >Full time</option>     
                                                <option value="part" {{ $single->type == 'part'  ? 'selected' : null}} >Part time</option>     
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Month</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="month" id="month" class="col-xs-12 col-sm-4" required>
                                                <option value="">Start Date</option>
                                                <option value="January" {{ $single->month == 'January'  ? 'selected' : null}} >January</option>     
                                                <option value="February" {{ $single->month == 'February'  ? 'selected' : null}} >February</option>     
                                                <option value="March" {{ $single->month == 'March'  ? 'selected' : null}} >March</option>     
                                                <option value="April" {{ $single->month == 'April'  ? 'selected' : null}} >April</option>     
                                                <option value="May" {{ $single->month == 'May'  ? 'selected' : null}} >May</option>     
                                                <option value="June" {{ $single->month == 'June'  ? 'selected' : null}} >June</option>     
                                                <option value="July" {{ $single->month == 'July'  ? 'selected' : null}} >July</option>     
                                                <option value="August" {{ $single->month == 'August'  ? 'selected' : null}} >August</option>     
                                                <option value="September" {{ $single->month == 'September'  ? 'selected' : null}} >September</option>     
                                                <option value="October" {{ $single->month == 'October'  ? 'selected' : null}} >October</option>     
                                                <option value="November" {{ $single->month == 'November'  ? 'selected' : null}} >November</option>     
                                                <option value="Decembe" {{ $single->month == 'Decembe'  ? 'selected' : null}} >December </option>     
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Duration</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="duration" class="col-xs-12 col-sm-4" value="{{ $single->duration }}" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Cost</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <input type="text" name="fee" class="col-xs-12 col-sm-4" value="{{ $single->fee }}" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Detailst</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <textarea name="details" id="details" class="form-control" cols="30" rows="10">{!! $single->details !!}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Waiver</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="clearfix">
                                            <select name="waiver" id="waiver" class="col-xs-12 col-sm-4" required>
                                                <option value="Running" {{ $single->waiver == 'Running'  ? 'selected' : null}}>Running</option>
                                                <option value="Closed" {{ $single->waiver == 'Closed'  ? 'selected' : null}}>Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-sm btn-info" type="submit">
                                            <i class="ace-icon fa fa-check"></i>
                                            Update
                                        </button>
                                        &nbsp; &nbsp;
                                        <button class="btn btn-sm cancel" type="button">
                                            <i class="ace-icon fa fa-times"></i>
                                            Cancle
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>  
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
            @endisset
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script type="text/javascript">

    CKEDITOR.replace('details');

</script> 
@endsection

@extends('website.layout.default')
@section('title')
    GECC-People
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-3.jpg);">
            <h2>Our People</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Our People</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="teacher-area ptb-70">
    <div class="container">
        <div class="header-line">
            <h3>Meet With</h3>
            <h1>Our Experts</h1>
        </div>
      
        <div class="custom-row">
            @isset($peoples)
                @if(count($peoples)>0)
                    @foreach($peoples as $people)
                        <div class="col-md-6 col-lg-3">
                            {{-- <div class="single-teacher mb-30">
                                <div class="teacher-img">
                                    <img src="{{ $people->image ? asset($people->image) : asset('public/blank.jpg') }}" alt="">
                                </div>
                                <div class="teacher-content-visible">
                                    <h4>{{ $people->name }}</h4>
                                    <h5 class="desg">{{ $people->designation }}</h5>
                                    <h5>{{ $people->nationality }}</h5>
                                    <h5>{{ $people->email }}</h5>
                                    <a class="details" href="#" data-toggle="modal" data-target="#exampleModalLong{{ $people->id }}">Details</a>
                                    <a class="btn btn-primary" href="{{ route('appointment',$people->id) }}">Request Call back</a>
                                </div>
                                <div class="teacher-content-wrap">
                                    <div class="teacher-content">
                                        <div class="teacher-social">
                                            <ul>
                                                <li><a class="facebook" href="{{ $people->fb }}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="{{ $people->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="text-center p-4 rounded people-card mb-30">
                                <img src="{{ $people->image ? asset($people->image) : asset('public/blank.jpg') }}" class="rounded-circle shadow avatar avatar-md-md" alt="">
                                <h4 class="mt-3 mb-0 font-weight-bold">{{ $people->name }}</h4>
                                <h5 class="text-muted font-weight-bold large-text">{{ $people->designation }}</h5>

                                {{-- <ul class="list-unstyled social-icon text-primary social mb-0 mt-2">
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i class="fa fa-globe align-middle" title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i class="fa fa-facebook-square align-middle" title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i class="fa fa-twitter-square align-middle" title="dribbble"></i></a></li>
                                </ul><!--end icon--> --}}

                                <div class="row mt-4">
                                    <div class="col-12">
                                        <h5 class="mb-0 people-detail text-left mb-2 large-text"><i class="fa fa-envelope text-primary mb-2 fs-5"></i> &nbsp;{{ $people->email }}</h5>
                                        @if ($people->phone)
                                            <h5 class="mb-0 people-detail text-left my-2"><i class="fa fa-phone text-primary mb-2 fs-5"></i> &nbsp;{{ $people->phone }}</h5>
                                        @endif
                                        <div class="text-center my-2 text-primary people-detail-btn">
                                            <a class="details" href="#" data-toggle="modal" data-target="#exampleModalLong{{ $people->id }}">Details</a>
                                        </div>
                                        <a class="btn btn-primary request-callback-btn mt-2" href="{{ route('appointment',$people->id) }}">Request Call back</a>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    @endforeach
                @endif
            @endisset
        </div>
    </div>
</div>

@isset($peoples)
    @if(count($peoples)>0)
        @foreach($peoples as $people)
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong{{ $people->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                        <h4>{{ $people->name }}</h4>
                        <h5 style="color:#222">{{ $people->designation }}<br>
                            {{ $people->nationality }}</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color:#555">
                        {!! $people->details !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a class="btn btn-primary" href="{{ route('appointment',$people->id) }}">Request Call Back</a>
                    </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif
@endisset

@endsection

@push('css')
    <style>
        .people-card {
            background-color: #f2f3f8;
        }
        .people-detail {
            word-break: break-all;
        }
        .avatar.avatar-md-md {
            height: 100px;
            width: 100px;
        }

        .details {
            text-decoration: revert;
        }

        .request-callback-btn {
            border-radius: 30px;
        }

        .large-text {
            white-space: nowrap;
            overflow: scroll;
            scrollbar-width: none;
        }

        .large-text::-webkit-scrollbar {
            display: none;
        }

        .large-text:hover {
            white-space: initial;
        }
    </style>
@endpush
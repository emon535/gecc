
@extends('website.layout.default')
@section('title')
    GECC-FAQ
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-3.jpg);">
            <h2>FAQs</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>FAQs</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="teacher-area ptb-70">
    <div class="container">
        <div class="header-line">
            <h1>FAQs</h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div id="accordion">
                    @forelse ($faqs as $key => $item)
                        <div class="card">
                            <div class="card-header">
                                <h3>
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$item->id }}" @if(!$key) aria-expanded="true" @endif aria-controls="collapse{{ $item->id }}">{{ $item->question }}<span class="fa fa-caret-up"></span></a>
                                </h3>
                            </div>
                            <div id="collapse{{$item->id }}" class="collapse @if(!$key) show @endif">
                                <div class="card-block">
                                    <div style="color: #555" class="answer">{!! $item->answer !!}</div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
    <style>
        .answer ul {
            list-style: initial;
            margin-left: 30px;
        }
    </style>
@endpush
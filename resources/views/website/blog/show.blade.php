@extends('website.layout.default')

@section('title')
    GECC-Blog Details
@endsection

@section('meta_title'){{ $blog->title }}@endsection
@section('meta_description'){!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 150,'....')  !!}@endsection
@section('meta_image'){{ url($blog->image) }}@endsection
@section('meta_image_alt'){{ $blog->title }}@endsection
@section('meta_post_url'){{ urlencode(route('website.blogs.show', $blog->slug)) }}@endsection



@section('content')

<div class="event-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <img src="{{ url($blog->image) }}" alt="">
                        <h3 class="mb-0 text-primary">{{ $blog->title }}</h3>
                        <p class="text-muted mb-4 small">Published on {{format_date($blog->created_at, 'Y-m-d h:i A')}}</p>

                        {!! $blog->description !!}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div>
                    <h4 class="text-center">Share This</h4>
                    <div class="share-card">
                        <div class="share-item share-item-fb my-2">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('website.blogs.show', $blog->slug)) }}&display=popup">
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span class="text">Facebook</span>
                            </a>
                        </div>
                        <div class="share-item share-item-twitter mb-2">
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('website.blogs.show', $blog->slug)) }}">
                                <span><i class="fa fa-twitter-square"></i></span>
                                <span class="text">Twitter &nbsp;</span>
                            </a>
                        </div>
                        <div class="share-item share-item-linkedin mb-2">
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('website.blogs.show', $blog->slug)) }}">
                                <span><i class="fa fa-linkedin-square"></i></span>
                                <span class="text">Linkedin &nbsp;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
    <style>
        .share-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .share-item {
            width: 160px;
            border-radius: 3px;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
        }

        .share-item-fb {
            background-color: #3b5998;
        }

        .share-item-twitter {
            background-color: #00acee;
        }

        .share-item-linkedin {
            background-color: #0e76a8;
        }

        .share-item a .text {
            margin-left: 6px;
        }

        @media screen and (max-width: 768px) {
            .share-card {
                align-items: flex-start;
            }
        }
    </style>
@endpush
@extends('website.layout.default')
@section('title')
    GECC-Nigeria
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-6.jpg);">
            <h2>{{ $single->office_location }}</h2>
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070159.95304742!2d4.176639151015652!3d9.01735600935614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sbd!4v1620550749705!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title">
                        <h2>Contact <span>Form</span></h2>
                    </div>
                    <form action="{{ route('sendContactMail') }}" method="POST">
                    @csrf
                        <input name="name" placeholder="Name*" type="text" required>
                        <input name="fromEmail" placeholder="Email*" type="email" required>
                        <input name="subject" placeholder="Subject*" type="text" required>
                        <textarea name="message" placeholder="Message" required></textarea>
                        <button class="btn-style" name="submit" type="submit">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-area pb-70">
    <div class="container">
        <figure class="wp-block-table is-style-stripes">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <strong>
                                <span style="color: #072f6d;" class="has-inline-color"><h3>Office Location</h3></span>
                            </strong>
                        </td>
                        <td>
                            <strong>
                                <span style="color: #072f6d;" class="has-inline-color"><h3>Address</h3></span>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>{{ $single->office_location }}</strong></td>
                        <td>
                            {!! $single->office_address !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        </figure>
    </div>
</div>

@endsection
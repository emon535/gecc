@extends('website.layout.default')
@section('title')
    GECC-Contact
@endsection
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ url('public/web/') }}/img/bg/breadcrumb-bg-6.jpg);">
            @isset($address) <h2>{{ $address->office_location }}</h2> @endisset
            <!-- <p>New member? Please register. <br>Or, have an account? Please Login.</p> -->
        </div>
        <div class="breadcrumb-bottom">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact</span></li>
            </ul>
        </div>
    </div>
</div>
<?php 
$names = json_decode(file_get_contents("http://country.io/names.json"), true);
//echo '<pre>';
//print_r($names);
?>

<div class="contact-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map">
                        @isset($address)
                        {!! $address->map !!}
                        @endif
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
                        <td><strong>{{ $address->office_location }}</strong></td>
                        <td>
                            {!! $address->office_address !!}
                             @if($address->phone) Phone : {{ $address->phone }} <br> @endif 
                             @if($address->email) Email : {{ $address->email }} <br> @endif 
                        </td>
                    </tr>
                    <!-- <tr>
                        <td><strong>Bangladesh (Dhaka)</strong></td>
                        <td>
                            63 (3rd Floor), Road #19, Sector #11, Uttara , Dhaka 1230<br />
                            Mob: +880 1611 503146 Email: <a href="mailto:gecc.bd@gecconsultant.co.uk" target="_blank" rel="noreferrer noopener">gecc.bd@gecconsultant.co.uk</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Bangladesh (Sylhet)</strong><br /></td>
                        <td>
                            Alfalah Tower, 2nd Floor, Dhopa Dhighir Par, Sylhet 3100<br />
                            Tel: +880 1767 470 770<br />
                            Email: <a href="mailto:gecc.syl@gecconsutlant.co.uk">gecc.syl@gecconsutlant.co.uk</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>India (Pune)</strong></td>
                        <td>
                            Indrayani Group, Dhandekar nagar<br />
                            Yewalewadi, Kondhwa (BK), Pune 411048<br />
                            Tel: +91 98232 76076<br />
                            Email: <a href="mailto:gecc.india@gecconsultant.co.uk">gecc.india@gecconsultant.co.uk</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Morocco</strong> <strong>(Casablanca)</strong></td>
                        <td>
                            21 Lot Proovince, Oasis, Casablanca<br />
                            Tel: +212661384025<br />
                            Email: <a href="mailto:morocco.gecc@gecconsultant.co.uk">morocco.gecc@gecconsultant.co.uk</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Nigeria</strong></td>
                        <td>Email: <a href="mailto:anthony.a@gecconsultant.co.uk">anthony.a@gecconsultant.co.uk</a></td>
                    </tr> -->
                </tbody>
            </table>
        </figure>
    </div>
</div>

@endsection
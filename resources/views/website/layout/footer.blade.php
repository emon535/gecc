
<footer class="footer-area">
    <div class="footer-top bg-img pt-80 pb-80" style="background:#f2f3f8">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>About Us</h4>
                        </div>
                        <div class="footer-about">
                            <p>Our representatives resources a million beginnings. GECC’s consultants are experts in the UK.....<a style="color:blue" href="{{ route('who') }}">Learn More</a></p>
                            @isset($address)
                            <div class="f-contact-info">

                                @if($address->office_address)
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>{!! $address->office_address !!}</span>
                                </div>
                                @endif

                                @if($address->email)
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope-o"></i>
                                    <span><a href="jabascript:void()">{!! $address->email !!}</a></span>
                                </div>
                                @endif
                                @if($address->phone)
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> {!! $address->phone !!}</span>
                                </div>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>Quick Link</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ route('who') }}">Who we are</a></li>
                                <li><a href="{{ route('mission') }}">Mission, Vision & Values</a></li>
                                <li><a href="{{ route('history') }}">History</a></li>
                                <li><a href="{{ route('people') }}">Our People</a></li>
                                <li><a href="{{ route('success') }}">Our Success Stories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>Study Abroad</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ route('study') }}">Study Options</a></li>
                                <li><a href="{{ route('course-finder') }}">Course Finder</a></li>
                                <li><a href="{{ route('prere') }}">Prerequisites to study abroad</a></li>
                                <li><a href="{{ route('step') }}">Step by Step Guideline</a></li>
                                <li><a href="{{ route('video') }}">Free Online Counselling</a></li>
                                <li><a href="{{ route('website.faqs.index') }}">FAQ</a></li>
                                <li><a href="{{ route('website.blogs.index') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>News Latter</h4>
                        </div>
                        <div class="subscribe-style">
                            <p>Subscribe to our email newsletter for usefull tips and valuable resources.</p>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input class="email" type="email" required="" placeholder="Your E-mail Address" name="EMAIL" value="">
                                        <div class="mc-news" aria-hidden="true">
                                            <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                        </div>
                                        <div class="clear">
                                            <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="SUBMIT">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">GECC</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Design & Developed By: Axis Break</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($has_event && !session('hide_events_button', false))
        <div class="events-foot" style="z-index: 999">
            <div class="btn btn-foot-ev d-flex align-items-center justify-content-between">
                <a href="{{ route('events').'?upcoming_events=1' }}">Upcoming Events</a>
                <a class="ml-2" href="{{ route('hide-events-button') }}"><i class="fa fa-times"></i></a>
            </div>
        </div>
    @endif
</footer>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ url('public/web') }}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="{{ url('public/web') }}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{ url('public/web') }}/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{ url('public/web') }}/js/plugins.js"></script>
<!-- Ajax Mail -->
<script src="{{ url('public/web') }}/js/ajax-mail.js"></script>
<!-- Main JS -->
<script src="{{ url('public/web') }}/js/main.js"></script>
<!-- Main JS -->
<script src="{{ url('public/web') }}/js/instafeed.min.js"></script>

<script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      tagName: 'awesome',
      clientId: 'YOUR_CLIENT_ID',
      accessToken: 'IGQVJXVjB1am5PRjRqSW1BN1JvbkdJal9panNNcGNlRzdSejFBRzF1a2ZALdXQ1d3h3YmdCZAGdfNXlDT0lmc3pOTk1mYllod1EtYWdRbUJVbldkZAjFqUHl1Qm1XSmFsX21qV2xfdmppdXMwMWgtMkRXRAZDZD',
      target: 'instagramfeed',
      userId: '7149435905'
    });
    feed.run();
</script>

<!------For Active Menu------>
<script>
$(document).ready(function() {
 var url = window.location.href;
 url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 url = url.substr(url.lastIndexOf("/") + 1);
 if(url == ''){
 url = 'index.php';
 }
 $('.main-menu li').each(function(){
  var href = $(this).find('a').attr('href');
  if(url == href){
   $(this).addClass('active');
  }
 });
});
</script>

<script>
    $( '.card h3' ).on( "click", function() {
    $( this ).find( 'span' ).toggleClass( "fa-caret-up fa-caret-down" );
    } );
</script>

<!------For scroll animation------>
<script>
    jQuery(function($) {
    var doAnimations = function() {
    var offset = $(window).scrollTop() + $(window).height(),
    $animatables = $('.animatable');
    if ($animatables.length == 0) {
    $(window).off('scroll', doAnimations);
    }
    $animatables.each(function(i) {
    var $animatable = $(this);
    if (($animatable.offset().top + $animatable.height() - 80) < offset) {
    $animatable.removeClass('animatable').addClass('animated');
    }
    });
    };
    $(window).on('scroll', doAnimations);
    $(window).trigger('scroll');
    });
</script>   
               
<script>
    $('.header-search-wrapper .search-main').click(function(){
    $('.search-form-main').addClass('active-search');
    $('.search-form-main .search-field').focus();
    });
</script>      
<script>
    $('.header-search-wrapper .search-cross').click(function(){
    $('.search-form-main').removeClass('active-search');
    $('.search-form-main .search-field').focus();
    });
</script>

<!-- Load Facebook SDK for JavaScript -->

<!-- Load Facebook SDK for JavaScript -->

<script>
    window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v10.0'
    });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
    $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
    });
</script>



<script>
    function shareOnFB(){

        var data=  window.location.href;
       var url = "https://www.facebook.com/sharer/sharer.php?u="+data;
       window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
       return false;
  }


function shareOntwitter(){
    var data=  window.location.href;
    var url = 'https://twitter.com/intent/tweet?url='+data;
    TwitterWindow = window.open(url, 'TwitterWindow',width=600,height=300);
    return false;
 }

function shareOntumblr(){
    var data=  window.location.href;
    var url = 'https://www.tumblr.com/widgets/share/tool?canonicalUrl='+data;
    TwitterWindow = window.open(url, 'TwitterWindow',width=600,height=300);
    return false;
 }


function shareOnPintarest(){
    var data=  window.location.href;
     var url = "https://pinterest.com/pin/create/button/?url="+data;
     window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480');
     return false;
}

function shareOnMail(){
    var data=  window.location.href;
    var title = document.getElementsByTagName("title")[0].innerHTML
     var url = "mailto:?subject="+title+"&body="+data;
     window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480');
     return false;
}
function shareOnTumblr(){
    var data=  window.location.href;
    var title = document.getElementsByTagName("title")[0].innerHTML
     var url = "https://www.tumblr.com/widgets/share/tool?posttype=link&title="+title+"&caption="+title+"&content="+data+"&canonicalUrl="+data+"";
     window.open(url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=350,width=480');
     return false;
}
</script>

<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
@include('_msg')




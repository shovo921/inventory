@extends('frontend.layouts.master')
@section('content')
    <style>
        .main-banner:before {
            background-image: url({{asset('frontend/server/image')}}/{{$data->image}});
        }
        .banner-image img{
           max-height: 333px;
            max-width: 589px;
        }

    </style>


    <div class="main-banner" id="top" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="owl-carousel owl-banner">
                                @if($bannerdata)
                                    @foreach($bannerdata as $bannerdata)
                                <div class="item header-text">
                                    <h6>{{$bannerdata->title}}</h6>
{{--                                    <h2>Build <em>your website</em> the best in <span>SEO</span>?</h2>--}}
                                    <div class="banner-image">
                                        <img  class="rounded" src="{{asset('frontend/server/image/banner')}}/{{$bannerdata->image}}">
                                    </div>
                                    <p>{{$bannerdata->description}}</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#contact">Message Us Now</a>
                                        </div>
                                        <div class="call-button">
                                            <a href="tel:{{$bannerdata->phone}}"><i class="fa fa-phone"></i> {{$bannerdata->phone}} </a>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                @endif
{{--                                <div class="item header-text">--}}
{{--                                    <h6>Online Marketing</h6>--}}
{{--                                    <h2>Get the <em>best ideas</em> for <span>your website</span></h2>--}}
{{--                                    <p>You are NOT allowed to redistribute this template ZIP file on any Free CSS collection websites. Contact us for more info. Thank you.</p>--}}
{{--                                    <div class="down-buttons">--}}
{{--                                        <div class="main-blue-button-hover">--}}
{{--                                            <a href="#services">Our Services</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="call-button">--}}
{{--                                            <a href="#"><i class="fa fa-phone"></i> 090-080-0760</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item header-text">--}}
{{--                                    <h6>Video Tutorials</h6>--}}
{{--                                    <h2>Watch <em>our videos</em> for your <span>projects</span></h2>--}}
{{--                                    <p>Please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little via PayPal if this digital marketing HTML template is useful for you. Thank you.</p>--}}
{{--                                    <div class="down-buttons">--}}
{{--                                        <div class="main-blue-button-hover">--}}
{{--                                            <a href="#video">Watch Videos</a>--}}
{{--                                        </div>--}}
{{--                                        <div class="call-button">--}}
{{--                                            <a href="#"><i class="fa fa-phone"></i> 050-040-0320</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="our-services section">
        <div class="services-right-dec">
            <img src="{{asset('frontend/assets/images/services-right-dec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="services-left-dec">
                <img src="{{asset('frontend/assets/images/services-left-dec.png')}}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
                        <span>Our Services</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-services">
                        <div class="item">
                            <h4>Learn More about our Guidelines</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-01.png')}}" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>
                        <div class="item">
                            <h4>Develop The Best Strategy for Business</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-02.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>UI / UX Design and Development</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-03.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Discover &amp; Explore our SEO Tips</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-04.png')}}" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>
                        <div class="item">
                            <h4>Optimizing your websites for Speed</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-01.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>See The Strategy In The Market</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-02.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Best Content Ideas for your pages</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-03.png')}}" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>
                        <div class="item">
                            <h4>Optimizing Speed for your web pages</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-04.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Accessibility for mobile viewing</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-01.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Content Ideas for your next project</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-02.png')}}" alt=""></div>
                            <p>Feel free to use this template for your business</p>
                        </div>
                        <div class="item">
                            <h4>UI &amp; UX Design &amp; Development</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-03.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                        <div class="item">
                            <h4>Discover the digital marketing trend</h4>
                            <div class="icon"><img src="{{asset('frontend/assets/images/service-icon-04.png')}}" alt=""></div>
                            <p>Get to know more about the topic in details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="{{asset('frontend/assets/images/about-left-image.png')}}" alt="Two Girls working together">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Grow your website with our <em>SEO Tools</em> &amp; <span>Project</span> Management</h2>
                        <p>You can browse free HTML templates on Too CSS website. Visit the website and explore latest website templates for your projects.</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="{{asset('frontend/')}}assets/images/service-icon-01.png" alt="">
                                        </div>
                                        <div class="count-digit">320</div>
                                        <div class="count-title">SEO Projects</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="{{asset('frontend/')}}assets/images/service-icon-02.png" alt="">
                                        </div>
                                        <div class="count-digit">640</div>
                                        <div class="count-title">Websites</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="{{asset('frontend/')}}assets/images/service-icon-03.png" alt="">
                                        </div>
                                        <div class="count-digit">120</div>
                                        <div class="count-title">Satisfied Clients</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="portfolio-left-dec">
            <img src="{{asset('frontend/assets/images/portfolio-left-dec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Couple’s <em>Success</em> &amp; Stories </h2>
                        <span>Our Achievement</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-portfolio">
                        @if($ourstory)
                        @foreach($ourstory as $ourstory)
                        <div class="item">
                            <div class="thumb">

                                <img src="{{asset('frontend/server/image/story')}}/{{$ourstory->image}}" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent"><h4>{{$ourstory->title}}</h4></a>
                                        <span>{{$ourstory->description}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                          <p> no data</p>
                        @endif
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-02.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Project Two</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-03.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent"><h4>Third Project</h4></a>--}}
{{--                                        <span>Space Dynamic SEO</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-04.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Project Four</h4></a>--}}
{{--                                        <span>Website Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-01.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Fifth Project</h4></a>--}}
{{--                                        <span>Digital Assets</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-02.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Sixth Project</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-03.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>7th Project</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-04.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>8th Project</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-01.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>9th Project</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-02.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Project Ten</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-03.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>Project Eleven</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{asset('frontend/assets/images/portfolio-04.jpg')}}" alt="">--}}
{{--                                <div class="hover-effect">--}}
{{--                                    <div class="inner-content">--}}
{{--                                        <a href="#"><h4>12th Project</h4></a>--}}
{{--                                        <span>SEO &amp; Marketing</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pricing" class="pricing-tables">
        <div class="tables-left-dec">
            <img src="{{asset('frontend/assets/images/tables-left-dec.png')}}" alt="">
        </div>
        <div class="tables-right-dec">
            <img src="{{asset('frontend/assets/images/tables-right-dec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Select a suitable <em>plan</em> for your next <span>projects</span></h2>
                        <span>Our Plans</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="item first-item">
                        <h4>Starter Plan</h4>
                        <em>$160/mo</em>
                        <span>$140</span>
                        <ul>
                            <li>10 Projects</li>
                            <li>100 GB space</li>
                            <li>20 SEO checkups</li>
                            <li>Basic Support</li>
                        </ul>
                        <div class="main-blue-button-hover">
                            <a href="#">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item second-item">
                        <h4>Standard Plan</h4>
                        <em>$240/mo</em>
                        <span>$200</span>
                        <ul>
                            <li>20 Projects</li>
                            <li>200 GB space</li>
                            <li>50 SEO checkups</li>
                            <li>Pro Support</li>
                        </ul>
                        <div class="main-blue-button-hover">
                            <a href="#">Get it Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item third-item">
                        <h4>Advanced Plan</h4>
                        <em>$360/mo</em>
                        <span>$280</span>
                        <ul>
                            <li>30 Projects</li>
                            <li>300 GB space</li>
                            <li>100 SEO checkups</li>
                            <li>Best Support</li>
                        </ul>
                        <div class="main-blue-button-hover">
                            <a href="#">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="subscribe" class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <h2>Know Your Website SEO Score by Email</h2>
                                <form id="subscribe" action="" method="get">
                                    <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                    <button type="submit" id="form-submit" class="main-button ">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="video" class="our-videos section">
        <div class="videos-left-dec">
            <img src="{{asset('frontend/assets/images/videos-left-dec.png')}}" alt="">
        </div>
        <div class="videos-right-dec">
            <img src="{{asset('frontend/assets/images/videos-right-dec.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/JynGuQx4a1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#"><h4>Project One</h4></a>
                                                        <span>SEO &amp; Marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RdJBSFpcO4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#"><h4>Second Project</h4></a>
                                                        <span>Advertising &amp; Marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZlfAjbQiL78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#"><h4>Project Three</h4></a>
                                                        <span>Digital &amp; Marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mx1WseE7-0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    <div class="overlay-effect">
                                                        <a href="#"><h4>Fourth Project</h4></a>
                                                        <span>SEO &amp; Advertising</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4">
                                    <div class="menu">
                                        <div class="active">
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/video-thumb-01.png')}}" alt="">
                                                <div class="inner-content">
                                                    <h4>Project One</h4>
                                                    <span>SEO &amp; Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/video-thumb-02.png')}}" alt="">
                                                <div class="inner-content">
                                                    <h4>Second Project</h4>
                                                    <span>Advertising &amp; Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/video-thumb-03.png')}}" alt="Marketing">
                                                <div class="inner-content">
                                                    <h4>Project Three</h4>
                                                    <span>Digital &amp; Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <img src="{{asset('frontend/assets/images/video-thumb-04.png')}}" alt="SEO Work">
                                                <div class="inner-content">
                                                    <h4>Fourth Project</h4>
                                                    <span>SEO &amp; Advertising</span>
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
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2>Feel free to <em>Contact</em> us </h2>
                        <div id="map">
                            <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                        <div class="info">
                            <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>
                            <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <form id="contact" action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                    <span class="text-danger">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                                    <span class="text-danger">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input  pattern="/(01)[0-9]{9}/"  type="number" name="phone" id="surname" placeholder="Phone Number" autocomplete="on" required>

                                    <span class="text-danger">
                                        @error('phone')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="subject" id="website" placeholder="Your Subject" required="">
                                    <span class="text-danger">
                                        @error('subject')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset class="textarea-contact">
                                    <textarea rows="4" cols="27" type="text" name="message" id="website" placeholder="Your Messege" ></textarea>
                                    <span class="text-danger">
                                        @error('message')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="{{asset('frontend/assets/images/contact-dec.png')}}" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="{{asset('frontend/assets/images/contact-left-dec.png')}}" alt="">
        </div>
    </div>

    <div class="footer-dec">
        <img src="{{asset('frontend/assets/images/footer-dec.png')}}" alt="">
    </div>






@endsection


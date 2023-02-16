<!-- ***** Preloader Start ***** -->
{{--<div id="js-preloader" class="js-preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <span class="dot"></span>--}}
{{--        <div class="dots">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        @php
                            $homeseeting=homeseeting();
                        @endphp
                        @if($homeseeting)
                            <img src="{{asset('frontend/server/image')}}/{{$homeseeting->logo}}">
                        @else
                            <img src="{{asset('frontend')}}/assets/images/logo.png">
                        @endif
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/#top')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#services')}}">Services</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#about')}}">About</a></li>
                        <li class="scroll-to-section"><a href="{{route('search')}}">Search</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#portfolio')}}">Portfolio</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#video')}}">Videos</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#contact')}}">Contact Us</a></li>
                        @if (Auth::guest())
                        <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{route('login')}}">Login / Register</a></div></li>
                        @else
                            <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{route('login')}}">Dashboard</a></div></li>
                        @endif
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

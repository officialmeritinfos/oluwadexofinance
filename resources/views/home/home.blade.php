@extends('home.base')
@section('content')


    <!-- Start Home Area -->
    <div class="home-slides owl-carousel owl-theme">
        <div class="single-banner-item bg1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-content">
                            <span class="sub-title">WELCOME TO {{strtoupper($siteName)}}</span>
                            <h1>Navigate the Financial Markets with  Confidence:</h1>
                            <p>Unlock the Power of Forex Trading, Stocks, and More for Your Investment Success</p>
                            <div class="btn-box">
                                <a href="{{route('login')}}" class="default-btn">Login <i class="ri-arrow-right-line"></i></a>
                                <a href="{{route('register')}}" class="default-btn">Get Started <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-image">
                            <img src="{{asset('home/img/banner/banner2.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-banner-item bg2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-content">
                            <span class="sub-title">FUTURE SECURITY</span>
                            <h1>Secure your future</h1>
                            <p>
                                Expert Retirement Planning, Precious Metals, and High-Return Ventures Await You on Our Investment Platform
                            </p>
                            <div class="btn-box">
                                <a href="{{route('login')}}" class="default-btn">Login <i class="ri-arrow-right-line"></i></a>
                                <a href="{{route('register')}}" class="default-btn">Get Started <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-image">
                            <img src="{{asset('home/img/banner/banner3.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-banner-item bg3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-content">
                            <span class="sub-title">REASON OF CHOOSE {{strtoupper($siteName)}}</span>
                            <h1>Diversify and Prosper</h1>
                            <p>
                                Your Gateway to Wealth through Forex, Stocks, Retirement Solutions, Gold, Medical Cannabis, and Oil & Gas Investments!
                            </p>
                            <div class="btn-box">
                                <a href="{{route('login')}}" class="default-btn">Login <i class="ri-arrow-right-line"></i></a>
                                <a href="{{route('register')}}" class="default-btn">Get Started <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="banner-item-image">
                            <img src="{{asset('home/img/banner/banner4.png')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home Area -->

    <!-- Start About Area -->
    <div class="about-area pt-100">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-img">
                        <img src="{{asset('home/img/about/about2.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-text">
                        <span class="sub-title">ABOUT ALL OF US</span>
                        <h2>One of the Fastest Way to Gain Business Success</h2>
                        <p>
                            Welcome to {{$siteName}}, your all-in-one destination for navigating the world of investments.
                            Specializing in Forex trading, stocks, retirement planning, gold, medical cannabis, and oil and gas,
                            {{$siteName}} is your gateway to a diverse range of lucrative opportunities.
                        </p>
                        <P>
                            At {{$siteName}}, we're not just an investment platform; we're your financial ally on the path to success.
                            Our mission is to empower investors with the knowledge and tools they need to make informed
                            decisions across various financial landscapes.
                        </P>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <h3>Consistency</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-settings-2-line"></i>
                                    </div>
                                    <h3>Strategy</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <h3>Investment</h3>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('about')}}" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Start Services Area -->
    <div class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">SERVICES</span>
                <h2>Services we provide</h2>
            </div>

            <div class="row align-items-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="services-box">
                            <div class="d-flex align-items-center">
                                <i class="icon ri-group-2-line"></i>
                                <h3><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}y</a></h3>
                            </div>
                            <p>
                                {{$service->short}}
                            </p>
                            <a href="{{route('service.details',['id'=>$service->id])}}" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Services Area -->
    <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Industries</span>
                <h2>Industries we operate in</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services-box">
                            <div class="image">
                                <a href="{{route('service.details',['id'=>$service->id])}}">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="image">
                                </a>
                            </div>
                            <div class="content">
                                <h3><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                <p>
                                    {{$service->short}}
                                </p>
                                <a href="{{route('service.details',['id'=>$service->id])}}" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Services Area -->

    <!-- Start Funfacts Area -->
    <div class="funfacts-area pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">FUN FACTS</span>
                <h2>The statistics never lie.</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                    <div class="funfacts-box">
                        <i class="ri-file-copy-2-line"></i>
                        <h3><span class="odometer" data-count="40">00</span><span class="sign">M+</span></h3>
                        <p>Completed Payouts</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                    <div class="funfacts-box">
                        <i class="ri-book-open-line"></i>
                        <h3><span class="odometer" data-count="15">00</span><span class="sign">K+</span></h3>
                        <p>Investors</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                    <div class="funfacts-box">
                        <i class="ri-star-smile-line"></i>
                        <h3><span class="odometer" data-count="70">00</span><span class="sign">M+</span></h3>
                        <p>Case Investments</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-6 col-md-3">
                    <div class="funfacts-box">
                        <i class="ri-user-settings-line"></i>
                        <h3><span class="odometer" data-count="78">00</span><span class="sign">+</span></h3>
                        <p>Agents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Funfacts Area -->

    <!-- Start Testimonial Area -->
    <div class="testimonial-area">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">TESTIMONIALS</span>
                <h2>Our Clients Talk about us</h2>
            </div>

            <div class="testimonial-slides owl-carousel owl-theme">
                <div class="single-testimonial-box">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="testimonial-desc">
                                <i class="ri-double-quotes-l"></i>
                                <p>They are amazing and keep to their words</p>
                                <div class="info">
                                    <h3>Silver Alex</h3>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="testimonial-image">
                                <img src="https://ui-avatars.com/api/?name=Silver+alex" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-testimonial-box">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="testimonial-desc">
                                <i class="ri-double-quotes-l"></i>
                                <p>
                                    I was a begineer in investing, but they took me from zero to hero
                                </p>
                                <div class="info">
                                    <h3>Maxxiko A.</h3>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="testimonial-image">
                                <img src="https://ui-avatars.com/api/?name=Maxxiko+Andrew" alt="image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-testimonial-box">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="testimonial-desc">
                                <i class="ri-double-quotes-l"></i>
                                <p>
                                    Their customer care agents are super super amazing and supportive
                                </p>
                                <div class="info">
                                    <h3>Thompson J.</h3>
                                    <span>Investor</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="testimonial-image">
                                <img src="https://ui-avatars.com/api/?name=Thompson+J" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Area -->

    <!-- Start Partner Area -->
    <div class="partner-area pt-100">
        <div class="container">
            <div class="partner-slides owl-carousel owl-theme">
                <div class="single-partner-item">
                    <a href="#" class="d-inline-block">
                        <img src="{{asset('home/img/partner/partner1.png')}}" alt="image">
                    </a>
                </div>

                <div class="single-partner-item">
                    <a href="#" class="d-inline-block">
                        <img src="{{asset('home/img/partner/partner2.png')}}" alt="image">
                    </a>
                </div>

                <div class="single-partner-item">
                    <a href="#" class="d-inline-block">
                        <img src="{{asset('home/img/partner/partner3.png')}}" alt="image">
                    </a>
                </div>

                <div class="single-partner-item">
                    <a href="#" class="d-inline-block">
                        <img src="{{asset('home/img/partner/partner4.png')}}" alt="image">
                    </a>
                </div>

                <div class="single-partner-item">
                    <a href="#" class="d-inline-block">
                        <img src="{{asset('home/img/partner/partner5.png')}}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">OUR BLOGS</span>
                <h2>Meet Up With Our Blogs</h2>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                        <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- End Blog Area -->

@endsection


@extends('layouts.header')

@section('content')


    <!--
			=============================================
				Theme Main Banner
			==============================================
			-->
    <div id="theme-main-banner" class="banner-two section-spacing">
        @foreach($banners as $banner)
        <div data-src="{{$banner->image}}">
            <div class="camera_caption">
                <div class="container">
                    <h1 class="wow fadeInUp animated">{{$banner->headline}}</h1>
                    <p class="wow fadeInUp animated" data-wow-delay="0.2s">{{$banner->description}}</p>
                    <a href="about.html" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>

                    <div class="consultation-form">
                        <form action="#" class="wow fadeInRight animated" data-wow-delay="0.3s">
                            <h3>Get in Touch With Us</h3>
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Phone">
                            <input type="email" placeholder="Email">
                            <button class="theme-button-one">Send Request</button>
                        </form>
                    </div> <!-- /.consultation-form -->
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        @endforeach
    </div> <!-- /#theme-main-banner -->



    <!--
    =============================================
        About Company
    ==============================================
    -->
    <div class="about-compnay section-spacing">
        @foreach($settings as $setting)
        <div class="container">

            <div class="theme-title-one">
                <h2 class="title">Chakwizira Sports <br>& Recreation Centre</h2>
            </div> <!-- /.theme-title-one -->
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeInLeft animated">
                    <div class="text-wrapper">
                        <p> {{$setting->about}}</p> <a href="about.html" class="theme-button-one">View More Info</a>
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.col- -->
                <div class="col-lg-6 col-12 wow fadeInRight animated">
                    <div class="about-feature">
                        <div class="row">
                            @foreach($services as $service)
                            <div class="col-sm-6">
                                <div class="single-feature">
                                    <i class="icon flaticon-shake"></i>
                                    <h6 class="title"><a href="#">{{$service->title}}</a></h6>
                                    <p>{{$service->description}}</p>
                                </div> <!-- /.single-feature -->
                            </div> <!-- /.col- -->

                                @endforeach
                        </div> <!-- /.row -->
                    </div> <!-- /.about-feature -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
            @endforeach
    </div> <!-- /.about-compnay -->


    <!--
    =============================================
        Quote Banner
    ==============================================
    -->
    <div class="quote-banner section-spacing">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-12">
                        <h2>We look forward to doing great things with you.</h2>
                    </div>
                    <div class="col-lg-5 col-md-4 col-12"><a href="#" class="theme-button-one">Get A Quoat</a></div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.quote-banner -->


    <!--
    =============================================
        Service Style Two
    ==============================================
    -->
    <div class="service-style-two section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Our Serveice</h2>
            </div> <!-- /.theme-title-one -->
            <div class="service-slider">
                @foreach($services as $service)
                <div class="item">
                    <div class="single-block">
                        <div class="img-box">
                            <img src="{{$service->image}}" alt="">
                            <div class="overlay">
                                <a data-fancybox href="#" class="play-button"><i class="flaticon-unlink"></i></a>
                            </div> <!-- /.overlay -->
                        </div> <!-- /.img-box -->
                        <div class="text">
                            <i class="icon flaticon-bag"></i>
                            <div class="srvc-name">
                                <h5><a href="service-details.html">{{$service->title}}</a></h5>
                                <span>We are Consulting Company</span>
                            </div> <!-- /.srvc-name -->
                            <p>{{str_limit($service->description,40)}}</p>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.item -->
               @endforeach
            </div> <!-- /.service-slider -->
            <div class="view-all-service clearfix">
                <a href="{{'/services'}}" class="theme-button-one">View All Services</a>
            </div> <!-- /.view-all-service -->
        </div> <!-- /.container -->
    </div> <!-- /.service-style-two -->



    <!--
    =====================================================
        Why Choose us
    =====================================================

    <div class="why-choose-us section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 wow fadeInLeft animated">
                    <div class="text-wrapper">
                        <div class="theme-title-one">
                            <h2 class="title">Why Choose Us?</h2>
                        </div> <!-- /.theme-title-one
                        <p>Duis rhoncus ac justo cursus feugiat. Curabitur est quam, interdum et ante quis, scelerisque pellentesque eros.Leverage agile frameworks to provide a robust synopsis for high overviews. Iterative approaches to corporate innovation via workplace</p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-block">
                                    <div class="tag">Tax Planning</div>
                                    <h6 class="title">Trust Worthy</h6>
                                    <p>Duis rhoncus ac justo cursus feugiat. Cura bitur est quam, interdum et ante quis, scel erisque pellentesque eros.</p>
                                </div> <!-- /.single-block -
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block">
                                    <div class="tag">Tax Planning</div>
                                    <h6 class="title">Trust Worthy</h6>
                                    <p>Duis rhoncus ac justo cursus feugiat. Cura bitur est quam, interdum et ante quis, scel erisque pellentesque eros.</p>
                                </div> <!-- /.single-block
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block">
                                    <div class="tag">Tax Planning</div>
                                    <h6 class="title">Trust Worthy</h6>
                                    <p>Duis rhoncus ac justo cursus feugiat. Cura bitur est quam, interdum et ante quis, scel erisque pellentesque eros.</p>
                                </div> <!-- /.single-block
                            </div>
                            <div class="col-sm-6">
                                <div class="single-block">
                                    <div class="tag">Tax Planning</div>
                                    <h6 class="title">Trust Worthy</h6>
                                    <p>Duis rhoncus ac justo cursus feugiat. Cura bitur est quam, interdum et ante quis, scel erisque pellentesque eros.</p>
                                </div> <!-- /.single-block
                            </div>
                        </div>
                    </div> <!-- /.text-wrap
                </div> <!-- /.col- --
                <div class="col-lg-5 col-12 wow fadeInRight animated">
                    <div class="call-back-form-two">
                        <div class="theme-title-one">
                            <h2 class="title">Request a Call Back</h2>
                        </div> <!-- /.theme-title-one -
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <textarea placeholder="Your Words"></textarea>
                            <button class="theme-button-one">Submit</button>
                        </form>
                    </div> <!-- /.call-back-form-two -
                </div> <!-- /.col- -
            </div> <!-- /.row --
        </div> <!-- /.container --
    </div> <!-- /.why-choose-us -->



    <!--
    =====================================================
        Our Team
    =====================================================
    -->
    <div class="our-team section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Our Team</h2>
            </div> <!-- /.theme-title-one -->
            <div class="wrapper">
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="team-member">
                            <div class="image-box">
                                <img src="{{$team->image}}" alt="">
                                <div class="overlay">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <p>{{str_limit($team->description,40)}}</p>
                                    </div> <!-- /.hover-content -->
                                </div> <!-- /.overlay -->
                            </div> <!-- /.image-box -->
                            <div class="text">
                                <h6>{{$team->name}}</h6>
                                <span>{{$team->role}}</span>
                            </div> <!-- /.text -->
                        </div> <!-- /.team-member -->
                    </div> <!-- /.col- -->
                    @endforeach
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.our-team -->



    <!--
    =====================================================
        Theme Counter Section
    =====================================================
    -->
    <div class="theme-counter-section">
        <div class="overlay">
            <div class="container">
                <h2 class="title">Helping young people to pursue with their talents </h2>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <div class="single-counter">
                            <i class="icon flaticon-target"></i>
                            <div class="number"><span class="timer" data-from="0" data-to="256" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                            <p>Team Players</p>
                        </div> <!-- /.single-counter -->
                    </div> <!-- .col- -->
                    <div class="col-md-3 col-6">
                        <div class="single-counter">
                            <i class="icon flaticon-suitcase"></i>
                            <div class="number"><span class="timer" data-from="0" data-to="42" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                            <p>Trophies Won</p>
                        </div> <!-- /.single-counter -->
                    </div> <!-- .col- -->
                    <div class="col-md-3 col-6">
                        <div class="single-counter">
                            <i class="icon flaticon-trophy"></i>
                            <div class="number"><span class="timer" data-from="0" data-to="1703" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                            <p>Medals</p>
                        </div> <!-- /.single-counter -->
                    </div> <!-- .col- -->
                    <div class="col-md-3 col-6">
                        <div class="single-counter">
                            <i class="icon flaticon-handshake"></i>
                            <div class="number"><span class="timer" data-from="0" data-to="114" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                            <p>Matches Played</p>
                        </div> <!-- /.single-counter -->
                    </div> <!-- .col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-counter-section -->


    <!--
    =====================================================
        Latest Project
    =====================================================
    -->
    <div class="latest-project bg-color">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Our Latest Gallery</h2>
            </div> <!-- /.theme-title-one -->
            <div class="row">
              @foreach($galleries as $gallery)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="single-block">
                        <img src="{{$gallery->image}}" alt="">
                        <div class="overlay">
                            <div>
                                <h6><a href="project-details.html">{{$gallery->caption}}</a></h6>
                                <span>Current Project</span>
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
             <!-- /.row -->
            @endforeach
        </div>
            <div class="view-all-project text-center clearfix"><a href="project-grid.html" class="theme-button-one">View All Project</a></div> <!-- /.view-all-project -->
        </div> <!-- /.container -->
    </div> <!-- /.latest-project -->


    <!--
    =====================================================
        Testimonial Section Two



    <!--
    =====================================================
        Our Blog
    =====================================================
    -->
    <div class="our-blog section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Latest News &amp; Updates</h2>
            </div> <!-- /.theme-title-one -->
            <div class="latest-news-slider">
                @foreach($news as $new)
                <div class="item">
                    <div class="single-blog-meta">
                        <div class="img-box">
                            <img src="{{$new->image}}" alt="">
                            <a href="#" class="date">{{$new->created_at->diffForHumans()}}</a>
                        </div>
                        <div class="text">
                            <ul class="post-info clearfix">
                                <li>By <a href="#">Amdin</a></li>
                                <li><a href="#">11 Likes</a></li>
                                <li><a href="#">0 comment</a></li>
                            </ul>
                            <h6 class="title"><a href="blog-details.html">{{str_limit($new->msg,50)}}</a></h6>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-blog-meta -->
                </div> <!-- /.item -->
                @endforeach
            </div> <!-- /.latest-news-slider -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->






@endsection

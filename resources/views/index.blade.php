
@extends('layouts.header')

@section('content')

    <!--
			=============================================
				Theme Main Banner
			==============================================
			-->

    <div id="theme-main-banner" class="banner-one section-spacing">
        @foreach($banners as $banner)
        <div data-src="{{$banner->image}}">
            <div class="camera_caption text-center">
                <div class="container">
                    <h1 class="wow fadeInUp animated">{{$banner->headline}}</h1>
                    <p class="wow fadeInUp animated" data-wow-delay="0.2s">{{$banner->description}}</p>
                    <a href="{{'/about'}}" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.278s">Read more</a>
                </div> <!-- /.container -->
            </div> <!-- /.camera_caption -->
        </div>
        @endforeach
    </div> <!-- /#theme-main-banner -->


    <!--
    =============================================
        Feature Work
    ==============================================
    -->
    <div class="feature-work section-spacing">
        <div class="container">
            <div class="feature-work-slider">
                @foreach($settings as $setting)
                <div class="item">
                    <div class="single-feature">
                        <h5 class="title">Who we are?</h5>
                        <p>{{str_limit($setting->description,150)}}</p>
                        <a href="{{'/about'}}" class="learn-more">Learn More</a>
                    </div> <!-- /.single-feature -->
                </div>
                @endforeach
                    @foreach($settings as $setting)
                        <div class="item">
                            <div class="single-feature">
                                <h5 class="title">What we do?</h5>
                                <p>{{str_limit($setting->about,150)}}</p>
                                <a href="{{'/about'}}" class="learn-more">Learn More</a>
                            </div> <!-- /.single-feature -->
                        </div>
                    @endforeach
                    @foreach($settings as $setting)
                        <div class="item">
                            <div class="single-feature">
                                <h5 class="title">How we are working?</h5>
                                <p>{{str_limit($setting->mission,150)}}</p>
                                <a href="{{'/about'}}" class="learn-more">Learn More</a>
                            </div> <!-- /.single-feature -->
                        </div>
                    @endforeach
            </div> <!-- /.feature-work-slider -->
        </div> <!-- /.container -->
    </div> <!-- /.feature-work -->


    <!--
    =============================================
        About Company
    ==============================================
    -->
    <div class="about-compnay section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Chakwizira Sports & Recreation Centre</h2>
            </div> <!-- /.theme-title-one -->
        </div> <!-- /.container -->
    </div> <!-- /.about-compnay -->


    <!--
    =============================================
        Service Style One
    ==============================================
        --> @foreach($pik as $pic)
    <div class="service-style-one section-spacing" style="background-image: url('{{$pic->image}}')">
        <div class="section-bg-half left-half wow fadeInLeft animated" data-wow-delay="0.278s"><div class="opacity"></div></div>
        <div class="section-bg-half right-half wow fadeInRight animated" data-wow-delay="0.278s"></div>
        <div class="main-container">
            <div class="main-bg-wrapper">
                <div class="container">
                    <div class="clearfix">
                        <div class="left-side">
                            <div class="theme-title-one">
                                <h2 class="title">Our Services</h2>
                            </div>
                        @foreach($settings as $setting)<!-- /.theme-title-one -->
                            <p>{{$setting->about}}</p>
                        @endforeach
                            <a href="{{'/services'}}" class="theme-button-one">View All Services</a>
                        </div> <!-- /.left-side -->

                        <div class="right-side">
                            <div class="row">
                                @foreach($services as $service)
                                <div class="col-md-6 col-12 wow fadeInUp animated">
                                    <div class="single-service">
                                        <i class="icon flaticon-bag"></i>
                                        <div class="srvc-name">
                                            <h6><a href="{{route('services-details',['slug'=>$service->slug])}}">{{$service->title}}</a></h6>
                                            <span>We are CSRC</span>
                                        </div> <!-- /.srvc-name -->
                                        <p>{{str_limit($service->description,60)}} </p>  </div> <!-- /.single-service -->
                                </div> <!-- /.col- -->
                                @endforeach
                            </div> <!-- /.row -->
                        </div> <!-- /.right-side -->
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.main-bg-wrapper -->
        </div> <!-- /.main-container -->
    </div> <!-- /.service-style-one -->
    @endforeach


    <!--
    =============================================
        Video Presentation
    ==============================================
    --> @foreach($pik as $pic)
    <div class="video-presentation section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 wow fadeInLeft animated">
                    <div class="video-player" style="background-image: url('{{$pic->image}}')">
                        <a data-fancybox href="#" class="play-button"><i class="flaticon-right-arrow"></i></a>
                    </div> <!-- /.video-player -->
                    <div class="video-length"><span>Video name — 3:45 min.</span></div>
                </div> <!-- /.col- -->
                <div class="col-lg-6 col-12 wow fadeInRight animated">
                    <div class="info-text-wrapper">
                        <div class="theme-title-one text-center">
                            <h2 class="title">Our Mission</h2>
                        </div>
                    @foreach($settings as $setting)<!-- /.theme-title-one -->
                        <p>{{$setting->mission}}</p>
                        @endforeach
                        <div class="help"><p>Just <span>Mail</span> us. We can answer all your questions</p> <a href="#">info@csrc.co.zw</a></div>

                    </div>
                @endforeach<!-- /.info-text-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.video-presentation -->



    <!--
    =====================================================
        Theme Counter
    =====================================================
    -->
    <div class="theme-counter-two section-spacing">
        <div class="container">
            <div class="bg">
                <div class="theme-title-one text-center">
                    <h2 class="title">Some fun facts about Chakwizira Sports Recreational Centre</h2>
                </div> <!-- /.theme-title-one -->

                <div class="cunter-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="single-counter-box">
                                <div class="number"><span class="timer" data-from="0" data-to="30" data-speed="1200" data-refresh-interval="5">0</span>+</div>
                                <p>Years of Excellence</p>
                            </div> <!-- /.single-counter-box -->
                        </div>  <!-- /.col- -->
                        <div class="col-md-3 col-6">
                            <div class="single-counter-box">
                                <div class="number"><span class="timer" data-from="0" data-to="100" data-speed="1200" data-refresh-interval="5">0</span>%</div>
                                <p>Trophies</p>
                            </div> <!-- /.single-counter-box -->
                        </div>  <!-- /.col- -->
                        <div class="col-md-3 col-6">
                            <div class="single-counter-box">
                                <div class="number"><span class="timer" data-from="0" data-to="53" data-speed="1200" data-refresh-interval="5">0</span>k</div>
                                <p>Unbeaten Record</p>
                            </div> <!-- /.single-counter-box -->
                        </div>  <!-- /.col- -->
                        <div class="col-md-3 col-6">
                            <div class="single-counter-box">
                                <div class="number"><span class="timer" data-from="0" data-to="24" data-speed="1200" data-refresh-interval="5">0</span></div>
                                <p>Medals Won</p>
                            </div> <!-- /.single-counter-box -->
                        </div>  <!-- /.col- -->
                    </div> <!-- /.row -->
                </div> <!-- /.cunter-wrapper -->
                <a href="#" class="theme-button-one">VIEW CASE STUDIES</a>
            </div> <!-- /.bg -->
        </div> <!-- /.container -->
    </div> <!-- /.theme-counter-two -->



    <!--
    =====================================================
        Latest Project
    =====================================================
    -->
    <div class="latest-project section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Our Latest Pictures</h2>
            </div> <!-- /.theme-title-one -->
            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="single-block">
                        <img src="{{$gallery->image}}" alt="">
                        <div class="overlay">
                            <div>
                                <h6><a href="{{'/portfolio'}}">{{$gallery->description}}</a></h6>
                                <span>{{$gallery->caption}}</span>
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
                @endforeach
            </div> <!-- /.row -->

            <div class="view-all-project clearfix">
                <a href="{{'/portfolio'}}" class="theme-button-one float-right">View Gallery</a>
            </div> <!-- /.view-all-project -->
        </div> <!-- /.container -->
    </div> <!-- /.latest-project -->



    <!--
    =====================================================
        Call Back Form One
    =====================================================
    -->
    <div class="call-back-form-one section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Request a Call Back</h2>
            </div> <!-- /.theme-title-one -->
            <form action="#">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12"><input type="text" placeholder="Name"></div>
                    <div class="col-lg-4 col-md-6 col-12"><input type="email" placeholder="Email"></div>
                    <div class="col-lg-4 col-12"><input type="text" placeholder="Phone"></div>
                    <div class="col-lg-4 col-12">
                        <select class="form-control" id="exampleSelect1">
                            <option>I would like to discuss</option>
                            <option>Business Services</option>
                            <option>Consumer Product</option>
                            <option>Financial Services</option>
                            <option>Software Research</option>
                        </select>
                        <input type="text" placeholder="Any Other Topic ">
                    </div>
                    <div class="col-lg-8 col-12"><textarea placeholder="Your Words"></textarea></div>
                </div>
                <button class="theme-button-one">Submit</button>
            </form>
        </div> <!-- /.container -->
    </div> <!-- /.call-back-form-one -->



    <!--
    =====================================================
        Our Blog
    =====================================================
    -->
    <div class="our-blog center-text-blog section-spacing">
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
                                <li>By <a href="#">Admin</a></li>
                                <li><a href="#"><span class="fa fa-map-marker"></span></a></li>
                                <li><a href="#">0 comment</a></li>
                            </ul>
                            <h6 class="title"><a href="blog-details.html">{{$new->title}}</a></h6>
                            <p>{{str_limit($new->msg,100)}} </p>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-blog-meta -->
                </div> <!-- /.item -->
                    @endforeach
            </div> <!-- /.latest-news-slider -->
        </div> <!-- /.container -->
    </div> <!-- /.our-blog -->


@endsection

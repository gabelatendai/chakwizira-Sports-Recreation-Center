@extends('layouts.top_header')

@section('content')
    <!--
			=============================================
				Theme Inner Banner
			==============================================
			-->
    @foreach($images as $image)
    <div class="theme-inner-banner section-spacing" style="background: url({{$image->image}}) no-repeat center; background-size:cover;">
        <div class="overlay">
            <div class="container">
                <h2 class="title">{{$image->headline}}</h2>
                <ul>
                    <li><a href="{{'/'}}">Home</a></li>
                    <li>.</li>
                    <li><a href="#">Pages</a></li>
                    <li>.</li>
                    <li>About Us</li>
                </ul>
            </div>
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-inner-banner -->
@endforeach
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
    -->
    <div class="service-style-one section-spacing">
        <div class="section-bg-half left-half wow fadeInLeft animated" data-wow-delay="0.278s"><div class="opacity"></div></div>
        <div class="section-bg-half right-half wow fadeInRight animated" data-wow-delay="0.278s"></div>
        <div class="main-container">
            <div class="main-bg-wrapper">
                <div class="container">
                    <div class="clearfix">
                        <div class="left-side">
                            <div class="theme-title-one">
                                <h2 class="title">Who We Are</h2>
                            </div>
                        @foreach($settings as $setting)<!-- /.theme-title-one -->
                            <p>{{$setting->about}}</p>
                        </div> <!-- /.left-side -->

                        <div class="right-side">
                            <div class="row">

                                <div class="col-md-6 col-12 wow fadeInUp animated">
                                    <div class="single-service">
                                        <i class="icon flaticon-bag"></i>
                                        <div class="srvc-name">
                                            <h6>Information</h6>
                                            <!--   <span>We are Consulting Company</span>-->
                                        </div> <!-- /.srvc-name -->
                                        <p>{{str_limit($setting->description,150)}} </p>  </div> <!-- /.single-service -->
                                </div>
                                <div class="col-md-6 col-12 wow fadeInUp animated">
                                    <div class="single-service">
                                        <i class="icon flaticon-bag"></i>
                                        <div class="srvc-name">
                                            <h6>Vision</h6>

                                        </div> <!-- /.srvc-name -->
                                        <p>{{str_limit($setting->vision,150)}} </p>  </div> <!-- /.single-service -->
                                </div>
                                <div class="col-md-6 col-12 wow fadeInUp animated">
                                    <div class="single-service">
                                        <i class="icon flaticon-bag"></i>
                                        <div class="srvc-name">
                                            <h6>Mision</h6>
                                        </div> <!-- /.srvc-name -->
                                        <p>{{str_limit($setting->mission,150)}} </p>  </div> <!-- /.single-service -->
                                </div><!-- /.col- -->
                                @endforeach
                            </div> <!-- /.row -->
                        </div> <!-- /.right-side -->
                    </div>
                </div> <!-- /.container -->
            </div> <!-- /.main-bg-wrapper -->
        </div> <!-- /.main-container -->
    </div> <!-- /.service-style-one -->

    <!--
    =============================================
        Quote Banner
    ==============================================
    -->
    <div class="quote-banner">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-12">
                        <h2>We look forward to doing great things with you anytime</h2>
                    </div>
                    <div class="col-lg-5 col-md-4 col-12"><a href="#" class="theme-button-one">Get A Quoat</a></div>
                </div>
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.quote-banner -->

    <!--
    =====================================================
        Theme Counter Section
    =====================================================
    -->
    <div class="theme-counter-section">
        <div class="overlay">
            <div class="container">
                <h2 class="title">Helping young  people to grow and expand</h2>
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
                            <p>Trophies</p>
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
                            <p>Matches</p>
                        </div> <!-- /.single-counter -->
                    </div> <!-- .col- -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.overlay -->
    </div> <!-- /.theme-counter-section -->



    <!--
    =====================================================
        Why Choose us
    =====================================================
    -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 wow fadeInLeft animated">
                    <div class="text-wrapper">
                        <div class="theme-title-one">
                            <h2 class="title">Our Services</h2>
                        </div>
                        @foreach($settings as $setting)
                        <p>{{$setting->about}}</p>
                            @endforeach
                         <div class="row">
                            @foreach($services as $service)
                            <div class="col-sm-6">
                                <div class="single-block">
                                    <div class="tag">CSRC</div>
                                    <h6 class="title">{{$service->title}}</h6>
                                    <p>{{str_limit($service->description,120)}}</p> </div> <!-- /.single-block -->
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- /.text-wrapper -->
                </div> <!-- /.col- -->
                <div class="col-lg-5 col-12 wow fadeInRight animated">
                    <div class="call-back-form-two">
                        <div class="theme-title-one">
                            <h2 class="title">Request a Call Back</h2>
                        </div> <!-- /.theme-title-one -->
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Phone">
                            <textarea placeholder="Your Words"></textarea>
                            <button class="theme-button-one">Submit</button>
                        </form>
                    </div> <!-- /.call-back-form-two -->
                </div> <!-- /.col- -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.why-choose-us -->

@endsection
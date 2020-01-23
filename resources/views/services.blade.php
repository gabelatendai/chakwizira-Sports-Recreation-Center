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

                        <li>Services</li>
                    </ul>
                </div>
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    @endforeach




    <!--
    =============================================
        Service Style Two
    ==============================================
    -->
    <div class="service-style-two section-spacing">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
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
                                <h5><a href="{{route('services-details',['slug'=>$service->slug])}}">{{$service->title}}</a></h5>
                                <span></span>
                            </div> <!-- /.srvc-name -->
                            <p>{{str_limit($service->description,50)}}</p>
                        </div> <!-- /.text -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.item -->
                    @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.service-style-two -->



    <!--
    =====================================================
        Latest Project
    =====================================================
    -->
    <div class="latest-project section-spacing">
        <div class="container">
            <div class="theme-title-one text-center">
                <h2 class="title">Our Latest Portfolio</h2>
            </div> <!-- /.theme-title-one -->
            <div class="row">
                @foreach($piks as $pik)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="single-block">
                        <img src="{{$pik->image}}" alt="">
                        <div class="overlay">
                            <div>
                                <h6><a href="{{'/portfolio'}}">View Image</a></h6>
                                <span>{{$pik->caption}}</span>
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
               @endforeach
            </div> <!-- /.row -->

            <div class="view-all-project clearfix">
                <p class="float-left"></p>    <a href="project-grid.html" class="theme-button-one float-right">View All Project</a>
            </div> <!-- /.view-all-project -->
        </div> <!-- /.container -->
    </div> <!-- /.latest-project -->



    <!--
    =====================================================
        Testimonial Section One
    =====================================================
    --
    <div class="testimonial-section-one section-spacing wow fadeInUp animated">
        <div class="inner-wrapper clearfix">
            <div class="main-bg">
                <div class="testimonial-slider-one">
                    <div class="item">
                        <i class="icon flaticon-chat"></i>
                        <p>Completely synergize resource taxing ships via premier niche markets. Professionally cultivate oneone customer service with robust ideas. Dynamically innovate vice.</p>
                        <h6 class="name">Donald Simpson</h6>
                        <span>Chief Financial Officer </span>
                    </div>
                    <div class="item">
                        <i class="icon flaticon-chat"></i>
                        <p>Completely synergize resource taxing ships via premier niche markets. Professionally cultivate oneone customer service with robust ideas. Dynamically innovate vice.</p>
                        <h6 class="name">Zinedine Zidane</h6>
                        <span>Chief Financial Officer </span>
                    </div>
                </div> <!-- /.testimonial-slider --
            </div> <!-- /.main-bg --
        </div> <!-- /.inner-wrapper --
    </div> <!-- /.testimonial-section-one -->



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

@endsection

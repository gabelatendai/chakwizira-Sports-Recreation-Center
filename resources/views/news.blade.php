<?php
/**
 * Created by PhpStorm.
 * User: gabela
 * Date: 26/10/2018
 * Time: 22:16
 */
?>

@extends('layouts.top_header')

@section('content')
    @foreach($images as $image)
        <div class="theme-inner-banner section-spacing" style="background: url({{$image->image}}) no-repeat center; background-size:cover;">
            <div class="overlay">
                <div class="container">
                    <h2 class="title">{{$image->headline}}</h2>
                    <ul>
                        <li><a href="{{'/'}}">Home</a></li>
                        <li>.</li>

                        <li>News Single </li>
                    </ul>
                </div>
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    @endforeach

    <div class="news-classic news-details section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="single-classic-news">
                        <div class="title clearfix">
                            <div class="date">{{$news->created_at->diffForHumans()}}</div>
                            <h3>{{$news->title}}</h3>
                        </div> <!-- /.title -->
                        <div class="image-box"><img src="{{$news->image}}" alt=""></div>
                        <ul class="post-tag-meta clearfix">
                            <li>by <a href="#">Admin</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">11 comments</a></li>
                        </ul> <!-- /.post-tag-meta -->
                        <p class="upper-text">{{$news->msg}}</p>
                    </div> <!-- /.single-classic-news -->

                    <div class="comment-reply-form">
                        <h4 class="inner-section-title">Leave A Reply</h4>

                        <form action="#" class="theme-form-one">
                            <div class="row">
                                <div class="col-md-6 order-md-last">
                                    <input type="email" placeholder="Email">
                                    <textarea placeholder="Enter Your Word..."></textarea>
                                </div>
                                <div class="col-md-6 order-md-first">
                                    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="Phone">
                                    <input type="text" placeholder="Subject">
                                    <button class="theme-button-one">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div> <!-- /.comment-reply-form -->
                </div> <!-- /.col- -->


                <!-- ===================== Theme Sidebar ====================== -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 theme-sidebar">
                    <div class="sidebar-search sidebar-spacing">
                        <h5 class="sidebar-title">Search</h5>
                        <form action="#">
                            <input type="text" placeholder="Search">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div> <!-- /.sidebar-search -->
                    <!-- /.sidebar-author -->

                    <div class="sidebar-categories sidebar-spacing">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="{{'/news-categorised'}}">Games</a></li>
                            <li><a href="{{'/news-about'}}">About the team</a></li>
                            <li><a href="{{'/news-press'}}">Press Release</a></li>
                            <li><a href="{{'/news-soccer'}}">Football</a></li>
                            <li><a href="{{'/news-netball'}}">Netball</a></li>
                            <li><a href="{{'/news-computer'}}">Computer Science</a></li>
                            <li><a href="{{'/news-uncategorised'}}">Uncategorized</a></li>
                        </ul>
                    </div> <!-- /.sidebar-categories -->

                    <div class="sidebar-contact-banner sidebar-spacing">
                        <h6>Partner with Us?</h6>
                        <p>Get in touch with us and Be our partner in building young people</p>
                        <a href="{{'/contact'}}" class="theme-button-one"><i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us</a>
                    </div> <!-- /.sidebar-contact-banner -->

                    <div class="sidebar-latest-news sidebar-spacing">
                        <h5 class="sidebar-title">Latest News</h5>
                        @foreach($posts as $post)
                            <div class="single-latest-news">
                                <a href="{{route('news',['slug'=>$post->slug])}}" class="news-title">{{$post->title}}</a>
                                <div class="img-box">
                                    <img src="{{$post->image}}" alt="">
                                    <div class="overlay">
                                        <a href="{{route('news',['slug'=>$post->slug])}}">Read More</a>
                                    </div> <!-- /.overlay -->
                                </div> <!-- /.img-box -->
                                <ul class="clearfix">
                                    <li class="float-left">{{$post->created_at->diffForHumans()}}</li>
                                    <li class="float-right"><span>02</span> Comment</li>
                                </ul>
                            </div> <!-- /.single-latest-news -->
                        @endforeach
                    </div> <!-- /.sidebar-latest-news -->

                    <div class="sidebar-archive sidebar-spacing">
                        <h5 class="sidebar-title">Archive</h5>
                        <select class="form-control" id="exampleSelect1">
                            <option>Select Month</option>
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                        </select>
                    </div> <!-- /.sidebar-archive -->

                    <div class="sidebar-gallery sidebar-spacing">
                        <h5 class="sidebar-title">See our gallery</h5>
                        <ul class="clearfix">
                            @foreach($galleries as $gallery)
                                <li><a href="{{'/portfolio'}}"><img src="{{$gallery->image}}" alt=""></a></li>
                            @endforeach
                        </ul>
                    </div> <!-- /.sidebar-gallery -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>
@endsection




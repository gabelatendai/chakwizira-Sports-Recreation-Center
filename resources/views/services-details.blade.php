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


    <div class="service-details section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="service-content">
                        <img src="{{$services->image}}" alt="" class="cover-img">
                        <h3 class="main-title">{{$services->title}}</h3>
                        <p>{{$services->description}}</p>
                    </div> <!-- /.service-content -->
                </div> <!-- /.col- -->

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 col-12 theme-sidebar-one">
                    <div class="sidebar-box service-categories">
                        <h5 class="title">Our Solutions</h5>
                        <ul>
                            <li><a href="#">Travel and Aviation</a></li>
                            <li class="active"><a href="#">Business Services</a></li>
                            <li><a href="#">Consumer Products</a></li>
                            <li><a href="#">Financial Services</a></li>
                            <li><a href="#">Software Research</a></li>
                            <li><a href="#">Quality Resourcing</a></li>
                        </ul>
                    </div> <!-- /.service-categories -->
                    <div class="sidebar-box sidebar-brochures">
                        <h5 class="title">Brochures</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download file. pdf</a></li>
                            <li><a href="#"><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i> Download file. ppt</a></li>
                        </ul>
                    </div> <!-- /.sidebar-brochures -->
                    <div class="sidebar-box sidebar-contact">
                        <h5 class="title">Contact Form</h5>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="Email">
                            <textarea placeholder="Message"></textarea>
                            <button class="theme-button-one">SUBMIT</button>
                        </form>
                    </div> <!-- /.sidebar-contact -->
                </div> <!-- /.theme-sidebar-one -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>


@endsection

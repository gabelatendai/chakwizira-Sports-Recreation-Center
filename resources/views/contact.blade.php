
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

                        <li>Contact Us </li>
                    </ul>
                </div>
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    @endforeach <!-- /.theme-inner-banner -->



    <div class="contact-us-page section-spacing">
        <div class="container">
            <div class="title">
                @foreach($settings as $setting)
                <h2>Get In Touch With Us </h2>
                <p> {{$setting->about}}</p>
            </div>
            <div class="address">
                <ul class="clearfix">
                    <li>
                        <i class="flaticon-map"></i>
                        <p>{{$setting->address}}</p>
                    </li>
                    <li>
                        <i class="flaticon-clock"></i>
                        <p>Mon - Sat 8.00 - 18.00 <br>Sunday CLOSED</p>
                    </li>
                    <li>
                        <i class="flaticon-phone-call"></i>
                        <p>{{$setting->pnumber}}<br>{{$setting->pnumber2}}</p>
                    </li>
                    <li>
                        <i class="flaticon-email"></i>
                        <p>{{$setting->email}}</p>
                    </li>
                </ul>
            </div>
            <form action="inc/sendemail.php" class="theme-form-one form-validation" autocomplete="off">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Name" name="name"></div>
                    <div class="col-lg-4 col-sm-6 col-12"><input type="email" placeholder="Email" name="email"></div>
                    <div class="col-lg-4 col-sm-6 col-12"><input type="text" placeholder="Phone" name="phone"></div>
                    <div class="col-lg-12 col-sm-6 col-12"><input type="text" placeholder="Subject" name="sub"></div>
                    <div class="col-12"><textarea placeholder="Enter Your Word..." name="message"></textarea></div>
                    <div class="col-12"><button class="theme-button-one">Send</button></div>
                </div>
            </form>
        </div> <!-- /.container -->
        <!--Contact Form Validation Markup -->
        <!-- Contact alert -->
        <div class="alert-wrapper" id="alert-success">
            <div id="success">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Your message was sent successfully.</p>
                </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
        <div class="alert-wrapper" id="alert-error">
            <div id="error">
                <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="wrapper">
                    <p>Sorry!Something Went Wrong.</p>
                </div>
            </div>
        </div> <!-- End of .alert_wrapper -->
    </div> <!-- /.contact-us-page -->
@endforeach


    <!--
    =====================================================
        Google Map
    =====================================================
    -->
    <!-- Google Map -->
    <div class="google-map"><div class="map-canvas"></div></div>
@endsection

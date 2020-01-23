
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
                        <li><a href="#">Pages</a></li>
                        <li>.</li>
                        <li>Meat Our Team</li>
                    </ul>
                </div>
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    @endforeach
    <h1 class="text-center">Chakwizira Football Club Technical Team</h1>
    <div class="latest-project section-spacing">
        <div class="clearfix">
            <div class="row">
                @foreach($techteam as $tech)
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="single-block">
                            <img src="{{$tech->image}}" height="200px" width="60px" alt="">
                            <div class="overlay">
                                <div>
                                    <h6><a href="#">{{$tech->name}}</a></h6>
                                    <span>{{$tech->role}}</span>
                                </div>
                            </div>
                            <div>
                                <h6><a href="#">{{$tech->name}}</a></h6>
                                <span>{{$tech->role}}</span>
                            </div><!-- /.overlay -->
                        </div> <!-- /.single-block -->
                    </div> <!-- /.col- -->
                @endforeach
            </div> <!-- /.row -->
        </div>
<br>
    <h1 class="text-center">Chakwizira Football Club Players</h1>
    <div class="latest-project section-spacing">
        <div class="clearfix">
            <div class="row">
                @foreach($players as $team)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="single-block">
                        <img src="{{$team->image}}" alt="">
                        <div class="overlay">
                            <div>
                                <h6><a href="#">{{$team->name}}</a></h6>
                                <span>{{$team->position}}</span>
                            </div>
                        </div>
                        <div>
                            <h6><a href="#">{{$team->name}}</a></h6>
                            <span>{{$team->position}}</span>
                        </div><!-- /.overlay -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
                @endforeach
                    <div class="text-center">
                        {{$players->links()}}
                    </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.latest-project -->

@endsection
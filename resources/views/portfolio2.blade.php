
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

                        <li>Portfolio</li>
                    </ul>
                </div>
            </div> <!-- /.overlay -->
        </div> <!-- /.theme-inner-banner -->
    @endforeach <!-- /.theme-inner-banner -->




    <!--
    =====================================================
        Our Portfolio
    =====================================================
    -->

    <div class="our-portfolio portfolio-three-column section-spacing">
        <div class="container">
            <div class="row">
                @foreach($piks as $pik)
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="single-block">
                        <img src="{{$pik->image}}" alt="">
                        <div class="overlay">
                            <div>
                                <a href="{{asset($pik->image)}}" data-fancybox="gallery" data-caption="Caption for single image" class="fancybox"></a>
                            </div>
                        </div> <!-- /.overlay -->
                    </div> <!-- /.single-block -->
                </div> <!-- /.col- -->
               @endforeach
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div class="text-center">
            {{$piks->links()}}
        </div>
    </div>

@endsection

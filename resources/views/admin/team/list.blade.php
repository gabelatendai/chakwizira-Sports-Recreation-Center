@extends('layouts.sidebar')

@section('content')


    <h3>Photo Gallery</h3>


        <div data-toggle="gridalicious" data-gridalicious-width="280" data-gridalicious-gutter="0"
         class="hide2">
            @foreach($teams as $image)
        <div class="widget widget-heading-simple widget-body-white widget-pinterest">
            <div class="widget-body padding-none">
                <a href="{{asset($image->image)}}" class="thumb" data-gallery>
                    <img src="{{$image->image}}" alt="photo" />
                </a>
                <div class="description col-md-12">
                    <h5 class="text-uppercase">{{$image->name}}</h5>
                    <p>{{$image->position}}</p>
                    <a href="{{ route('team.edit',['id'=> $image->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                        Edit</a>
                </div>
            </div>
        </div>
            @endforeach
    </div>
    <!-- Blueimp Gallery -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev no-ajaxify">‹</a>
        <a class="next no-ajaxify">›</a>
        <a class="close no-ajaxify">×</a>
        <a class="play-pause no-ajaxify"></a>
        <ol class="indicator"></ol>
    </div>

@endsection

@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Edit Image</li>
        </ul>

    </div>
    <div class="main-content">

        <h2 align="center">Edit  {{ $banners->headline}}</h2>


        <form action="{{route('banners.update',['id' => $banners->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-body pal">
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Slide Main Headline</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input id="name" type="text" value="{{ $banners->headline}}"  name="headline" class="form-control"  required /></div>
                    </div></div>


                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                        </div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Bio Information</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea id="" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{$banners->description}}</textarea></div>
                            </div></div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save Banner</button>
                            </div>
                        </div></div>
            </form></div>
    </div>


@endsection

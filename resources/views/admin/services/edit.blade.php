@extends('layouts.sidebar')

@section('content')

    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Services</li>
        </ul>

    </div>
    <div class="main-content">
        <h2 align="center">Edit  {{ $services->title}}</h2>


        <form action="{{route('services.update',['id' => $services->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}


                    <div class="form-group">
                        <label for="inputName"  class=" control-label pull-left">Title</label>
                                <input id="name" type="text" name="title" value="{{ $services->title}}" class="form-control"   /></div>

                        <div class="form-group">
                            <label for="inputName"  class=" control-label pull-left">Image</label>

                                    <input id="name" type="file" name="image" placeholder="" class="form-control"   /></div>

                            <div class="form-group">
                                <label for="inputName"  class=" control-label pull-left">Description</label>

                                        <textarea id="name" type="text" name="description" cols="30" rows="10" class="form-control"  >
                                            {{ $services->description}}</textarea></div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                    <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                                </div>
                            </div>
            </form></div>
    </div>


@endsection

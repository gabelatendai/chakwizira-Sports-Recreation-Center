@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">News and Updates</li>
        </ul>

    </div>
    <div class="main-content">

        <h2 align="center">Edit  {{ $news->title}}</h2>


        <form action="{{route('news.update',['id' => $news->id])}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-body pal">
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Article Title</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input id="name" type="text" value="{{ $news->title}}"  name="title" class="form-control"  required /></div>
                    </div></div>
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Category</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <select name="category" class="select2_single form-control col-md-9" tabindex="-1">
                                <option value="">...Select.....</option>
                                <option value="Games">Games</option>
                                <option value="About">About The Team</option>
                                <option value="Press">Press Release</option>
                                <option value="Soccer">Soccer</option>
                                <option value="Netball">Netball</option>
                                <option value="Computers">Computer Science </option>
                                <option value="Uncategorized">Uncategorized</option>
                            </select>
                        </div></div></div>
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                        </div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Article Body</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea id="summernote" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{$news->msg}}</textarea></div>
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

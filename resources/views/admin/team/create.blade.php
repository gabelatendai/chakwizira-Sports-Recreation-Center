@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Players</li>
        </ul>

    </div>
    <div class="main-content">
                <div class="panel-heading text-center">Add Player</div>

                <div class="panel-body">
<form action="{{route('team.save')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}

    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Player Name</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="text" value="{{ old('name')}}"  name="name" class="form-control"  required /></div>
            </div></div></div>
    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Date Of Birth</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="date" value="{{ old('dob')}}"  name="dob" class="form-control"  required /></div>
            </div></div></div>
    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">ID Number</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="text" value="{{ old('IdNum')}}"  name="IdNum" class="form-control"  required /></div>
            </div></div></div>

    <div class="form-group">
        <label for="inputName"  class="col-md-3 control-label pull-left">Position</label>
        <div class="col-md-9"><div class="input-icon right">
                <select name="position" class="select2_single form-control col-md-9" tabindex="-1">
                    <option value="">...Select.....</option>
                    <option value="forward">Forward</option>
                    <option value="defender">Defender</option>
                    <option value="midfieldr">Midfielder</option>
                </select>
            </div></div></div>
    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Player Information</label>
            <div class="col-md-9"><div class="input-icon right">
                    <textarea id="name" type="text"   name="information" class="form-control"  required >{{ old('information')}}</textarea></div>
            </div></div></div>
        <div class="form-body pal">
            <div class="form-group">
                <label for="inputName"  class="col-md-3 control-label pull-left">Phone Number</label>
                <div class="col-md-9"><div class="input-icon right">
                        <input id="name" type="text" name="pnumber" value="{{ old('pnumber')}}" class="form-control"   /></div>
                </div></div>
<div class="form-body pal">
 <div class="form-group">
 <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
<div class="col-md-9"><div class="input-icon right">
<input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
 </div></div>

<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
 </div>
 </div></div>
</form></div>
                    </div>
@endsection

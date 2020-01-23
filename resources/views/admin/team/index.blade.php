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
    <div class="col-md-6 panel panel-default">
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
                        </div></div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <input id="name" type="file" name="image" placeholder="" class="form-control"    /></div>
                            </div></div>
                    </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                            </div>
                        </div>
            </form></div>
    </div>

    <div class="panel panel-default col-md-6">
                <div class="panel-heading">Our Team</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th> Name</th>
                         <th>Position</th>
                         <th>Phone Number</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($teams as $team )
                      <tbody>
                      <tr> <td> <img src="{{ $team ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $team->name }}</td>
                                <td> {{  $team->position }}</td>
                          <td> {{  $team->pnumber }}</td>
                                 <td> <a href="{{ route('team.edit',['id'=> $team->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('team.destroy',['id'=> $team->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                    <div class="text-center">
                        {{$teams->links()}}
                    </div>
                </div>
            </div>

@endsection

@extends('layouts.sidebar')

@section('content')


    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Technical Team</li>
        </ul>

    </div>
    <div class="main-content">
        <a href="{{'/tech-team/create'}}" class="pull-right btn btn-info btn-xs"> <h3>Add Team Member </h3></a>
    <div class="panel panel-default col-md-12">
                <div class="panel-heading">Our Team</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th> Name</th>
                         <th>role</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($techteams as $team )
                      <tbody>
                      <tr> <td> <img src="{{ $team ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $team->name }}</td>
                                <td> {{  $team->role }}</td>
                                 <td> <a href="{{ route('techteam.edit',['id'=> $team->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('techteam.destroy',['id'=> $team->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                </div>
            </div>

@endsection

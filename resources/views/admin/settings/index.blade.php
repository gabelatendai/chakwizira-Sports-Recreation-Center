@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Web Settings</li>
        </ul>

    </div>
    <div class="main-content">
    <div class="panel panel-default">
                <div class="panel-heading">Company Information</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Logo</th>
                         <th>Name</th>
                         <th> Phone Number</th>
                         <th>Email</th>
                         <th>Mission</th>
                         <th>Vision</th>
                         <th>Description</th>
                         <th> Bio Information</th>

                          <th>Edit</th>
                     </tr>
                     </thead>

                  @foreach ($settings as $setting )
                      <tbody>
                      <tr><td><img src=" {{ $setting ->image }}" width="100" height="80" class="img-thumbnail"></td>
                          <td> {{ $setting ->name }}</td>
                          <td> {{  $setting->pnumber }}</td>
                          <td> {{  $setting->email }}</td>
                                <td> {{  $setting->mission }}</td>
                          <td> {{  $setting->vision }}</td>
                          <td> {{  $setting->description }}</td>
                          <td> {{  $setting->about }}</td>
                                 <td> <a href="{{ route('settings.edit',['id'=> $setting->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                </div>
            </div>

@endsection

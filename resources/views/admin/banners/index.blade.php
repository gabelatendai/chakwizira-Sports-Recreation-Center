@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Homepage Images</li>
        </ul>

    </div>
    <div class="main-content">
    <a href="{{'/banners/create'}}" class="pull-right btn btn-info btn-xs"> <h3>Add New Banner</h3></a>
    <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th> Slide Main Headline</th>
                         <th> Description</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($banners as $banner )
                      <tbody>
                      <tr> <td> <img src="{{ $banner ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $banner->headline }}</td>
                          <td> {{  $banner->description }}</td>

                                 <td> <a href="{{ route('banners.edit',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('banners.destroy',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach

                      </tr>
                      </tbody></table>
                         <div class="text-center">
                             {{$banners->links()}}
                         </div>
                </div>
    </div></div>

@endsection

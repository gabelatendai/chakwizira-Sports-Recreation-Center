@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Static Banners </li>
        </ul>

    </div>
    <div class="main-content">
    <div class="panel panel-default">
                <div class="panel-heading">Static Banner</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Page Name</th>
                         <th>Image</th>
                         <th> Slide Main Headline</th>
                         <th>Editing</th>
                         <!-- <th>Deleting</th>-->
                     </tr>
                     </thead>

                  @foreach ($statics as $static )
                      <tbody>
                      <tr>
                          <td> {{  $static->pagename }}</td>
                          <td><img src="{{$static->image }}" alt="{{  $static->name }}" width="40px" height="40px>"></td>
                          <td> {{  $static->headline }}</td>

                                 <td> <a href="{{ route('statics.edit',['id'=> $static->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                      <!--    <td> <a href="{{ route('statics.destroy',['id'=> $static->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>
-->
                          @endforeach

                      </tr>
                      </tbody></table>
                         <div class="text-center">
                             {{$statics->links()}}
                         </div>
                </div>
    </div></div>

@endsection

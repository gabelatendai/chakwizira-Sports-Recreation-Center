@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">Images</li>
        </ul>

    </div>
    <div class="main-content">
    <div class="col-md-6">
        <div class="panel panel-default">
        <div class="panel-heading text-center">Add Picture</div>

        <div class="panel-body">
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}

                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Category</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <select name="caption" class="select2_single form-control col-md-9" tabindex="-1">
                                <option value="">...Select.....</option>
                                <option value="Players">Our Team</option>
                                <option value="Supporters">Supporters</option>
                                <option value="Techteam">Technical Team</option>

                            </select>
                        </div></div></div>
                <div class="form-body pal">
                    <div class="form-group">
                        <label for="inputName"  class="col-md-3 control-label pull-left">Image</label>
                        <div class="col-md-9"><div class="input-icon right">
                                <input id="name" type="file" name="image" placeholder="" class="form-control"  required  /></div>
                        </div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Description</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea id="" type="text" name="description" cols="30" rows="5" class="form-control"  required ></textarea></div>
                            </div></div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save</button>
                            </div>
                        </div></div>
            </form></div>
    </div>  </div></div>

    <script src="{{asset('js/summernote.js')}}"></script>
    <script>

	    $(document).ready(function () {
		    $('#summernote').summernote();
	    });
    </script>


    <script type="text/javascript">
	    $("[rel=tooltip]").tooltip();
	    $(function() {
		    $('.demo-cancel-click').click(function(){return false;});
	    });
    </script>

<div class="col-md-6">
    <div class="panel panel-default">
                <div class="panel-heading">Picture</div>

                <div class="panel-body">
                 <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                     <thead>
                     <tr>
                         <th>Image</th>
                         <th> Category</th>
                         <th>Description</th>
                         <th>Editing</th>
                          <th>Deleting</th>
                     </tr>
                     </thead>

                  @foreach ($galleries as $gallery )
                      <tbody>
                      <tr> <td> <img src="{{ $gallery ->image }}" width="40px" height="40px>"></td>
                          <td> {{  $gallery->caption }}</td>
                                <td> {{  $gallery->description }}</td>
                                 <td> <a href="{{ route('gallery.edit',['id'=> $gallery->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                 Edit</a> </td>
                          <td> <a href="{{ route('gallery.destroy',['id'=> $gallery->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                  Delete</a> </td>

                          @endforeach
                      </tr>
                      </tbody></table>
                    <div class="text-center">
                        {{$galleries->links()}}
                    </div>
                </div>
            </div>
</div>
@endsection

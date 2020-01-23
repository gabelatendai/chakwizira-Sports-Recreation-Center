@extends('layouts.sidebar')

@section('content')
    <div class="header">

        <h1 class="page-title">Admin Dashboard</h1>
        <ul class="breadcrumb">
            <li><a href="{{'/admin/index'}}">Home</a> </li>
            <li class="active">News And Updates</li>
        </ul>

    </div>
    <div class="main-content">
    <div class="col-md-6">
        <div class="panel panel-default">
    <div class="panel-heading text-center">Create New Article</div>

    <div class="panel-body">
        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}

            <div class="form-body pal">
                <div class="form-group">
                    <label for="inputName"  class="col-md-3 control-label pull-left">Article Title</label>
                    <div class="col-md-9"><div class="input-icon right">
                            <input id="name" type="text" value="{{ old('title')}}"  name="title" class="form-control"  required /></div>
                    </div></div></div>
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
                                <input id="name" type="file" name="image" placeholder="" class="form-control"  required  /></div>
                        </div></div></div>
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="inputName"  class="col-md-3 control-label pull-left">Article Body</label>
                            <div class="col-md-9"><div class="input-icon right">
                                    <textarea  type="text" name="description" cols="30" rows="10" class="form-control"  required ></textarea></div>
                            </div></div></div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
                                <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save Article</button>
                            </div>
                        </div>
        </form></div>
    </div>
</div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">Manage Articles</div>

            <div class="panel-body">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th> Title</th>
                        <th>Category</th>
                        <th>Editing</th>
                        <th>Deleting</th>
                    </tr>
                    </thead>

                    @foreach ($news as $banner )
                        <tbody>
                        <tr> <td> <img src="{{ $banner ->image }}" width="40px" height="40px>"></td>
                            <td> {{  $banner->title }}</td>
                            <td> {{  $banner->category }}</td>

                            <td> <a href="{{ route('news.edit',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-success">
                                    Edit</a> </td>
                            <td> <a href="{{ route('news.destroy',['id'=> $banner->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                    Delete</a> </td>

                            @endforeach
                        </tr>
                        </tbody></table>
                <div class="text-center">
                    {{$news->links()}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/summernote.js')}}"></script>
    <script>

	    $(document).ready(function () {
		    $('#summernote').summernote();
	    });
    </script>

    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
	    $("[rel=tooltip]").tooltip();
	    $(function() {
		    $('.demo-cancel-click').click(function(){return false;});
	    });
    </script>
@endsection

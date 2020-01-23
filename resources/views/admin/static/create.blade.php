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
                <div class="panel-heading text-center">Add Banner</div>

                <div class="panel-body">
<form action="{{route('statics.save')}}" method="post" enctype="multipart/form-data">
 {{ csrf_field()}}

    <div class="form-body pal">
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Slide Main Headline</label>
            <div class="col-md-9"><div class="input-icon right">
                    <input id="name" type="text" value="{{ old('headline')}}" maxlength="50" name="headline" class="form-control"  required /></div>
            </div></div>
        <div class="form-group">
            <label for="inputName"  class="col-md-3 control-label pull-left">Page Name</label>
            <div class="col-md-9"><div class="input-icon right">
                    <select name="pagename" class="select2_single form-control col-md-9" tabindex="-1" required>
                        <option value="">...Select.....</option>
                        <option value="About">About</option>
                        <option value="Contact">Contacts</option>
                        <option value="Services">Services</option>
                        <option value="Blog">Blog</option>
                        <option value="Team">Team</option>
                        <option value="Portfolio">Portfolio</option>
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
            <label for="inputName"  class="col-md-3 control-label pull-left">Bio Information</label>
            <div class="col-md-9"><div class="input-icon right">
                    <textarea id="" type="text" name="description" cols="30" rows="10" class="form-control"  required >{{ old('description')}}</textarea></div>
            </div></div>

<div class="ln_solid"></div>
 <div class="form-group">
 <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3 text-center">
 <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-plus-square"></i> Save Banner</button>
 </div>
 </div></div>
</form></div>
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

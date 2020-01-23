@extends('layouts.sidebar')

@section('content')
    <div class="panel panel-default">

        <div class=" panel panel-heading ">
            Users
        </div>
        <div class=" panel panel-body ">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-hoover table-striped table-bordered" id="example">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </tr>
                </thead>
                @if($users->count()>0)
                    @foreach ($users as $user )
                        <tbody>
                        <tr> <td> {{  $user->id }}</td>
                            <td> {{  $user->email }}</td>
                            <td> {{  $user->name }}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('admin.remove',['id'=> $user->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                        Remove Permissions</a>
                                @else
                                    <a href="{{ route('admin.permissions',['id'=> $user->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">
                                        Make Admin</a>

                                @endif
                            </td>


                            <td>  <a href="{{ route('admin.delete',['id'=> $user->id]) }}" style="margin-bottom:5px;" class="btn btn-xs btn-danger">

                                    Delete</a>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <th colspan="6" class="text-center">No Published  Posts </th>

                            </tr>
                        @endif

                        </tbody></table>



        </div>
    </div>
    </div>
    </body>
    </html>

@endsection
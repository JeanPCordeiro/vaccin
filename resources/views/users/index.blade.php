@extends('adminlte::page')

@section('title', 'List Users')

@section('content_header')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">List Users</h3>
                    <div class="card-tools">
                        @if (Auth::user()->level == 3)
                        <a class="btn btn-success" href="{{ route('users.create') }}">Create New User</a>
                        @endif
                    </div>
                </div>

                <div class="card-body">
                    <table id="mytable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Site</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->level }}</td>
                                <td>{{ $user->site }}</td>
                                <td align="center">
                                    @if (Auth::user()->level == 3)
                                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-primary btn-xs"
                                            href="{{ route('users.edit',$user->id) }}">Edit</a>
                                            <a class="btn btn-info btn-xs"
                                            href="{{ route('users.show',$user->id) }}">Change Password</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Delete this User ?')">Delete</button>
                                    </form>
                                    @elseif (Auth::user()->id == $user->id)
                                    <a class="btn btn-primary btn-xs"
                                            href="{{ route('users.edit',$user->id) }}">Change Password</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@stop

@section('css')

@stop

@section('js')

<script>
$(function() {
    $("#mytable").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});
$(".confirmdelete").on("submit", function(){
        return !confirm("Please, select cancel to delete this item");
    });
</script>


@stop
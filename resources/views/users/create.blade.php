@extends('adminlte::page')

@section('title', 'Add New User')

@section('content_header')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create User</h3>
                    <div class="card-tools">
                        <a class="btn btn-success" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                    <strong>Email:</strong>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <strong>Password:</strong>
                                    <input type="password" name="password" class="form-control" placeholder="">

                                    <strong>Level:</strong><BR>
                                    <select name="level">
                                        <option value="1">Reader</option>
                                        <option value="2">Writer</option>
                                        <option value="3">Admin</option>
                                    </select>
                                    <BR>

                                    <strong>Site:</strong><BR>
                                    <select name="site">
                                        <option value="%">ALL</option>
                                        @foreach ($sites as $site)
                                        <option value="{{ $site->site }}">{{ $site->site }}</option>
                                        @endforeach
                                    </select>
                                    <BR>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('content')

@endsection

@stop

@section('css')

@stop

@section('js')

@stop
@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-sm-12 text-center">
            <h1>Create Users</h1>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 col-sm-offset-2">
            {!! Form::model($user,['method' => 'PATCH', 'action'=>['AdminUsersController@update',$user->id], 'files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Username:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id',$roles ,null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active',array(1=>'Active',0=>'Not active') ,null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Status:') !!}
                {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-sm-4">
                {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::model($user,['method' => 'DELETE', 'action'=>['AdminUsersController@destroy',$user->id]]) !!}
                    <div class="form-group col-sm-offset-5 col-sm-2">
                        {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
                    </div>
            {!! Form::close() !!}
        </div>

        <div class="col-sm-2">
            <img src="{{$user->photo ? URL::asset('/images/'.$user->photo->file) : 'http://via.placeholder.com/250x350'}}" class="img-responsive img-rounded"  />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            @include('includes.form_errors')
        </div>
    </div>


@stop
@include('layouts.app')
@extends('CreateApt')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" > Create New Apartment</div>
                    <div class="panel-body">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'apartment']) !!}
    <div class="form-group">
        {!! Form::label('apt_floornumber', 'Apartment Floor Number:',['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
        {!! Form::text('apt_floornumber',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
    </div>
    </div>
        </br> </br>
    <div class="form-group">
        {!! Form::label('apt_number', 'Apartment Number:',['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
        {!! Form::text('apt_number',null,['class' => 'col-md-4 form-control','required' => 'required']) !!}
    </div>
    </div>
        </br> </br>
    <div class="form-group">
        {!! Form::label('apt_comments', 'Apartment Comments:',['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-4">
        {!! Form::text('apt_comments',null,['class'=>'col-md-4 form-control']) !!}
    </div>
    </div>
        </br> </br>
    <div class="form-group">
        {!!Form::label('cntr_id', 'Center Name:',['class' => 'col-md-4 control-label']) !!}
        {{ Form::select('cntr_id', ['Omaha', 'Other']) }}
    </div>
        </br> </br>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
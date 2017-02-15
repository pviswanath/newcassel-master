{{--@include('common.nav')--}}
@include('layouts.app')
@extends('CreateRes')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" > Create New Resident</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>

                                    @foreach ($errors-> all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        @endif

                        {!! Form::open(['url' => 'resident']) !!}
                        <div class="form-group ">
                            {!! Form::label('res_pccid', '*PCCID:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                            {!! Form::text('res_pccid',null,['class' => 'col-md-2 form-control','required' => 'required']) !!}


                                </div>
                        </div>
                        </br> </br>
                            <div class="form-group ">
                                {!! Form::label('apt_id', '*APT No:',['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                    {!! Form::text('apt_id',null,['class' => 'col-md-2 form-control','required' => 'required']) !!}


                                </div>
                            </div>
                            </br> </br>


                        <div class="form-group">
                                {!! Form::label('res_fname', '*First Name:',['class' => 'col-md-4 control-label']) !!}
                                <div class="col-md-4">
                                {!! Form::text('res_fname',null,['class'=>'col-md-2 form-control','required' => 'required']) !!}

                               {{-- @if ($errors->has('ResidentFirstName'))
                                    <span class="help-block">
                <strong>{{ $errors->first('ResidentFirstName') }}</strong>
            </span>
                                @endif--}}
                            </div>
                        </div>

</br></br>
                        <div class="form-group">
                            {!! Form::label('res_mname', 'Middle Name:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                            {!! Form::text('res_mname',null,['class'=>'col-md-2 form-control']) !!}

                            </div>
                        </div>
                    </br></br>
                    <div class="form-group">
                        {!! Form::label('res_lname', '*Last Name:',['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('res_lname',null,['class'=>'col-md-2 form-control','required' => 'required']) !!}

                           {{-- @if ($errors->has('ResidentLastName'))
                                <span class="help-block">
                <strong>{{ $errors->first('ResidentLastName') }}</strong>
            </span>
                            @endif--}}
                        </div>
                    </div>

</br></br>
                        <div class="form-group">
                            {!! Form::Label('res_gender', '*Gender:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                            {{ Form::select('res_gender', [
                                  ''=>'',
                                'Female' => 'Female',
                                'Male' => 'Male'], old('res_gender'), ['class' => ' col-md-2 form-control','required' => 'required']) }}
                        </div>
                            </div>
                    </br></br>

                        <div class="form-group ">
                            {!! Form::label('res_phone', 'Phone:',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                            {!! Form::text('res_phone',null,['class'=>'col-md-2 form-control']) !!}
                             {{--   @if ($errors->has('res_phone'))
                                    <span class="help-block">
                <strong>{{ $errors->first('res_phone') }}</strong>
            </span>
                                @endif--}}
                        </div>
                            </div>
                    </br></br>

                    {{--<div class="form-group ">
                        {!! Form::label('res_cellphone', 'Cellphone:',['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('res_cellphone',null,['class'=>'col-md-2 form-control']) !!}
                           --}}{{-- @if ($errors->has('res_phone'))
                                <span class="help-block">
                <strong>{{ $errors->first('res_cellphone') }}</strong>
            </span>
                            @endif--}}{{--
                        </div>
                    </div>--}}
                    {{--</br></br>--}}
                    <div class="form-group ">
                        {!! Form::label('res_email', 'Email:',['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                            {!! Form::text('res_email',null,['class'=>'col-md-2 form-control']) !!}
                         {{--   @if ($errors->has('res_email'))
                                <span class="help-block">
                <strong>{{ $errors->first('res_email') }}</strong>
            </span>
                            @endif--}}
                        </div>
                    </div>
                    </br></br>
                    <div class="form-group ">
                        {!! Form::label('res_comment', 'Comment:',['class' => 'col-md-4 control-label']) !!}
                        <div class="col-md-4">
                           {!! Form::text('res_comment',null,['class'=>'col-md-2 form-control']) !!}
                            {{--  @if ($errors->has('res_comment'))
                                   <span class="help-block">
                   <strong>{{ $errors->first('res_comment') }}</strong>
               </span>
                               @endif--}}
                        </div>
                    </div>

                    </br></br>

                        <div class="form-group ">
                            {!! Form::Label('res_status', '*Status',['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-4">
                            {!! Form::select('res_status', [
                                         ''=>'',
                                        'Inactive' => 'Inactive',
                                        'Active' => 'Active'], old('res_status'), ['class' => '  form-control','required' => 'required']) !!}
                        </div>
                      </div>
                 </br>  </br>
                        <div class="form-group">
                            {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
                            {{--{!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-success']) !!}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop


@extends('app')
@section('content')
    <h1>Update Mutual Fund</h1>
    {!! Form::model($fund,['method' => 'PATCH','route'=>['funds.update',$fund->id]]) !!}
    <div class="form-group">
        {!! Form::label('fund_name', 'Fund Name:') !!}
        {!! Form::text('fund_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nav', 'NAV:') !!}
        {!! Form::text('nav',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_date', 'Acquired Date:') !!}
        {!! Form::text('acquired_date',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop

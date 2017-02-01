@extends('app')

@section('content')
    <h1>Mutual Fund</h1>
    <a href="{{url('/funds/create')}}" class="btn btn-success">Create Mutual Fund</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Fund Name</th>
            <th>Description</th>
            <th>NAV</th>
            <th>Acquired Date</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($funds as $fund)
            <tr>
                <td>{{ $fund->customer->cust_number }}</td>
                <td>{{ $fund->customer->name }}</td>
                <td>{{ $fund->fund_name }}</td>
                <td>{{ $fund->description }}</td>
                <td>{{ $fund->nav }}</td>
                <td>{{ $fund->acquired_date }}</td>
                <td><a href="{{url('funds',$fund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('funds.edit',$fund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['funds.destroy', $fund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection

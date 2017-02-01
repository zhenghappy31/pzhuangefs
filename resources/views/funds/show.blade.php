@extends('app')
@section('content')
    <h1>Mutual Fund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutual Fund Name</td>
                <td><?php echo ($fund['fund_name']); ?></td>
            </tr>
            <tr>
                <td>Investment Description</td>
                <td><?php echo ($fund['description']); ?></td>
            </tr>
            <tr>
                <td>Net Asset Value</td>
                <td><?php echo ($fund['nav']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date </td>
                <td><?php echo ($fund['acquired_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

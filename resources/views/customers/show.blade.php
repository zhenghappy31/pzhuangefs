@extends('app')
@section('content')
    <h1>Customer </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']); ?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>


            </tbody>
      </table>
    </div>
	<?php
	 $stotal = 0;
	 $itotal = 0;
     $ivalue=0;
	 ?>
	 
	<h2>Stocks </h2>
	<div>
	       <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
           
            <th>Symbol</th>
            <th>Stock Name</th>
            <th>No. of Shares</th>
            <th>Purchase Price</th>
            <th>Purchase Date</th>
			<th>Original Value</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customer->stocks as $stock)
            <tr>
               
                <td>{{ $stock->symbol }}</td>
                <td>{{ $stock->name }}</td>
                <td>{{ $stock->shares }}</td>
                <td>{{ $stock->purchase_price }}</td>
                <td>{{ $stock->purchased }}</td>
				<td>{{$stock->shares * $stock->purchase_price}}
				 <?php $stotal= $stotal+ ($stock->shares *  $stock->purchase_price)?>
				
                   
        @endforeach

        </tbody>

    </table>
	<h4><?php echo 'Total of Initial Stock Portfolio is  $', number_format($stotal,2);?> </h4>
	
</div>
	<h2>Investments </h2>
<div>
<table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
		   
            <th>Category</th>
            <th>Description</th>
            <th>Acquired Value</th>
            <th>Acquired Date</th>
            <th>Recent Value</th>
            <th>Recent Date</th>
           
        </tr>
        </thead>
        <tbody>
        @foreach ($customer->investments as $investment)
            <tr>
               
                <td>{{ $investment->category }}</td>
                <td>{{ $investment->description }}</td>
                <td>{{ $investment->acquired_value }}</td>
                <td>{{ $investment->acquired_date }}</td>
                <td>{{ $investment->recent_value }}</td>
				<td>{{ $investment->recent_date }}</td>
				  <?php $itotal= $itotal + $investment->acquired_value?>
				  <?php $ivalue= $ivalue + $investment->recent_value?>

              
            </tr>
        @endforeach
        </tbody>
    </table>
	<h4><?php echo 'Total of Initial Investment Portfolio is  $', number_format($itotal,2);?> </h4>
	<br>
	<h3> Summary Of Portfolio</h3>
	 <h4>
                <?php echo 'Total of Initial Investment Portfolio $', number_format($itotal,2);?>
                <br>
				<br>
                <?php echo 'Total Current Investment Portfolio $',number_format($ivalue,2)?>
            </h4>

	</div>

@stop


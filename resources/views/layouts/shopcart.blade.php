@extends('layouts.app')

 @section('title')

    {{getSetting()}}
 @endsection

@section('content')
<style>
h2{
	margin-top: 50px;
	font-family: cursive;
	
}
img{
	width: 200px;
	height:100px;
}
	th{
		background:#798ca5;
		color:#FFF;
		padding: 20px;
		border:1px solid #ccc;
		text-align: center;
		width:200px;
		border-radius: 5px;
		font-family: cursive;
		font-size: 25px;
	}
	table,td{
		border:1px solid #ccc;
		padding: 10px;
		text-align: center;
		font-size: 19px;
		margin:50px auto;
		height: 75px;
		border-radius: 5px;
		font-family: cursive;

	}
	button{

	}
</style>
<div class="container">
	<div class="row">
	@if(Session::has('cart'))
			<h2 class="text-center">Shopping Cart</h2>
		<div style="margin-bottom: 500px">
			<table >
				<thead>
					<th>Image</th>
					<th>Name</th>
					<th>color</th>
					<th>Quantity</th>
					<th>Total Price</th>
					
				</thead>
		@foreach($products as $product)
				<tbody>
					<tr>
						<td><img src="{{url('/upload/product/'.$product['photo'])}}"></td>
						<td>{{$product['item']['name']}}</td>
						<td>{{$product['item']['color']}}</td>
						<td>{{$product['qty']}}</td>
						<td>{{$product['price']}} $</td>
						
					</tr>
				</tbody>
		@endforeach
				<tfoot>
					<tr>
					
						<td colspan="4" style="text-align: center;font-size: 25px">Total</td>
						<td>{{$totalPrice}} $</td>
					</tr>
				</tfoot>
			</table>
			<button class="btn btn-warning col-md-2 col-md-offset-8" style="padding: 15px;">
				Checkout
			</button>
			
		</div>


@else
<div style="margin-bottom: 500px">
	<h3 class="text-center">Shopping Cart</h3>
	<p style="text-align: center;">Your Shopping Cart Is Empty !</p>
</div>
@endif

		</div>
</div>
@endsection
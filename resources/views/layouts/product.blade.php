@extends('layouts.app')

@section('title')
Product
@endsection

@section('content')


<div class="product">
		<div class="container">
			<div class="product-image col-md-4">
				<img src="{{url('/upload/product/'.$products->photo)}}">
			</div>
			
			<div class="details">
				<h2>{{$products->name}}</h2>
				
				
				<p><span>Price        : </span> {{$products->price}} <span>$</span></p>
				<p><span>Color        : </span> {{$products->color}}</p>
				<p><span>Description  : </span>{{$products->description}}</p>
			
				<a href="{{url('add_to_cart/'.$products->id)}}">
				<button class="btn btn-warning center-block">Add To Cart</button>
				</a>
			</div>
		</div>
	</div>


@endsection
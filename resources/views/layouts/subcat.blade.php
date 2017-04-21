@extends('layouts.app')


@section('title')


@endsection

@section('content')

<div class="container">
	
	
	<h2>{{$category->name}}</h2>
	<div style="margin-bottom: 420px">
@foreach($category->subcategories as $subcat)
		
<a href="{{url('allcategories/'.$subcat->id)}}">

		<div class="subcategory col-md-3">
			{{$subcat->name}}
		</div>
	
</a>
	
@endforeach
	</div>
</div>

@endsection
@extends('layouts.app')

 @section('title')

    All Categories
 @endsection

@section('content')



<div class="container">
		<h2>All Categories</h2>
		<div class="rows col-xs-12">
		@foreach($categories as $category)
			<div class="category">

				<h4>{{$category->name}}</h4>
			<div class="content">
				<ul>
				@foreach($category->subcategories as $subcat)
					<a href="{{url('allcategories/'.$subcat->id)}}">
						<li>{{$subcat->name}}</li>
					</a>
				@endforeach
				</ul>
			</div>
				
			</div>
			@endforeach
		</div>
	</div>

			



@endsection
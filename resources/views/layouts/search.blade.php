@extends('layouts.app')

@section('title')

@endsection


@section('content')

<div class="container">
    <div style="margin-bottom: 420px">

@if($query = $subcategory)

@foreach($subcategory as $subcat)
<h1>{{$subcat->name}}</h1>

@foreach(App\Subcategory::find($subcat->id)->products as $product)
    <a href="{{url('/allcategories/'.$product->id.'/view')}}">
        <div class="card">
            <span>{{$product->price}}$</span>
            <img src="{{url('/upload/product/'.$product->photo)}}">
            <p>{{$product->description}}</p>
            <a href="{{url('add_to_cart/'.$product->id)}}">
                <button class="btn btn-warning">Add To Cart</button>
            </a>
        </div>
    </a>
    
    @endforeach
@endforeach



@endif

@if($query = $products)

    @foreach($products as $product)

        <a href="{{url('/allcategories/'.$product->id.'/view')}}">
            <div class="card">
                <span>{{$product->price}}$</span>
                <img src="{{url('/upload/product/'.$product->photo)}}">
                <p>{{$product->description}}</p>
                <a href="{{url('add_to_cart/'.$product->id)}}">
                    <button class="btn btn-warning">Add To Cart</button>
                </a>
            </div>
        </a>
    @endforeach
@endif


    </div>

</div

@endsection

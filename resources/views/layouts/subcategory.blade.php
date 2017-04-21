@extends('layouts.app')


@section('title')

{{$subcat->name}}

@endsection

@section('content')

<div class="container">
    <div style="margin-bottom: 420px">
    <h2>{{$subcat->name}}</h2>

@foreach($subcat->products as $product)
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
</div>

</div>

@endsection
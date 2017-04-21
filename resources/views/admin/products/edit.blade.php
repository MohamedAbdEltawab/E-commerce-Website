@extends('admin.layout.layout')

@section('title')

Edit Product
@endsection

@section('content')
 <section class="content-header">
      <h1 style="text-align: center;"> Edit Product </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/categories')}}">Categories Control</a></li>
        <li class="active"><a href="#">Subcategory</a></li>
        <li class="active"><a href="#">Edit Product</a></li>
        
      </ol>
    </section>

    <section class="content">
        <div class="row">
           <div class="col-xs-12">
         <div class="box">
              <div class="box-header">
                <h3 class="box-title">Product Name  : {{$product->name}}</h3>
              </div>
            <!-- /.box-header -->
              <div class="box-body">
          </div>
        </div>
       </div>
      </div>
   </section>


   <h3 style="text-align: center;">Edit Product</h3>

<form class="form-horizontal" role="form" method="post" action="{{url('adminpanel/categories/subcategory/'.$product->id.'/update')}}" enctype="multipart/form-data">
{{ csrf_field() }}

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}" required>
          </div>
      </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Description</label>
          <div class="col-md-6">
  
              <input id="name" type="text" class="form-control" name="description" value="{{ $product->description}}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Price</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="price" value="{{ $product->price }}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Amount</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="amount" value="{{ $product->amount }}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Color</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="color" value="{{ $product->color }}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo</label>
          <div class="col-md-6">
          {!! Form::file('photo', ['class' => 'form-control'])!!}
          @if(!empty($product->photo))
            <img src="{{url('/upload/product/'.$product->photo)}}" style="width: 100px; height: 100px">
          @endif
          </div>
        </div>

         <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Save  Product
                  </button>
              </div>
          </div>

</form>


@endsection
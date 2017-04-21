@extends('admin.layout.layout')

@section('title')

Edit Category
@endsection

@section('content')
 <section class="content-header">
      <h1 style="text-align: center;"> Edit Category </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/categories')}}">Categories Control</a></li>
        <li class="active"><a href="#">Subcategory</a></li>
        <li class="active"><a href="#">Edit Subcategory</a></li>
        
      </ol>
    </section>

    <section class="content">
        <div class="row">
           <div class="col-xs-12">
         <div class="box">
              <div class="box-header">
                <h3 class="box-title">Category Name  : {{$subcategory->name}}</h3>
              </div>
            <!-- /.box-header -->
              <div class="box-body">
          </div>
        </div>
       </div>
      </div>
   </section>


   <form class="form-horizontal" role="form" method="POST" action="{{url('/adminpanel/categories/'.$subcategory->id.'/change')}}">
    {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
              
                  <input id="name" type="text" class="form-control" name="name" 
                  value="{{$subcategory->name}}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
         <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-pencil">Edit Category</i>
                      
                  </button>
              </div>
          </div>

   </form>


@endsection
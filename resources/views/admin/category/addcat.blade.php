@extends('admin.layout.layout')

@section('title')

Add Category
@endsection


@section('content')
 <section class="content-header">
      <h1 style="text-align: center;"> Add Category </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/categories')}}">Categories Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/categories/create')}}">Add Category</a></li>
        
      </ol>
    </section>

    <section class="content">
      	<div class="row">
       		 <div class="col-xs-12">
     		 <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add New Category</h3>
	            </div>
            <!-- /.box-header -->
            	<div class="box-body">
    			</div>
    		</div>
   		 </div>
   		</div>
   </section>

   <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/categories') }}">
    {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
              
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
         <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Add Category
                  </button>
              </div>
          </div>

   </form>
   @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection
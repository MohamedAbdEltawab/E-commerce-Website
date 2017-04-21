@extends('admin.layout.layout')

@section('title')

Edit Slide Photos
@endsection

@section('content')

<style>
	form{
		margin-bottom: 20px;
	}
</style>
<section class="content-header" style="margin-bottom: 60px">
     
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active"><a href="#">Add Slide Photo</a></li>
        
      </ol>
</section>

@if(!empty($slide->photoone))
<form action="{{url('adminpanel/photoslide/'.$slide->id.'/updateone')}}" method="POST" enctype="multipart/form-data" style="display: block">

	{{ csrf_field() }}
	<div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo One</label>
        <div class="col-md-6">

          {!! Form::file('photoone', ['class' => 'form-control'])!!}
          <img src="{{url('/upload/slide/'.$slide->photoone)}}" style="width: 400px; height: 100px">
	    </div>
  	</div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <input type="submit" class="btn btn-primary" value="Edit  Slide Photos">
                      
        </div>
    </div>
</form>
@endif
@if(!empty($slide->phototwo))
<form action="{{url('adminpanel/photoslide/'.$slide->id.'/updatetwo')}}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo Two</label>
        <div class="col-md-6">
          {!! Form::file('phototwo', ['class' => 'form-control'])!!}
           
            <img src="{{url('/upload/slide/'.$slide->phototwo)}}" style="width: 400px; height: 100px">
          
        </div>
  </div>
  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                      Edit  Slide Photos
            </button>
        </div>
    </div>
</form>
@endif
@if(!empty($slide->photothree))
<form action="{{url('adminpanel/photoslide/'.$slide->id.'/updatethree')}}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo Three</label>
        <div class="col-md-6">
          {!! Form::file('photothree', ['class' => 'form-control'])!!}
          <img src="{{url('/upload/slide/'.$slide->photothree)}}" style="width: 400px; height: 100px">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                      Edit  Slide Photos
            </button>
        </div>
    </div>

</form>
@endif
@if(!empty($slide->photofour))
<form action="{{url('adminpanel/photoslide/'.$slide->id.'/updatefour')}}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
  <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo Four</label>
        <div class="col-md-6">
          {!! Form::file('photofour', ['class' => 'form-control'])!!}
          <img src="{{url('/upload/slide/'.$slide->photofour)}}" style="width: 400px; height: 100px">
        </div>
  </div>
  <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                      Edit  Slide Photos
            </button>
        </div>
    </div>
</form>

@endif

@endsection
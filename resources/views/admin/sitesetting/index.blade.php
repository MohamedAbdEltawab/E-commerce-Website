@extends('admin.layout.layout')

@section('title')

Edit Site Settings
@endsection

@section('content')
 <section class="content-header">
     
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active"><a href="#">Site Settings</a></li>
        
      </ol>
    </section>

    

<h2 style="text-align: center; margin-bottom: 50px">Edit Site Setting</h2>

<form class="form-horizontal" role="form" method="POST" action="{{url('adminpanel/sitesetting/update')}}">
    {{ csrf_field() }}

    @foreach($settings as $setting)

  <div class="form-group">
      <label for="name" class="col-md-4 control-label">{{$setting->settingname}}</label>

      <div class="col-md-4">
          <input id="name" type="text" class="form-control" name="{{$setting->settingname}}" value="{{$setting->value}}">
      </div>
  </div>
	@endforeach


     <div class="form-group">
          <div class="col-md-6 col-md-offset-4">
              <button type="submit" class="btn btn-primary" name="submit" value="">
              	Edit Settings
              </button>
          </div>
      </div>

   </form>


   @endsection
@extends('admin.layout.layout')

@section('title')

Edit User
@endsection


@section('content')
 <section class="content-header">
      <h1 style="text-align: center;"> Edit User </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/users')}}">Users Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/'.$user->id .'/edit')}}">Edit User</a></li>
        
      </ol>
    </section>
    

    <section class="content">
      	<div class="row">
       		 <div class="col-xs-12">
     		 <div class="box">
	            <div class="box-header">
	              <h2 class="box-title">Edit User :  {{$user->name}}</h2>
	            </div>
            
            	<div class="box-body">
    			</div>
    		</div>
   		 </div>
   		</div>
   </section>

   
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/users/'. $user->id.'/update' )}}"> 
  
    {{ csrf_field() }}
    

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">

            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label">Admin Role</label>

      <div class="col-md-6">
       <input type="number" class="form-control" name="admin_role" value="{{ $user->admin_role }}">
            
      </div>
    </div>



    <div class="form-group">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
    </div>
       

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>
    </div>
                    

   </form>
@endsection
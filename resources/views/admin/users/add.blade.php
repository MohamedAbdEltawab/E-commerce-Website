@extends('admin.layout.layout')

@section('title')

Add User
@endsection


@section('content')
 <section class="content-header">
      <h1 style="text-align: center;"> Add User </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/users')}}">Users Control</a></li>
        <li class="active"><a href="{{url('/adminpanel/users/create')}}">Add User</a></li>
        
      </ol>
    </section>

    <section class="content">
      	<div class="row">
       		 <div class="col-xs-12">
     		 <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add New User</h3>
	            </div>
            <!-- /.box-header -->
            	<div class="box-body">
    			</div>
    		</div>
   		 </div>
   		</div>
   </section>

   <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/users') }}">
   @include('admin.users.form')

   </form>


@endsection
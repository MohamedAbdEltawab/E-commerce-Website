@extends('admin.layout.layout')

@section('title')

Messages 
@endsection

@section('content')

		{!! Html::style('admin/data/css/jquery.dataTables.min.css')!!}
	    {!! Html::style('admin/data/css/dataTables.bootstrap.min.css')!!}




 <section class="content-header">
      <h1>
        All Messages From Contact Us
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-home"></i> Home</a></li>
        
        
        <li class="active"><a href="#">Messages</a></li>
        
      </ol>
    </section>

<div class="container">
  <div class="col-md-10 " style="margin-top: 30px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><h3></h3></div>
        <div class="panel-body">

          
          <table id="dataTable">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> View</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($messages as $message)
                <tr>

                  <td>{{$message->id}}</td>
                  <td>{{$message->name}}</td>
                  <td>{{$message->email}}</td>
                  <td>{{$message->message}}</td>
                  
                  
                  
                <td><a href=""><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href=""><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                 <td><a href=""><button class="btn btn-info">View</button></a></td>
                </tr>
              @endforeach
                </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>



@endsection


@section('footer')

{!! Html::script('admin/data/js/jquery.dataTables.min.js')!!}
{!! Html::script('admin/data/js/dataTables.bootstrap.min.js')!!}
<script type="text/javascript">
  $(document).ready(function(){
    $("#dataTable").DataTable({
      paging:true,
      "lengthMenu": [[3, 5, 10, 25, 50, -1], [3, 5, "ten", 25, 50, "All"]],
    });
  });
</script>


@endsection


 

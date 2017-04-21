@extends('admin.layout.layout')

@section('title')

{{$category->name}}
@endsection
@section('header')
 <!-- DataTables -->
 
 {!! Html::style('admin/data/css/jquery.dataTables.min.css')!!}
 {!! Html::style('admin/data/css/dataTables.bootstrap.min.css')!!}


@endsection

@section('content')

 <section class="content-header">
      <h1>
        All Subcategory
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/categories')}}">All Categories</a></li>
        <li class="active"><a href="#">Subcategory</a></li>
        
      </ol>
    </section>

     <div class="container">
  <div class="col-md-8 col-md-offset-1" style="margin-top: 30px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><h3>{{ucfirst($category->name)}}</h3></div>
        <div class="panel-body">

          
          <table id="dataTable">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> View</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($category->subcategories as $subcat)
                <tr>

                  <td>{{$subcat->id}}</td>
                  <td>{{$subcat->name}}</td>
                  
                  
                  <td>{{$subcat->created_at}}</td>
                  
                <td><a href="{{url('adminpanel/categories/'.$subcat->id.'/editing')}}"><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href="{{url('adminpanel/categories/'.$subcat->id.'/deleting')}}"><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                 <td><a href="{{url('adminpanel/categories/subcategory/'.$subcat->id.'/view')}}"><button class="btn btn-info">View</button></a></td>
                </tr>
              @endforeach
                </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>



          <h3 style="text-align: center;">Add Item</h3>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/adminpanel/categories/'.$category->id. '/store') }}">
    {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
              
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

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
                      Add  Subcategory
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


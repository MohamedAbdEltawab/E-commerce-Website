@extends('admin.layout.layout')

@section('title')

{{$subcat->name}}
@endsection
@section('header')
 <!-- DataTables -->
 
 {!! Html::style('admin/data/css/jquery.dataTables.min.css')!!}
 {!! Html::style('admin/data/css/dataTables.bootstrap.min.css')!!}


@endsection

@section('content')

 <section class="content-header">
      <h1>
        All Product
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/adminpanel/categories')}}">All Categories</a></li>
        <li><a href="#">Subcategory</a></li>
        <li class="active"><a href="#">Product</a></li>
        
      </ol>
    </section>

     <div class="container">
  <div class="col-md-10 " style="margin-top: 30px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><h3>{{ucfirst($subcat->name)}}</h3></div>
        <div class="panel-body">

          
          <table id="dataTable">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Amount</th>
                  <th>Color</th>
                  <th>Photo</th>
                  <th> Edit</th>
                  <th> Delete</th>
                 
                </tr>
                </thead>
                <tbody>
                 @foreach($subcat->products as $product)
                <tr>

                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->amount}}</td>
                  <td>{{$product->color}}</td>
                  <td>{{$product->photo}}</td>
                  
                  
                <td><a href="{{url('adminpanel/categories/subcategory/'.$product->id.'/edit')}}"><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href="{{url('adminpanel/categories/subcategory/'.$product->id.'/delete')}}"><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                
                </tr>
              @endforeach
                </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>


      <h3 style="text-align: center;">Add Product</h3>

  <form class="form-horizontal" role="form" method="POST" action="{{url('adminpanel/categories/subcategory/'.$subcat->id.'/store')}}" enctype="multipart/form-data">

  {{ csrf_field() }}

      <div class="form-group">
          <label for="name" class="col-md-4 control-label">Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
          </div>
      </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Description</label>
          <div class="col-md-6">
  
              <input id="name" type="text" class="form-control" name="description" value="{{ old('name') }}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Price</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="price" value="{{ old('name') }}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Amount</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="amount" value="{{ old('name') }}" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Color</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="color" value="{{ old('name') }}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo</label>
          <div class="col-md-6">
          {!! Form::file('photo', ['class' => 'form-control'])!!}
          
          </div>
        </div>
         <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                      Add  Product
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


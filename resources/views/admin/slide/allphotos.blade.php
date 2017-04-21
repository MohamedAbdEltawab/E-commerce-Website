@extends('admin.layout.layout')

@section('title')

Add Slide Photos
@endsection

@section('content')

<style>
  table{
    border:1px solid #ccc;
    margin-left:150px;
  }
  th{
    border:1px solid #ccc;
    padding: 15px; 
    background: #ddd
  }
  td{
    border:1px solid #ccc;
    padding: 15px;
  }
</style>



<section class="content-header" style="margin-bottom: 60px">
     
      <ol class="breadcrumb">
        <li><a href="{{url('/adminpanel/')}}"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active"><a href="#">Add Slide Photo</a></li>
        
      </ol>
</section>


<table>
  <tr>
    <thead>
      <th>Id</th>
      <th>Photo Name</th>
      <th>Image</th>
      <th>Edit</th>
    </thead>
  </tr>
@foreach($slides as $slide)
  <tr>
    <tbody>
  @if(!empty($slide->photoone))
      <td>{{$slide->id}}</td>
     
      <td>{{$slide->photoone}}</td>
      <td>
        <img src="{{url('upload/slide/'.$slide->photoone)}}" style="width:300px; height:100px">
      </td>
      <td><a href="{{url('adminpanel/photoslide/edit/'.$slide->id)}}"><button class="btn btn-info">Edit</button></a></td>
  @endif
  @if(!empty($slide->phototwo))
      <td>{{$slide->id}}</td>
      <td>{{$slide->phototwo}}</td>
      <td>
        <img src="{{url('upload/slide/'.$slide->phototwo)}}" style="width:300px; height:100px">
      </td>
      <td><a href="{{url('adminpanel/photoslide/edit/'.$slide->id)}}"><button class="btn btn-info">Edit</button></a></td>
  @endif
   @if(!empty($slide->photothree))
      <td>{{$slide->id}}</td>
      <td>{{$slide->photothree}}</td>
      <td>
        <img src="{{url('upload/slide/'.$slide->photothree)}}" style="width:300px; height:100px">
      </td>
      <td><a href="{{url('adminpanel/photoslide/edit/'.$slide->id)}}"><button class="btn btn-info">Edit</button></a></td>
  @endif
  @if(!empty($slide->photofour))
      <td>{{$slide->id}}</td>
      <td>{{$slide->photofour}}</td>
      <td>
        <img src="{{url('upload/slide/'.$slide->photofour)}}" style="width:300px; height:100px">
      </td>
      <td><a href="{{url('adminpanel/photoslide/edit/'.$slide->id)}}"><button class="btn btn-info">Edit</button></a></td>
  @endif
    </tbody>
  </tr>
@endforeach
</table>



@endsection
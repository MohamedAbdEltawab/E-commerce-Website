@extends('layouts.app')

@section('title')

   Contact Us
@endsection
@section('content')
<style type="text/css">
body{
    background: rgba(217, 237, 247, 0.4);
}
	.contactus {
		padding: 50px;
		height: 600px;

	}
	.contactus h1{
		margin-bottom: 50px;
		color: #232f3e;
	}

</style>
  <div class="contactus" id="contact">
  			<h1 class="text-center">Contact Us</h1>
        <form action="{{url('/message')}}" method="POST" >
         {{ csrf_field() }}
            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control" style="color:#FFF;background: rgba(3, 35, 76, 0.95); ">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" class="form-control" style="color:#FFF;background: rgba(3, 35, 76, 0.95);border-color:rgba(3, 35, 76, 0.95)">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" style="color:#FFF;background: rgba(3, 35, 76, 0.95);border-color:rgba(3, 35, 76, 0.95)"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-warning" type="submit" name="submit" value="Send"style="color:#FFF;background: rgba(3, 35, 76, 0.95);border-color:rgba(3, 35, 76, 0.95)">
            </div>
        </form>
        <div class="address">
            <div class="address">
                <h3>our address</h3>
                <p>{{getSetting('Address')}}</p>
                
            </div>
            <div class="call">
                <h3>Call Us</h3>
                <p>Tel    : {{getSetting('Telephone')}}</p>
                
            </div>
        </div>
    </div>

@endsection
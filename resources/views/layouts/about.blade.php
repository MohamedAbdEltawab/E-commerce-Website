@extends('layouts.app')

 @section('title')

    About
 @endsection

@section('content')

<style type="text/css">
	body{
		background:rgba(217, 237, 247, 0.4);
	}
	.us{
		margin-top:100px;
		margin-left: 100px;
		margin-bottom:300px;

	}
	.us h1{
		font-family: tahoma;
		margin-bottom: 30px;
	}
	.us p{
		font-family: tahoma;
    	font-size: 17px;
   		
    	line-height: 30px;
	}
</style>
<div class="container">
	<div class="us">
	            <div>
	                <h1 class="text-center">{{getsetting('About heading')}}</h1>
	            </div>
	            
	            <p class="text-center">{{getsetting('About Body')}}</p>
	</div>
</div>

@endsection
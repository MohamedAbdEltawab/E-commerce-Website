

<div class="top">
<a href="{{url('/')}}">
	<span><img src="{{url('website/image/logo.png')}}" ></span>
</a>
	<form action="{{url('query')}}" method="POST" class="form">
	{{ csrf_field() }}
		<div class="Search">
			<div class="input-group">
		
			  	<input type="text" class="form-control" name="q" placeholder="Search for..." required value="">
			   	<span class="input-group-btn">
		     		<button class="btn btn-danger" type="submit">Search</button>
			    </span>
	   
	 		</div>
		</div>
 	</form>
		
	<div class="user">
		<div class="account">
			@if (Auth::guest())

				<a href="{{ route('login') }}">Login</a><span> | </span>
				<a href="{{ route('register') }}">Sign In</a>

			 @endif
			
		</div>
	</div>
		<div class="cart">
		
			<i class="glyphicon glyphicon-shopping-cart"></i>
			<span class="counter">{{ Session::has('cart') ? Session::get('cart')->totalQuantity : '' }}
			<a href="{{url('product/shoppingcart')}}">	
			</span>
			Cart
			</a>
		</div>
	  			
</div>
			<!-- ====================== Start header ====================-->
	
			<!-- ====================== Start Navbar ====================-->
			
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
    
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      @if(!(Auth::guest()))
	       	<span class="username">
				 	<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} 
                        </a>

                        <ul class="dropdown-menu" role="menu" id="drop">
                            <li class="out">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
        		</span>
           @endif
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="{{url('/about')}}">About</a></li>
			
			
	        <li><a href="{{url('/contactus')}}">Contact Us</a></li>


	        <li class="dropdown">
	          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          

	    	<li><a href="{{url('/allcategories')}}">All Categories</a></li>
	    	<li role="separator" class="divider"></li>
            @foreach(App\Category::all() as $category)
                <li><a href="{{url('/subcategory/'.$category->id.'/view')}}">{{$category->name}}</a></li>
            @endforeach
  
	          </ul>
	        </li>
	        @if(! Auth::guest() && Auth::user()->admin_role > 0)
	        <li><a href="/adminpanel">Panel</a></li>
	        @endif
	      </ul>
	  	</div>
  	</div>

  	
</nav>

	<!-- =============================== End Navbar ================================ -->







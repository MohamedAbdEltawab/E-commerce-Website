

<div class="top">
<a href="<?php echo e(url('/')); ?>">
	<span><img src="<?php echo e(url('website/image/logo.png')); ?>" ></span>
</a>
	<form action="<?php echo e(url('query')); ?>" method="POST" class="form">
	<?php echo e(csrf_field()); ?>

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
			<?php if(Auth::guest()): ?>

				<a href="<?php echo e(route('login')); ?>">Login</a><span> | </span>
				<a href="<?php echo e(route('register')); ?>">Sign In</a>

			 <?php endif; ?>
			
		</div>
	</div>
		<div class="cart">
		
			<i class="glyphicon glyphicon-shopping-cart"></i>
			<span class="counter"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQuantity : ''); ?>

			<a href="<?php echo e(url('product/shoppingcart')); ?>">	
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
	      <?php if(!(Auth::guest())): ?>
	       	<span class="username">
				 	<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> 
                        </a>

                        <ul class="dropdown-menu" role="menu" id="drop">
                            <li class="out">
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
        		</span>
           <?php endif; ?>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="active"><a href="<?php echo e(url('/')); ?>">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
			
			
	        <li><a href="<?php echo e(url('/contactus')); ?>">Contact Us</a></li>


	        <li class="dropdown">
	          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          

	    	<li><a href="<?php echo e(url('/allcategories')); ?>">All Categories</a></li>
	    	<li role="separator" class="divider"></li>
            <?php $__currentLoopData = App\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('/subcategory/'.$category->id.'/view')); ?>"><?php echo e($category->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
	          </ul>
	        </li>
	        <?php if(! Auth::guest() && Auth::user()->admin_role > 0): ?>
	        <li><a href="/adminpanel">Panel</a></li>
	        <?php endif; ?>
	      </ul>
	  	</div>
  	</div>

  	
</nav>

	<!-- =============================== End Navbar ================================ -->







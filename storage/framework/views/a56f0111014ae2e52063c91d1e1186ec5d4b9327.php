 

 <?php $__env->startSection('title'); ?>

    Home
 <?php $__env->stopSection(); ?>
 


<?php $__env->startSection('content'); ?>


<!-- =============================== Start Slide bar =========================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="container">
    <div class="carousel-inner" role="listbox">
      
        <div class="item active">
    <?php $__currentLoopData = App\Slide::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(!empty($slide->photoone) ) {?>
          <img  src="<?php echo e(url('upload/slide/'.$slide->photoone)); ?>" style="width: 1200px; height: 380px">
        </div>

        <div class="item">
        <?php }elseif(!empty($slide->phototwo)) {?>
            <img  src="<?php echo e(url('upload/slide/'.$slide->phototwo)); ?>" style="width: 1200px; height: 380px">
        </div>

        <div class="item">
        <?php }elseif(!empty($slide->photothree)) {?>
            <img  src="<?php echo e(url('upload/slide/'.$slide->photothree)); ?>" style="width: 1200px; height: 380px">
        </div>
        <div class="item">
       <?php }elseif(!empty($slide->photofour)){ ?>
            <img  src="<?php echo e(url('upload/slide/'.$slide->photofour)); ?>" style="width: 1200px; height: 380px">
        </div>
       <?php   }?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

     
    
    </div>
</div>

          <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
    
    <!-- =============================== End Slide bar =========================== -->
    <!-- =============================== Start Top Seller ======================== -->
        <div class="container">
        <hr>
            <div class="product_head">
                <h2>Recent Products</h2>
            </div>
            <?php $__currentLoopData = App\Product::latest()->paginate(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
               <a href="<?php echo e(url('/allcategories/'.$product->id.'/view')); ?>">
                    <div class="card">
                        <span><?php echo e($product->price); ?>$</span>
                        <img src="<?php echo e(url('/upload/product/'.$product->photo)); ?>">
                        <p><?php echo e($product->description); ?></p>
                        <a href="<?php echo e(url('add_to_cart/'.$product->id)); ?>">
                            <button class="btn btn-warning">Add To Cart</button>
                        </a>
                    </div>
                </a>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- ============== New Department =============-->
            <hr>

            <div class="product_head">
                <h2>Product Over 2000 $</h2>
            </div>
            <?php $__currentLoopData = App\Product::all()->where('price', '>', '2000'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('/allcategories/'.$product->id.'/view')); ?>">
                    <div class="card">
                        <span><?php echo e($product->price); ?>$</span>
                        <img src="<?php echo e(url('/upload/product/'.$product->photo)); ?>">
                        <p><?php echo e($product->description); ?></p>
                        <a href="<?php echo e(url('add_to_cart/'.$product->id)); ?>">
                            <button class="btn btn-warning">Add To Cart</button>
                        </a>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <hr>
        </div>
         
        
        
    <!-- =============================== End Top Seller ======================== -->
    <!-- =============================== Start About   ======================== -->
                   <!-- <div class="about" id="about">
                        <div>
                            <h1><?php echo e(getsetting('About heading')); ?></h1>
                        </div>
                        
                        <p><?php echo e(getsetting('About Body')); ?></p>
                    </div> -->
    <!-- ===============================  End About   ======================= -->
    <!-- =============================== Start Brands ======================== -->


  
            <div class="brands">
                            <h1 class="text-center">Our Brands</h1>
                <div class="col-xs-2">
                    <img src="website/image/apple-brand.jpg" alt="brand">
                </div>
                <div class="col-xs-2">
                    <img src="website/image/adidas.png" alt="brand">
                </div>
                <div class="col-xs-2">
                    <img src="website/image/Audi.jpg" alt="brand">
                </div>
                <div class="col-xs-2">
                    <img src="website/image/samsung.png" alt="brand">
                </div>
                <div class="col-xs-2">
                    <img src="website/image/sport-brand.jpg" alt="brand">
                </div>
                <div class="col-xs-2">
                    <img src="website/image/unilever.jpg" alt="brand">
                </div>
            </div>

    <!-- ===============================   End Brands       ========================= -->

    <!-- ===============================   Start Contact Us ========================= -->
    <div class="contact" id="contact">
        <form action="<?php echo e(url('/message')); ?>" method="POST" >
         <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <input type="text" name="name" placeholder="Name" class="form-control" style="color:#000">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="E-mail" class="form-control" style="color:#000">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Message" style="color:#000"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-warning" type="submit" name="submit" value="Send">
            </div>
        </form>
        <div class="address">
            <div class="address">
                <h3>our address</h3>
                <p><?php echo e(getSetting('Address')); ?></p>
                
            </div>
            <div class="call">
                <h3>Call Us</h3>
                <p>Tel    : <?php echo e(getSetting('Telephone')); ?></p>
                
            </div>
        </div>
    </div>

 
    <!-- ===============================   End Contact Us   ========================= -->


    <?php $__env->stopSection(); ?>

       
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
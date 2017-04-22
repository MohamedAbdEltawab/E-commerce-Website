<?php $__env->startSection('title'); ?>

Edit User
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 <section class="content-header">
      <h1 style="text-align: center;"> Edit User </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('/adminpanel/users')); ?>">Users Control</a></li>
        <li class="active"><a href="<?php echo e(url('/adminpanel/users/'.$user->id .'/edit')); ?>">Edit User</a></li>
        
      </ol>
    </section>
    

    <section class="content">
      	<div class="row">
       		 <div class="col-xs-12">
     		 <div class="box">
	            <div class="box-header">
	              <h2 class="box-title">Edit User :  <?php echo e($user->name); ?></h2>
	            </div>
            
            	<div class="box-body">
    			</div>
    		</div>
   		 </div>
   		</div>
   </section>

   
  <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/adminpanel/users/'. $user->id.'/update' )); ?>"> 
  
    <?php echo e(csrf_field()); ?>

    

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">

            <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
        </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label">Admin Role</label>

      <div class="col-md-6">
       <input type="number" class="form-control" name="admin_role" value="<?php echo e($user->admin_role); ?>">
            
      </div>
    </div>



    <div class="form-group">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>">
        </div>
    </div>
       

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update
            </button>
        </div>
    </div>
                    

   </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
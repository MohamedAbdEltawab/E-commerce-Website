<?php $__env->startSection('title'); ?>

Add User
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
 <section class="content-header">
      <h1 style="text-align: center;"> Add User </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('/adminpanel/users')); ?>">Users Control</a></li>
        <li class="active"><a href="<?php echo e(url('/adminpanel/users/create')); ?>">Add User</a></li>
        
      </ol>
    </section>

    <section class="content">
      	<div class="row">
       		 <div class="col-xs-12">
     		 <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add New User</h3>
	            </div>
            <!-- /.box-header -->
            	<div class="box-body">
    			</div>
    		</div>
   		 </div>
   		</div>
   </section>

   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/adminpanel/users')); ?>">
   <?php echo $__env->make('admin.users.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

   </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
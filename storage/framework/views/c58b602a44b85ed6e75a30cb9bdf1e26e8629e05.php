<?php $__env->startSection('title'); ?>

Edit Category
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <section class="content-header">
      <h1 style="text-align: center;"> Edit Category </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url('/adminpanel/categories')); ?>">Categories Control</a></li>
        <li class="active"><a href="#">Subcategory</a></li>
        <li class="active"><a href="#">Edit Subcategory</a></li>
        
      </ol>
    </section>

    <section class="content">
        <div class="row">
           <div class="col-xs-12">
         <div class="box">
              <div class="box-header">
                <h3 class="box-title">Category Name  : <?php echo e($subcategory->name); ?></h3>
              </div>
            <!-- /.box-header -->
              <div class="box-body">
          </div>
        </div>
       </div>
      </div>
   </section>


   <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/adminpanel/categories/'.$subcategory->id.'/change')); ?>">
    <?php echo e(csrf_field()); ?>


          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
              <label for="name" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
              
                  <input id="name" type="text" class="form-control" name="name" 
                  value="<?php echo e($subcategory->name); ?>" required autofocus>

                  <?php if($errors->has('name')): ?>
                      <span class="help-block">
                          <strong><?php echo e($errors->first('name')); ?></strong>
                      </span>
                  <?php endif; ?>
              </div>
          </div>
         <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-pencil">Edit Category</i>
                      
                  </button>
              </div>
          </div>

   </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>

<?php echo e($subcat->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
 <!-- DataTables -->
 
 <?php echo Html::style('admin/data/css/jquery.dataTables.min.css'); ?>

 <?php echo Html::style('admin/data/css/dataTables.bootstrap.min.css'); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <section class="content-header">
      <h1>
        All Product
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo e(url('/adminpanel/categories')); ?>">All Categories</a></li>
        <li><a href="#">Subcategory</a></li>
        <li class="active"><a href="#">Product</a></li>
        
      </ol>
    </section>

     <div class="container">
  <div class="col-md-10 " style="margin-top: 30px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><h3><?php echo e(ucfirst($subcat->name)); ?></h3></div>
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
                 <?php $__currentLoopData = $subcat->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                  <td><?php echo e($product->id); ?></td>
                  <td><?php echo e($product->name); ?></td>
                  <td><?php echo e($product->description); ?></td>
                  <td><?php echo e($product->price); ?></td>
                  <td><?php echo e($product->amount); ?></td>
                  <td><?php echo e($product->color); ?></td>
                  <td><?php echo e($product->photo); ?></td>
                  
                  
                <td><a href="<?php echo e(url('adminpanel/categories/subcategory/'.$product->id.'/edit')); ?>"><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href="<?php echo e(url('adminpanel/categories/subcategory/'.$product->id.'/delete')); ?>"><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>


      <h3 style="text-align: center;">Add Product</h3>

  <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('adminpanel/categories/subcategory/'.$subcat->id.'/store')); ?>" enctype="multipart/form-data">

  <?php echo e(csrf_field()); ?>


      <div class="form-group">
          <label for="name" class="col-md-4 control-label">Name</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
          </div>
      </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Description</label>
          <div class="col-md-6">
  
              <input id="name" type="text" class="form-control" name="description" value="<?php echo e(old('name')); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Price</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="price" value="<?php echo e(old('name')); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Amount</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="amount" value="<?php echo e(old('name')); ?>" required>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Color</label>
          <div class="col-md-6">
              <input id="name" type="text" class="form-control" name="color" value="<?php echo e(old('name')); ?>" required>
          </div>
        </div>
        <div class="form-group">
          <label for="name" class="col-md-4 control-label">Photo</label>
          <div class="col-md-6">
          <?php echo Form::file('photo', ['class' => 'form-control']); ?>

          
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
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php echo Html::script('admin/data/js/jquery.dataTables.min.js'); ?>

<?php echo Html::script('admin/data/js/dataTables.bootstrap.min.js'); ?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#dataTable").DataTable({
      paging:true,
      "lengthMenu": [[3, 5, 10, 25, 50, -1], [3, 5, "ten", 25, 50, "All"]],
    });
  });
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('title'); ?>

All Categories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
 <!-- DataTables -->
 
 <?php echo Html::style('admin/data/css/jquery.dataTables.min.css'); ?>

 <?php echo Html::style('admin/data/css/dataTables.bootstrap.min.css'); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <!-- <div class="container">
  <div class="col-md-8 col-md-offset-1" style="margin-top: 60px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>  
        <div class="panel-body">

          
          <table id="dataTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Register Date</th>
                <th>Admin Role</th>
              </tr>
            </thead>
            <tbody>
            
              <tr>
                <td><?php echo e(Auth::user()->id); ?></td>
                <td><?php echo e(Auth::user()->name); ?></td>
                <td><?php echo e(Auth::user()->email); ?></td>
                <td><?php echo e(Auth::user()->created_at); ?></td>
                <td><?php echo e(Auth::user()->admin_role); ?></td>
              </tr>
            
            </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>
 -->
 <section class="content-header">
      <h1>
        All Categories
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">All Categories</a></li>
        
      </ol>
    </section>


           <div class="box">
            <div class="box-header">
             <center> <h3 class="box-title">Control In Categories</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> View</th>
                </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                  <td><?php echo e($category->id); ?></td>
                  <td><?php echo e($category->name); ?></td>
                  
                  
                  <td><?php echo e($category->created_at); ?></td>
                  
                <td><a href="<?php echo e(url('adminpanel/categories/'.$category->id.'/edit')); ?>"><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href="<?php echo e(url('adminpanel/categories/'.$category->id.'/delete')); ?>"><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                 <td><a href="<?php echo e(url('adminpanel/categories/'.$category->id.'/show')); ?>"><button class="btn btn-info">View</button></a></td>
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Created At</th>
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> View</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

 
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php echo Html::script('admin/data/js/jquery.dataTables.min.js'); ?>

<?php echo Html::script('admin/data/js/dataTables.bootstrap.min.js'); ?>

<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#dataTable").DataTable({
      paging:true,
    });
  });
</script> -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
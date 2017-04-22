<?php $__env->startSection('title'); ?>

All Users
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
        All Users
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Users Control</a></li>
        
      </ol>
    </section>


           <div class="box">
            <div class="box-header">
             <center> <h3 class="box-title">Control In Users</h3></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Register Date</th>
                  <th>Admin Role</th>
               <th> Edit</th>
                <th> Delete</th>
                </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                  <td><?php echo e($userinfo->id); ?></td>
                  <td><?php echo e($userinfo->name); ?></td>
                  <td><?php echo e($userinfo->email); ?></td>
                  
                  <td><?php echo e($userinfo->created_at); ?></td>
                  <td><?php if($userinfo->admin_role > 0 && $userinfo->admin_role <= 3) { echo 'admin';} ?></td>
                  <td><a href="<?php echo e(url('adminpanel/users/'. $userinfo->id.'/edit')); ?>"><button class="btn btn-success">Edit</button></a></td>
                  <td><a href="<?php echo e(url('adminpanel/users/'. $userinfo->id.'/delete')); ?>"><button class="btn btn-danger">Delete</button></a></td>
                </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Register Date</th>
                  <th>Admin Role</th>
                   <th>Control</th>
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
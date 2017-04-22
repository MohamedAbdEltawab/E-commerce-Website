<?php $__env->startSection('title'); ?>

Messages 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

		<?php echo Html::style('admin/data/css/jquery.dataTables.min.css'); ?>

	    <?php echo Html::style('admin/data/css/dataTables.bootstrap.min.css'); ?>





 <section class="content-header">
      <h1>
        All Messages From Contact Us
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url('/adminpanel')); ?>"><i class="fa fa-home"></i> Home</a></li>
        
        
        <li class="active"><a href="#">Messages</a></li>
        
      </ol>
    </section>

<div class="container">
  <div class="col-md-10 " style="margin-top: 30px">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading" style="text-align: center;"><h3></h3></div>
        <div class="panel-body">

          
          <table id="dataTable">
            <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  
                  <th> Edit</th>
                  <th> Delete</th>
                  <th> View</th>
                </tr>
                </thead>
                <tbody>
                 <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                  <td><?php echo e($message->id); ?></td>
                  <td><?php echo e($message->name); ?></td>
                  <td><?php echo e($message->email); ?></td>
                  <td><?php echo e($message->message); ?></td>
                  
                  
                  
                <td><a href=""><button class="btn btn-success">
                <i class="fa fa-pencil">Edit</button></i></a></td>
                 
                <td><a href=""><button class="btn btn-danger">
                <i class="fa fa-trash-o fa-lg"></i>Delete</button></a></td>
                 <td><a href=""><button class="btn btn-info">View</button></a></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
          </table>
        </div>    
      </div>
    </div>
  </div>
 </div>



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
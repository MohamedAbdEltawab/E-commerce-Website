 <?php $__env->startSection('title'); ?>

    All Categories
 <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



<div class="container">
		<h2>All Categories</h2>
		<div class="rows col-xs-12">
		<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="category">

				<h4><?php echo e($category->name); ?></h4>
			<div class="content">
				<ul>
				<?php $__currentLoopData = $category->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(url('allcategories/'.$subcat->id)); ?>">
						<li><?php echo e($subcat->name); ?></li>
					</a>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
				
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>

			



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
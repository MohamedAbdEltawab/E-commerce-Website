<?php $__env->startSection('title'); ?>
Login
<?php $__env->stopSection(); ?>
<style type="text/css">
    .panel{
        border-radius: 10px;
        border:none;
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row" style="margin: 100px">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>" autocomplete="off">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                            <div class="col-md-1">
                                <input id="email" type="email" class="form-control" name="email" required placeholder="Type Your Email" autocomplete="off">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-3 control-label">Password</label>

                            <div class="col-md-2">
                                <input id="password" type="password" class="form-control" name="password" required style="width:250px; background: #FFF;" autocomplete="off">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"  style="margin-left: -108">Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 col-md-offset-1">
                                <button type="submit" class="btn btn-warning" style="width: 100px; padding: 10px; font-size: 18px">
                                    Login
                                </button>

                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
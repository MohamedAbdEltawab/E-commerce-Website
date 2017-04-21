<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
         <title>
            <?php echo e(getSetting()); ?> |  <?php echo $__env->yieldContent('title'); ?>
         </title>  
        <?php echo Html::style('website/css/bootstrap.min.css'); ?>

        
        <?php echo Html::style('website/css/font-awesome.min.css'); ?>

       
        <?php echo Html::style('website/css/style.css'); ?>

      
              <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/
 css">

     <?php echo $__env->yieldContent('header'); ?>
     
</head>
<body>
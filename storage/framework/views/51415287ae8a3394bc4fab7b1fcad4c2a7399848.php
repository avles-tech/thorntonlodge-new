<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="no-js">
    <head>
        <!-- meta character set -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="language" content="en">
        <meta name="robots" content="index,follow,all" />
        <!-- Author Meta -->
        <meta name="Author" content="Thornton Lodge" />
        <meta name="HandheldFriendly" content="True">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/images/favicon.png">
        <!-- Site Title -->
        <?php echo $__env->yieldContent('con_title'); ?>
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
        <!-- //Meta tag Keywords -->
        <!-- Custom-Files -->
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" media="all" />
        <!-- Style-CSS -->
        <!-- font-awesome-icons -->
        <link href="<?php echo e(asset('css/font-awesome.css')); ?>" rel="stylesheet">
        <!-- //font-awesome-icons -->
        <!-- /Fonts -->
        <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
        <!-- //Fonts -->
        <?php echo $__env->yieldContent('extra_css'); ?>
        <!--
        <!-- Bootstrap -->
        <link href="css/head/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- Extra plugin css -->
        <link href="css/head/css/style.css" rel="stylesheet">
        <link href="css/head/css/responsive.css" rel="stylesheet">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142071470-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-142071470-1');
		</script>
    </head>
    <body>
        <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!--<script src="js/jquery-2.2.4.js"></script>-->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/theme.js"></script>
        <?php echo $__env->yieldContent('extra_script'); ?>

    </body>
</html>

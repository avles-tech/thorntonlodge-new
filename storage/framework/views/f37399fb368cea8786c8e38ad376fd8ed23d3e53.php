<?php $__env->startSection('con_title'); ?>
    <title><?php echo e($page_title); ?></title>
    <meta name="description" content="<?php echo e($description); ?>">
    <meta name="keywords" content="<?php echo e($keywords); ?>" />
    <meta name="Abstract" content="<?php echo e($Abstract); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_css'); ?>
    <!-- Additional Css -->
    <link href='/css/lightbox/lightgallery.css' rel='stylesheet' type='text/css'>
    <link href='/js/lightbox/jquery.min.js' rel='stylesheet' type='text/css'>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="about" style="margin-top: -378px;">
        <div class="container-2">
            <img src="/images/slider/THORNTON LODGE_6425.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Gallery</h3>
        </div>
    </section>

    <section class="about py-lg-5 py-md-5 py-5">
        <div class="container">
            <div class="gallery">
                <div class="row mid-slide">
                <?php if(count($galleries)>0): ?>
                    <div class="demo-gallery">
                        <ul class="lightgallery list-unstyled row">
                        <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-xs-6 col-sm-4 col-lg-4 featured-content" data-responsive="Uploads/gallery_images/<?php echo e($gallery->image); ?> 375, Uploads/gallery_images/<?php echo e($gallery->image); ?> 480, Uploads/gallery_images/<?php echo e($gallery->image); ?> 800" data-src="/Uploads/gallery_images/<?php echo e($gallery->image); ?>" data-sub-html="<p><?php echo e($gallery->title); ?></p>">
                                    <a href="">
                                        <img class="img-responsive" src="/Uploads/gallery_images/<?php echo e($gallery->image); ?>" style="height: 250px;">
                                    </a>
                                    <h6><?php echo e($gallery->title); ?></h6>
                                </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <p class="noresult"><i class="fa fa-info-circle"></i> No Results found<br/></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_script'); ?>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.lightgallery').lightGallery();
        });
    </script>
    <script src="/js/lightbox/picturefill.min.js"></script>
    <script src="/js/lightbox/lightgallery-all.min.js"></script>
    <script src="/lib/jquery.mousewheel.min.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
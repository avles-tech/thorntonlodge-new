<?php $__env->startSection('con_title'); ?>
    <title><?php echo e($page_title); ?></title>
    <meta name="description" content="<?php echo e($description); ?>">
    <meta name="keywords" content="<?php echo e($keywords); ?>" />
    <meta name="Abstract" content="<?php echo e($Abstract); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container-2" id="top_banner" style="margin-top: -378px;">
        <img src="/images/slider/THORNTON LODGE_6371.jpg" style="width: 100%; "/>
        <h3 class="bottom-left">bed Availability</h3>
    </div>
    <!--/counter-->
    <section class="stats py-lg-5 py-4" style="margin-top:-47px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <br/><br/>
                </div>

                <div class="col col-back-div-left">
                    <div class="counter">
                        <h3 class="timer count-title text-right count-number"><?php echo e($room_info->beds); ?></h3>
                        <p class="count-text text-right">Total Number of beds</p>
                    </div>
                </div>
                <div class="col col-back-div-right">
                    <div class="counter">
                        <h3 class="timer count-title count-number text-left"><?php echo e($count_room); ?></h3>
                        <p class="count-text text-left">Total number of vacancies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//counter-->
    <section class="about py-lg-1 py-md-1 py-1" style="margin-top:-125px;">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5 py-3">
                <!-- services -->
                <div class="fetured-info">
                    <h3 class="tittle text-center my-lg-4 mb-3 py-4"></h3>
                    <div class="row mid-slide">
                        <?php if(count($rooms)>0): ?>
                            <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 featured-content" style="margin-bottom: 20px;">
                                    <img src="/Uploads/room_cover_images/<?php echo e($room->cover_image); ?>" style="height: 255px;" alt="<?php echo e($room->title); ?>" class="img-fluid image1">
                                    <span class="money">Available</span>
                                    <!--/Property_info-->
                                    <div class="property-info-list">
                                        <div class="footer-properties">
                                            <a href="<?php echo e(route('contact')); ?>" ><span class="year text-right"> Enquire Now</span></a>
                                            <a class="admin" href="#"><?php echo e($room->title); ?></a>
                                        </div>
                                        <p><?php echo e($room->excerpt); ?></p>
                                    </div>
                                    <!--//Property_info-->
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p class="noresult"><i class="fa fa-info-circle"></i> No room results found</p>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-center" style="margin-top:20px;">
                                <?php echo e($rooms->links()); ?>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //services -->
    </section>
    <!-- //ab -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra_script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/pages/vacancy.blade.php ENDPATH**/ ?>